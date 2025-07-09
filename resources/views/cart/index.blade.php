
<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Your Cart | CampusBite',
    'meta_description' => 'View your CampusBite cart and checkout affordable student meals, snacks, and drinks. Fast campus delivery and student deals!',
    'canonical' => '/cart',
    'og_title' => 'Your Cart | CampusBite',
    'og_description' => 'View your CampusBite cart and checkout affordable student meals, snacks, and drinks. Fast campus delivery and student deals!',
    'og_url' => '/cart',
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;">
        <div class="d-flex align-items-center mb-4">
            <h1 class="mb-0 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">Your Cart</h1>
        </div>
        <div class="card border-0 shadow-sm feature-card mb-4" style="background:#fffbe3;border-radius:1.25rem;">
            <div class="card-body p-4">
                @if(count($cart) > 0)
                    <h5 class="mb-3" style="color:#e52e71;">Your Cart Items</h5>
                    <ul class="list-group mb-3">
                        @php $total = 0; @endphp
                        @foreach($cart as $item)
                            @php $total += $item['menu']->price * $item['quantity']; @endphp
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background:#fffbe3;">
                                <div>
                                    <img src="{{ $item['menu']->image_url }}" alt="{{ $item['menu']->name }}" width="40" height="40" class="rounded me-2" style="object-fit:cover;">
                                    <span class="fw-bold">{{ $item['menu']->name }}</span>
                                    <span class="text-secondary">x{{ $item['quantity'] }}</span>
                                </div>
                                <form method="POST" action="{{ route('cart.remove', $item['menu']->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Remove</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mb-3 text-end">
                        <span class="fw-bold" style="color:#22c55e;">Total: KES {{ number_format($total, 2) }}</span>
                    </div>
                    <form method="POST" action="{{ route('order.checkout') }}" class="mb-3">
                        @csrf
                        <div class="input-group mb-2">
                            <input type="text" name="promo_code" class="form-control" placeholder="Promo code (optional)">
                            <button type="submit" class="btn btn-success" style="background:#22c55e;border:none;">Checkout</button>
                        </div>
                    </form>
                    <a href="/menu" class="btn btn-link" style="color:#e52e71;">Add more items</a>
                @else
                    <div class="alert alert-info mb-3" style="background:#fbbf24;color:#fff;border:none;">Your cart is empty.</div>
                    <a href="/menu" class="btn btn-primary shadow" style="background:#e52e71;border:none;">Browse Menu</a>
                @endif
            </div>
        </div>
        <style>
            .gradient-text {
                background: linear-gradient(90deg, #ff8a00, #e52e71);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            .feature-card .card-title {font-family:'Montserrat',sans-serif;}
            @media (max-width: 767px) {
                .feature-card {border-radius:1rem;}
            }
        </style>
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
