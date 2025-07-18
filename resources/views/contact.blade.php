<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Contact CampusBite | Affordable Food for Strathmore Students',
    'meta_description' => 'Contact CampusBite for campus food delivery, student deals, and healthy eating tips. Reach out for support, feedback, or partnership inquiries.',
    'canonical' => url()->current(),
    'og_title' => 'Contact CampusBite | Affordable Food for Strathmore Students',
    'og_description' => 'Contact CampusBite for campus food delivery, student deals, and healthy eating tips. Reach out for support, feedback, or partnership inquiries.',
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
            <h1 class="mb-0 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">Contact CampusBite</h1>
        </div>
        <p class="mb-4" style="color:#124B45; background:rgba(255,255,255,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001; font-family:'Montserrat',sans-serif;">
            Have a question, feedback, or partnership inquiry? Reach out to CampusBite below.<br>
            <span class="d-block mt-2" style="color:#124B45;">📧 <strong>Email: info@campusbite.com</strong></span>
            <span class="d-block" style="color:#fbbf24;">📞 <strong>Phone: 0712 345678</strong></span>
            <span class="d-block" style="color:#22c55e;">💬 <strong>Or use the contact form below</strong></span>
        </p>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="/contact" method="POST" class="card border-0 shadow-sm p-4" style="background:#fffbe3;border-radius:1.25rem;">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background:#124B45;border:none;">Send Message</button>
                </form>
            </div>
        </div>
        <style>
            .gradient-text {
                background: linear-gradient(90deg, #fbbf24, #124B45);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
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
    <!-- SEO: Schema.org Organization & WebSite markup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
