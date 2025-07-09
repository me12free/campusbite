<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, $menuId)
    {
        $menu = Menu::findOrFail($menuId);
        $quantity = max(1, (int) $request->input('quantity', 1));
        $cart = session('cart', []);
        if (isset($cart[$menuId])) {
            $cart[$menuId]['quantity'] += $quantity;
        } else {
            $cart[$menuId] = [
                'menu' => $menu,
                'quantity' => $quantity,
            ];
        }
        session(['cart' => $cart]);
        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }

    public function remove($menuId)
    {
        $cart = session('cart', []);
        unset($cart[$menuId]);
        session(['cart' => $cart]);
        return redirect()->route('cart.index');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('cart.index');
    }
}
