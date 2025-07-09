
<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Menu | CampusBite',
    'meta_description' => 'Browse the CampusBite menu for affordable student meals, chapati wraps, snacks, and drinks. Order food online for fast campus delivery and enjoy budget-friendly bites!',
    'canonical' => '/menu',
    'og_title' => 'Menu | CampusBite',
    'og_description' => 'Browse the CampusBite menu for affordable student meals, chapati wraps, snacks, and drinks. Order food online for fast campus delivery and enjoy budget-friendly bites!',
    'og_url' => '/menu',
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
    <main class="container py-5" style="font-family:'Montserrat',sans-serif;">
        <div class="d-flex align-items-center mb-4">
            <h1 class="mb-0 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">CampusBite Menu</h1>
        </div>
        <p class="mb-4" style="color:#222; background:rgba(255,251,227,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001;">Discover our student-friendly menu: chapati wraps, snacks, and drinks, all delivered fast to your campus. <a href="/cart" style="color:#e52e71;">View your cart</a> or <a href="/blog" style="color:#22c55e;">read our blog</a> for food tips!</p>
        <div class="row">
            @forelse($menus as $menu)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="background:#fffbe3;border-radius:1.25rem;">
                        <img src="{{ $menu->image_url }}" class="card-img-top" alt="{{ $menu->name }} - CampusBite menu item" loading="lazy" style="object-fit:cover;max-height:180px;border-top-left-radius:1.25rem;border-top-right-radius:1.25rem;">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mt-2" style="font-weight:700;color:#e52e71;">{{ $menu->name }}</h5>
                            <p class="card-text text-secondary">{{ $menu->description }}</p>
                            <p class="card-text fw-bold" style="color:#22c55e;">KES {{ number_format($menu->price, 2) }}</p>
                            <form method="POST" action="{{ route('cart.add', $menu->id) }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-primary shadow" style="background:#e52e71;border:none;">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">No menu items available at the moment.</div>
                </div>
            @endforelse
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
