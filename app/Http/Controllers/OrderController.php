<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\MilestoneSnackMail;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Cart is empty.');
        }

        $promoCode = $request->input('promo_code');
        $user = Auth::user();
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['menu']->price * $item['quantity'];
        }

        // Apply FIRST10 promo code for first order
        $discount = 0;
        if ($promoCode === 'FIRST10' && $user && $user->orders()->count() === 0) {
            $discount = 0.1 * $total;
        }
        $finalTotal = $total - $discount;

        DB::beginTransaction();
        try {
            $order = Order::create([
                'user_id' => $user ? $user->id : null,
                'total' => $finalTotal,
                'status' => 'pending',
                'promo_code' => $promoCode,
            ]);
            foreach ($cart as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'menu_id' => $item['menu']->id,
                    'quantity' => $item['quantity'],
                ]);
            }
            // Milestone: 3 orders = free snack email
            if ($user && $user->orders()->count() === 3) {
                Mail::to($user->email)->queue(new MilestoneSnackMail($user));
            }
            DB::commit();
            session()->forget('cart');
            return redirect()->route('menu.index')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('cart.index')->with('error', 'Order failed. Please try again.');
        }
    }
}
