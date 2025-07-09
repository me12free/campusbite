@include('components.head', [
    'title' => 'Dashboard | CampusBite',
    'meta_description' => 'Your CampusBite dashboard overview.',
])
<body class="bg-light">
    @include('components.navbar')
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;min-height:60vh;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm feature-card" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h2 class="mb-4 gradient-text" style="font-family:'Montserrat',sans-serif;">Dashboard</h2>
                        <div class="alert alert-success mb-3">You're logged in!</div>
                        <p class="text-secondary">Welcome to your CampusBite dashboard. Here you can manage your orders, view your cart, and explore the menu and blog.</p>
                        <div class="d-flex gap-3 mt-4">
                            <a href="/menu" class="btn btn-primary" style="background:#e52e71;border:none;">Browse Menu</a>
                            <a href="/cart" class="btn btn-warning" style="background:#fbbf24;border:none;">View Cart</a>
                            <a href="/blog" class="btn btn-success" style="background:#22c55e;border:none;">Read Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
