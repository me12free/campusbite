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
    <main class="container py-5 text-white" style="font-family:'Montserrat',sans-serif;">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0 animate__animated animate__fadeInLeft">
                <h1 class="display-3 fw-bold mb-3 gradient-text" style="color:#124B45; text-shadow:0 2px 16px #fff;letter-spacing:1px;font-family:'Montserrat',sans-serif;">CampusBite: Fast, Affordable, Student-Focused</h1>
                <p class="lead mb-4" style="color:#124B45; background:rgba(255,255,255,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001; font-family:'Montserrat',sans-serif;">
                    Grab-and-go café steps from Strathmore University.<br>
                    <span class="d-block mt-2" style="color:#124B45;">🍔 <strong>Chapati wraps, rice bowls, fries, smoothies</strong></span>
                    <span class="d-block" style="color:#fbbf24;">🎉 <strong>First order? Use <span style='background:#fbbf24;color:#124B45;padding:2px 6px;border-radius:6px;'>FIRST10</span> for 10% off!</strong></span>
                    <span class="d-block" style="color:#22c55e;">📧 <strong>Sign up for exclusive deals & free soda</strong></span>
                </p>
                <div class="mb-3">
                    <a href="/register" class="btn btn-warning btn-lg me-2 shadow" style="background:#fbbf24;color:#124B45;border:none;font-weight:600;">Sign Up & Get 10% Off</a>
                    <a href="/menu" class="btn btn-primary btn-lg" style="background:#124B45;border:none;">Browse Menu</a>
                </div>
                <form action="/subscribe" method="POST" class="mb-3" style="max-width:350px;">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email for deals" required>
                        <button class="btn btn-success" type="submit" style="background:#22c55e;">Subscribe</button>
                    </div>
                    <small class="form-text text-muted">Get weekly Meal Deal Monday offers & flash discounts.</small>
                </form>
                <a href="/blog" class="link-secondary" style="color:#124B45;font-weight:600;">Read our blog: Top Brain Foods &rarr;</a>
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
        <!-- Categories Carousel -->
        <div class="bg-light py-4">
            <div class="container">
                <h3 class="mb-4 text-center" style="color:#fbbf24;font-weight:700;">Explore Student Favorites</h3>
                <div class="d-none d-md-block position-relative">
                    <div class="categories-carousel-container overflow-hidden mx-5">
                        <div class="categories-carousel d-flex justify-content-center gap-4">
                            <div class="text-center category-item-desktop flex-shrink-0">
                                <img src="/img/menu/bread-barrel.jpg" alt="Chapati Wraps" class="rounded-circle shadow" style="width:100px;height:100px;object-fit:cover;">
                                <small class="text-dark fw-medium">Chapati Wraps</small>
                            </div>
                            <div class="text-center category-item-desktop flex-shrink-0">
                                <img src="/img/menu/tuscan-grilled.jpg" alt="Rice Bowls" class="rounded-circle shadow" style="width:100px;height:100px;object-fit:cover;">
                                <small class="text-dark fw-medium">Rice Bowls</small>
                            </div>
                            <div class="text-center category-item-desktop flex-shrink-0">
                                <img src="/img/menu/greek-salad.jpg" alt="Smoothies" class="rounded-circle shadow" style="width:100px;height:100px;object-fit:cover;">
                                <small class="text-dark fw-medium">Smoothies</small>
                            </div>
                            <div class="text-center category-item-desktop flex-shrink-0">
                                <img src="/img/specials-1.png" alt="Drinks" class="rounded-circle shadow" style="width:100px;height:100px;object-fit:cover;">
                                <small class="text-dark fw-medium">Drinks</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none position-relative">
                    <div class="categories-carousel-container-mobile overflow-hidden mx-4">
                        <div class="categories-carousel-mobile d-flex justify-content-center gap-3">
                            <div class="text-center category-item-mobile flex-shrink-0">
                                <img src="/img/menu/bread-barrel.jpg" alt="Chapati Wraps" class="rounded-circle shadow" style="width:80px;height:80px;object-fit:cover;">
                                <small class="text-dark fw-medium">Chapati Wraps</small>
                            </div>
                            <div class="text-center category-item-mobile flex-shrink-0">
                                <img src="/img/menu/tuscan-grilled.jpg" alt="Rice Bowls" class="rounded-circle shadow" style="width:80px;height:80px;object-fit:cover;">
                                <small class="text-dark fw-medium">Rice Bowls</small>
                            </div>
                            <div class="text-center category-item-mobile flex-shrink-0">
                                <img src="/img/menu/greek-salad.jpg" alt="Smoothies" class="rounded-circle shadow" style="width:80px;height:80px;object-fit:cover;">
                                <small class="text-dark fw-medium">Smoothies</small>
                            </div>
                            <div class="text-center category-item-mobile flex-shrink-0">
                                <img src="/img/specials-1.png" alt="Drinks" class="rounded-circle shadow" style="width:80px;height:80px;object-fit:cover;">
                                <small class="text-dark fw-medium">Drinks</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Shops Section -->
        <div class="py-4">
            <div class="container">
                <h3 class="mb-4" style="color:#fbbf24;font-weight:700;">This Week's Hot Meal Deals</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="/img/menu/bread-barrel.jpg" alt="Chapati Wrap" class="mb-3 rounded" style="width:100%;height:130px;object-fit:cover;">
                                <h6 class="card-title">Chapati Wrap + Juice</h6>
                                <p class="card-text small text-muted">KES 120 &mdash; Quick, filling, and budget-friendly.</p>
                                <a href="/menu" class="btn btn-warning btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="/img/menu/tuscan-grilled.jpg" alt="Rice Bowl" class="mb-3 rounded" style="width:100%;height:130px;object-fit:cover;">
                                <h6 class="card-title">Rice Bowl + Free Water</h6>
                                <p class="card-text small text-muted">KES 150 &mdash; Power up for study sessions.</p>
                                <a href="/menu" class="btn btn-warning btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="/img/menu/greek-salad.jpg" alt="Smoothie Combo" class="mb-3 rounded" style="width:100%;height:130px;object-fit:cover;">
                                <h6 class="card-title">Smoothie Combo</h6>
                                <p class="card-text small text-muted">KES 200 &mdash; Fresh fruit, blended to order.</p>
                                <a href="/menu" class="btn btn-warning btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="/img/specials-1.png" alt="Drinks" class="mb-3 rounded" style="width:100%;height:130px;object-fit:cover;">
                                <h6 class="card-title">Drinks</h6>
                                <p class="card-text small text-muted">Juices & sodas &mdash; Stay refreshed on campus.</p>
                                <a href="/menu" class="btn btn-warning btn">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-3" style="background:#124B45;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;box-shadow:0 2px 8px #124B4540;">
                            <i class="bi bi-bag-check display-6 text-white"></i>
                        </div>
                        <h5 class="card-title mt-2" style="font-weight:700;color:#124B45;">Easy Online Ordering</h5>
                        <p class="card-text text-secondary">Sign up, browse menu, add to cart, and checkout in seconds. Use promo code <span style='background:#fbbf24;color:#124B45;padding:2px 6px;border-radius:6px;'>FIRST10</span> for 10% off your first order.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-3" style="background:#fbbf24;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;box-shadow:0 2px 8px #fbbf2440;">
                            <i class="bi bi-lightning-charge display-6 text-white"></i>
                        </div>
                        <h5 class="card-title mt-2" style="font-weight:700;color:#fbbf24;">Fast Campus Delivery</h5>
                        <p class="card-text text-secondary">Order from anywhere on campus. Free delivery for students. Track your order live.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate__animated animate__fadeInUp animate__delay-3s">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <div class="icon-circle mb-3" style="background:#22c55e;display:inline-flex;align-items:center;justify-content:center;width:56px;height:56px;border-radius:50%;box-shadow:0 2px 8px #22c55e40;">
                            <i class="bi bi-emoji-smile display-6 text-white"></i>
                        </div>
                        <h5 class="card-title mt-2" style="font-weight:700;color:#22c55e;">Student Perks & Rewards</h5>
                        <p class="card-text text-secondary">Get weekly Meal Deal Monday offers, milestone rewards, and healthy eating tips. Earn a free snack after 3 orders!</p>
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
            .hero-img { transition: box-shadow 0.3s; }
            .hero-img:hover { box-shadow: 0 0 40px 0 #124B4555; }
            .feature-card .icon-circle i {font-size:1.7rem;}
            @media (max-width: 767px) {
                .feature-card {border-radius:1rem;}
                .feature-card .icon-circle {width:40px;height:40px;}
                .feature-card .icon-circle i {font-size:1.1rem;}
            }
            /* Categories Carousel Styles */
            .category-item-desktop {
                width: 140px;
                margin: 0 15px;
                min-width: 140px;
                transition: transform 0.3s ease;
            }
            .category-item-desktop:hover {
                transform: translateY(-5px);
            }
            .categories-carousel {
                transition: transform 0.5s ease;
            }
            .categories-carousel-container {
                margin: 0 50px;
            }
            .category-item-mobile {
                width: 100px;
                margin: 0 8px;
                min-width: 100px;
                transition: transform 0.3s ease;
            }
            .category-item-mobile:hover {
                transform: translateY(-3px);
            }
            .categories-carousel-mobile {
                transition: transform 0.5s ease;
            }
            .categories-carousel-container-mobile {
                margin: 0 35px;
            }
            @media (max-width: 768px) {
                .category-item-mobile {
                    width: 80px;
                    margin: 0 5px;
                    min-width: 80px;
                }
            }
            /* Popular Shops Cards */
            .card-title {
                color: #124B45;
                font-weight: 700;
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
            .text-primary {
                color: #124B45 !important;
            }
            .bg-primary {
                background-color: #124B45 !important;
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
