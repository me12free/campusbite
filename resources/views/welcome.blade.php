<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'CampusBite | Affordable Food for Strathmore Students',
    'meta_description' => 'Order affordable, fast food online at Strathmore University with CampusBite. Enjoy student deals, menu variety, and campus delivery.',
    'canonical' => url()->current(),
    'og_title' => 'CampusBite | Affordable Food for Strathmore Students',
    'og_description' => 'Order affordable, fast food online at Strathmore University with CampusBite. Enjoy student deals, menu variety, and campus delivery.',
    'og_url' => url()->current(),
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
    <main class="container py-5 text-white" style="font-family:'Montserrat',sans-serif;">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0 animate__animated animate__fadeInLeft">
                <h1 class="display-3 fw-bold mb-3 gradient-text" style="color:#e52e71; text-shadow:0 2px 16px #fff;letter-spacing:1px;font-family:'Montserrat',sans-serif;">Order. Eat. Enjoy.</h1>
                <p class="lead mb-4" style="color:#222; background:rgba(255,251,227,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001; font-family:'Montserrat',sans-serif;">
                    CampusBite is your modern, mobile-first food ordering platform for students. Fast, affordable, and always fresh.<br>
                    <span class="d-block mt-2" style="color:#e52e71;">🍔 <strong>Exclusive student deals</strong></span>
                    <span class="d-block" style="color:#fbbf24;">🚀 <strong>Lightning-fast campus delivery</strong></span>
                    <span class="d-block" style="color:#22c55e;">🌱 <strong>Healthy & tasty options</strong></span>
                </p>
                <div class="mb-3">
                    <a href="/menu" class="btn btn-primary btn-lg me-2 shadow" style="background:#e52e71;border:none;">Order Now</a>
                    <a href="/register" class="btn btn-outline-secondary btn-lg" style="color:#fbbf24;border-color:#fbbf24;">Sign Up</a>
                </div>
                <a href="/blog" class="link-secondary" style="color:#22c55e;">Read our blog for food tips &rarr;</a>
            </div>
            <div class="col-md-6 text-center animate__animated animate__fadeInRight">
                <img src="/img/menu/lobster-roll.jpg"
                     alt="CampusBite Lobster Roll - student favorite menu item"
                     class="img-fluid rounded shadow-lg hero-img"
                     loading="lazy"
                     style="max-height: 350px; object-fit: cover;">
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <img src="/img/menu/greek-salad.jpg" alt="Greek Salad - CampusBite menu" class="rounded-circle shadow" width="60" height="60">
                    <img src="/img/menu/cake.jpg" alt="Cake - CampusBite dessert" class="rounded-circle shadow" width="60" height="60">
                    <img src="/img/menu/spinach-salad.jpg" alt="Spinach Salad - CampusBite menu" class="rounded-circle shadow" width="60" height="60">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-3" style="background:#e52e71;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;box-shadow:0 2px 8px #e52e7140;">
                            <i class="bi bi-bag-check display-6 text-white"></i>
                        </div>
                        <h5 class="card-title mt-2" style="font-weight:700;color:#e52e71;">Easy Ordering</h5>
                        <p class="card-text text-secondary">Browse our menu, add to cart, and checkout in seconds. No hassle, just food.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-3" style="background:#fbbf24;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;box-shadow:0 2px 8px #fbbf2440;">
                            <i class="bi bi-lightning-charge display-6 text-white"></i>
                        </div>
                        <h5 class="card-title mt-2" style="font-weight:700;color:#fbbf24;">Fast Delivery</h5>
                        <p class="card-text text-secondary">Get your food delivered to your campus spot in minutes. Track your order live.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-3s">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-3" style="background:#22c55e;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;box-shadow:0 2px 8px #22c55e40;">
                            <i class="bi bi-emoji-smile display-6 text-white"></i>
                        </div>
                        <h5 class="card-title mt-2" style="font-weight:700;color:#22c55e;">Student Perks</h5>
                        <p class="card-text text-secondary">Unlock exclusive deals, loyalty rewards, and healthy eating tips every week.</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .gradient-text {
                background: linear-gradient(90deg, #ff8a00, #e52e71);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            .hero-img { transition: box-shadow 0.3s; }
            .hero-img:hover { box-shadow: 0 0 40px 0 #e52e7155; }
            .feature-card .icon-circle i {font-size:1.7rem;}
            @media (max-width: 767px) {
                .feature-card {border-radius:1rem;}
                .feature-card .icon-circle {width:40px;height:40px;}
                .feature-card .icon-circle i {font-size:1.1rem;}
            }
        </style>
    </main>
    @include('components.footer')
    <!-- SEO: Schema.org Organization & WebSite markup -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
