

<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Your Cart | Affordable Food for Strathmore Students',
    'meta_description' => 'View your CampusBite cart and checkout affordable student meals, snacks, and drinks. Fast campus delivery and student deals!',
    'canonical' => url()->current(),
    'og_title' => 'Your Cart | Affordable Food for Strathmore Students',
    'og_description' => 'View your CampusBite cart and checkout affordable student meals, snacks, and drinks. Fast campus delivery and student deals!',
    'og_url' => url()->current(),
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    <!-- Custom Header Branding -->
    <nav class="navbar navbar-expand-lg" style="background:#124B45;">
      <div class="container">
        <a class="navbar-brand fw-bold" href="/" style="color:#fbbf24;font-size:2rem;">CampusBite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color:#fff;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="/menu" style="color:#fff;">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="/register" style="color:#fff;">Sign Up</a></li>
            <li class="nav-item"><a class="nav-link" href="/blog" style="color:#fff;">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact" style="color:#fff;">Contact</a></li>
          </ul>
          <a href="/register" class="btn btn-outline-warning ms-3" style="color:#124B45;border-color:#fbbf24;background:#fbbf24;font-weight:600;">Sign Up & Get 10% Off</a>
        </div>
      </div>
    </nav>
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;">
        <div class="d-flex align-items-center mb-4">
            <h1 class="mb-0 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">Your Cart</h1>
        </div>
        <div class="card border-0 shadow-sm feature-card mb-4" style="background:#fffbe3;border-radius:1.25rem;">
            <div class="card-body p-4">
                @if(count($cart) > 0)
                    <h5 class="mb-3" style="color:#124B45;">Your Cart Items</h5>
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
                    <a href="/menu" class="btn btn-link" style="color:#124B45;">Add more items</a>
                @else
                    <div class="alert alert-info mb-3" style="background:#fbbf24;color:#fff;border:none;">Your cart is empty.</div>
                    <a href="/menu" class="btn btn-primary shadow" style="background:#124B45;border:none;">Browse Menu</a>
                @endif
            </div>
        </div>
        <style>
            .gradient-text {
                background: linear-gradient(90deg, #fbbf24, #124B45);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            .feature-card .card-title {font-family:'Montserrat',sans-serif;}
            @media (max-width: 767px) {
                .feature-card {border-radius:1rem;}
            }
            .btn-primary {
                background-color: #124B45;
                border-color: #124B45;
            }
            .btn-primary:hover {
                background-color: #0d3a35;
                border-color: #0d3a35;
            }
        </style>
    </main>
    <!-- Custom Footer Branding -->
    <footer style="background:#124B45; color:#fff; padding:2rem 0; margin-top:2rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 style="color:#fbbf24;font-weight:700;">CampusBite</h5>
                    <p style="color:#fff;">Affordable food for Strathmore students. Fast delivery, healthy options, and exclusive deals.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h6 style="color:#fbbf24;">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="/menu" style="color:#fff;">Menu</a></li>
                        <li><a href="/register" style="color:#fff;">Sign Up</a></li>
                        <li><a href="/blog" style="color:#fff;">Blog</a></li>
                        <li><a href="/contact" style="color:#fff;">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h6 style="color:#fbbf24;">Contact</h6>
                    <p style="color:#fff;">Email: info@campusbite.com<br>Phone: 0712 345678</p>
                    <div class="d-flex gap-3 mt-2">
                        <a href="#" style="color:#fff;font-size:1.5rem;"><i class="bi bi-facebook"></i></a>
                        <a href="#" style="color:#fff;font-size:1.5rem;"><i class="bi bi-instagram"></i></a>
                        <a href="#" style="color:#fff;font-size:1.5rem;"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" style="color:#fbbf24;">&copy; 2025 CampusBite. All rights reserved.</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
