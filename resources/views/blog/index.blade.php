========
<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'CampusBite Blog | Affordable Food for Strathmore Students',
    'meta_description' => 'CampusBite blog: campus food tips, student deals, healthy eating, and affordable menu options for Strathmore students.',
    'canonical' => url()->current(),
    'og_title' => 'CampusBite Blog | Affordable Food for Strathmore Students',
    'og_description' => 'CampusBite blog: campus food tips, student deals, healthy eating, and affordable menu options for Strathmore students.',
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
            <h1 class="mb-0 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">CampusBite Blog</h1>
        </div>
        <p class="mb-4" style="color:#124B45; background:rgba(255,255,255,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001; font-family:'Montserrat',sans-serif;">
            Get the latest campus food tips, student deals, and healthy eating ideas.<br>
            <span class="d-block mt-2" style="color:#124B45;">🍔 <strong>Chapati wraps, rice bowls, fries, smoothies</strong></span>
            <span class="d-block" style="color:#fbbf24;">🎉 <strong>First order? Use <span style='background:#fbbf24;color:#124B45;padding:2px 6px;border-radius:6px;'>FIRST10</span> for 10% off!</strong></span>
            <span class="d-block" style="color:#22c55e;">📧 <strong>Sign up for exclusive deals & free soda</strong></span>
            <div class="mt-3">
                <a href="/register" class="btn btn-warning btn-lg me-2 shadow" style="background:#fbbf24;color:#124B45;border:none;font-weight:600;">Sign Up & Get 10% Off</a>
                <a href="/menu" class="btn btn-primary btn-lg" style="background:#124B45;border:none;">Browse Menu</a>
            </div>
        </p>
        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="background:#fffbe3;border-radius:1.25rem;">
                        <img src="{{ $blog->image_url }}" class="card-img-top" alt="{{ $blog->title }} cover" loading="lazy" style="object-fit:cover;max-height:180px;border-top-left-radius:1.25rem;border-top-right-radius:1.25rem;">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mt-2" style="font-weight:700;color:#fbbf24;">{{ $blog->title }}</h5>
                            <p class="card-text text-secondary">{{ $blog->excerpt }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-outline-primary btn-sm" style="color:#124B45;border-color:#124B45;">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">No blog posts found.</div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links() }}
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
            .btn-outline-primary {
                color: #124B45;
                border-color: #124B45;
            }
            .btn-outline-primary:hover {
                background-color: #124B45;
                color: #fff;
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
    <footer style="background:#124B45; color:#fff; padding:2rem 0;">
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
    <!-- SEO: Schema.org Organization & WebSite markup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
