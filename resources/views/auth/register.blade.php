
<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Register | Affordable Food for Strathmore Students',
    'meta_description' => 'Sign up for CampusBite to order food, get offers, and join the student community. Enjoy affordable campus meals and exclusive deals!',
    'canonical' => url()->current(),
    'og_title' => 'Register | Affordable Food for Strathmore Students',
    'og_description' => 'Sign up for CampusBite to order food, get offers, and join the student community. Enjoy affordable campus meals and exclusive deals!',
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
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                <div class="card border-0 shadow-sm feature-card" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h2 class="mb-4 text-center gradient-text" style="font-family:'Montserrat',sans-serif;">Register</h2>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}" aria-label="CampusBite registration form">
                            <div class="mb-3">
                                <label for="name" class="form-label" style="color:#e52e71;">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus aria-required="true">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color:#fbbf24;">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required aria-required="true">
                            </div>
                            <div class="mb-3">
                                <label for="student_id" class="form-label" style="color:#22c55e;">Student ID</label>
                                <input type="text" class="form-control" id="student_id" name="student_id" required aria-required="true">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="email_opt_in" name="email_opt_in" value="1">
                                <label class="form-check-label" for="email_opt_in" style="color:#e52e71;">Subscribe to email offers</label>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" style="color:#e52e71;">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required aria-required="true">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label" style="color:#fbbf24;">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required aria-required="true">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 shadow" style="background:#124B45;border:none;">Register</button>
                            <a href="/menu" class="btn btn-link" style="color:#e52e71;">Browse Menu</a>
                        </form>
                    </div>
                </div>
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