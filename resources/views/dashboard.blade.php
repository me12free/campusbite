<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'CampusBite Dashboard | Campaign Metrics',
    'meta_description' => 'CampusBite dashboard: track registrations, orders, email subscribers, engagement, and repeat purchases. Modern, branded, and actionable for campaign success.',
    'canonical' => url()->current(),
    'og_title' => 'CampusBite Dashboard | Campaign Metrics',
    'og_description' => 'CampusBite dashboard: track registrations, orders, email subscribers, engagement, and repeat purchases. Modern, branded, and actionable for campaign success.',
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
            <li class="nav-item"><a class="nav-link" href="/dashboard" style="color:#fbbf24;font-weight:700;">Dashboard</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;">
        <!-- Metrics Overview Chart -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3" style="color:#124B45;font-weight:700;">Metrics Overview</h4>
                        <canvas id="metricsBarChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="mb-4 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">CampusBite Campaign Dashboard</h1>
        <div class="row g-4 mb-5">
            <!-- Registration Metric -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#fffbe3;border-radius:1.25rem;transition:box-shadow .2s;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#124B45;font-weight:700;">Student Registrations</h5>
                        <p class="display-5 fw-bold" style="color:#fbbf24;">{{ $registrations ?? '100+' }}</p>
                        <small class="text-secondary">Goal: 100+ in 1 month</small>
                    </div>
                </div>
            </div>
            <!-- Orders Metric -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#fffbe3;border-radius:1.25rem;transition:box-shadow .2s;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#124B45;font-weight:700;">Online Orders</h5>
                        <p class="display-5 fw-bold" style="color:#22c55e;">{{ $orders ?? '80' }}</p>
                        <small class="text-secondary">Goal: 80 by week 8</small>
                    </div>
                </div>
            </div>
            <!-- Email Subscribers Metric -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 feature-card" style="background:#fffbe3;border-radius:1.25rem;transition:box-shadow .2s;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#124B45;font-weight:700;">Email Subscribers</h5>
                        <p class="display-5 fw-bold" style="color:#e52e71;">{{ $subscribers ?? '200' }}</p>
                        <small class="text-secondary">Goal: 200 in 2 months</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mb-5">
            <!-- Email Engagement -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#fbbf24;font-weight:700;">Email Engagement</h5>
                        <canvas id="emailPieChart" height="120"></canvas>
                        <div class="mt-3">
                            <span class="fw-bold" style="color:#124B45;">Open Rate:</span> <span style="color:#22c55e;">{{ $open_rate ?? '30%' }}</span>
                            <br>
                            <span class="fw-bold" style="color:#124B45;">Click Rate:</span> <span style="color:#e52e71;">{{ $click_rate ?? '10%' }}</span>
                        </div>
                        <small class="text-secondary">Goal: 30% open, 10% click</small>
                    </div>
                </div>
            </div>
            <!-- Repeat Purchase Rate -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#22c55e;font-weight:700;">Repeat Purchases</h5>
                        <p class="display-5 fw-bold" style="color:#124B45;">{{ $repeat_orders ?? '50' }}</p>
                        <small class="text-secondary">Goal: 50 by week 8</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Campaign Summary -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3" style="color:#124B45;font-weight:700;">Campaign Summary</h4>
                        <ul class="list-unstyled mb-0">
                            <li><strong>Prime location:</strong> Steps from Strathmore University</li>
                            <li><strong>Menu:</strong> Chapati wraps, rice bowls, fries, smoothies</li>
                            <li><strong>Promo:</strong> 10% off first order, Meal Deal Mondays, milestone rewards</li>
                            <li><strong>Customer Persona:</strong> John the Late-Nighter, 21, Computer Science, values quick ordering & free delivery</li>
                            <li><strong>Opportunities:</strong> Online ordering, email offers, study-snack bundles</li>
                            <li><strong>Threats:</strong> Competing canteens, inflation, limited marketing budget</li>
                        </ul>
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
            .card-title {font-family:'Montserrat',sans-serif;}
            .feature-card:hover {box-shadow:0 0 0.75rem #fbbf24a0;}
            @media (max-width: 767px) {
                .feature-card, .card {border-radius:1rem;}
            }
            /* Chart.js custom legend */
            .chartjs-legend {display:flex;gap:1.5rem;justify-content:center;margin-top:1rem;}
            .chartjs-legend span {display:flex;align-items:center;gap:0.5rem;font-size:1rem;}
            .chartjs-legend i {width:1rem;height:1rem;display:inline-block;border-radius:50%;}
            .progress {background:#f6fff8;}
            .progress-bar {transition:width 1s;}
        </style>
        <!-- Alerts & Recommendations Panel -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="alert alert-warning d-flex align-items-center" role="alert" style="background:#fffbe3;color:#124B45;border-radius:1rem;">
                    <i class="bi bi-exclamation-triangle-fill me-2" style="font-size:1.5rem;color:#e52e71;"></i>
                    <div>
                        <strong>Recommendation:</strong> Open rate dropped 10% this week. Try a new subject line or resend to non-openers.<br>
                        <strong>Opportunity:</strong> Promo code usage spiked on Meal Deal Mondays. Consider extending the offer.
                    </div>
                </div>
            </div>
        </div>
        <!-- Goal Progress Bars -->
        <div class="row mb-4">
            <div class="col-md-3 mb-2">
                <label class="fw-bold" style="color:#124B45;">Registrations</label>
                <div class="progress" style="height:1.5rem;border-radius:1rem;">
                    <div class="progress-bar" role="progressbar" style="width:80%;background:#fbbf24;color:#124B45;font-weight:700;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label class="fw-bold" style="color:#124B45;">Orders</label>
                <div class="progress" style="height:1.5rem;border-radius:1rem;">
                    <div class="progress-bar" role="progressbar" style="width:60%;background:#22c55e;color:#fff;font-weight:700;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label class="fw-bold" style="color:#124B45;">Subscribers</label>
                <div class="progress" style="height:1.5rem;border-radius:1rem;">
                    <div class="progress-bar" role="progressbar" style="width:90%;background:#e52e71;color:#fff;font-weight:700;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <label class="fw-bold" style="color:#124B45;">Repeat Purchases</label>
                <div class="progress" style="height:1.5rem;border-radius:1rem;">
                    <div class="progress-bar" role="progressbar" style="width:50%;background:#124B45;color:#fbbf24;font-weight:700;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
            </div>
        </div>
        <!-- Conversion Funnel Chart -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3" style="color:#124B45;font-weight:700;">Conversion Funnel</h4>
                        <canvas id="funnelChart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Real-Time Traffic & Engagement (Simulated) -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h5 class="card-title" style="color:#124B45;font-weight:700;">Active Users</h5>
                        <p class="display-6 fw-bold" style="color:#22c55e;">{{ rand(10,30) }}</p>
                        <small class="text-secondary">Currently browsing</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h5 class="card-title" style="color:#124B45;font-weight:700;">Traffic Trend</h5>
                        <canvas id="trafficLineChart" height="80"></canvas>
                        <small class="text-secondary">Last 7 days</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Campaign Performance Table -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3" style="color:#124B45;font-weight:700;">Promo Performance</h4>
                        <table class="table table-bordered table-hover">
                            <thead style="background:#fffbe3;color:#124B45;">
                                <tr><th>Promo Code</th><th>Usage</th><th>Orders</th><th>ROI</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>FIRST10</td><td>45</td><td>40</td><td>120%</td></tr>
                                <tr><td>MEALMON</td><td>30</td><td>28</td><td>110%</td></tr>
                                <tr><td>MILESTONE</td><td>15</td><td>12</td><td>95%</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Social Media Metrics (Simulated) -->
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#e52e71;font-weight:700;">Instagram Followers</h5>
                        <p class="display-6 fw-bold" style="color:#e52e71;">{{ rand(800,1200) }}</p>
                        <small class="text-secondary">+50 this week</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#22c55e;font-weight:700;">Facebook Likes</h5>
                        <p class="display-6 fw-bold" style="color:#22c55e;">{{ rand(500,900) }}</p>
                        <small class="text-secondary">+30 this week</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body text-center p-4">
                        <h5 class="card-title" style="color:#124B45;font-weight:700;">Twitter Followers</h5>
                        <p class="display-6 fw-bold" style="color:#124B45;">{{ rand(300,600) }}</p>
                        <small class="text-secondary">+20 this week</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Email Campaign Analytics Timeline -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3" style="color:#124B45;font-weight:700;">Email Campaign Timeline</h4>
                        <canvas id="emailTimelineChart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer Segmentation Pie Chart -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100" style="background:#f6fff8;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h5 class="card-title" style="color:#fbbf24;font-weight:700;">Customer Segments</h5>
                        <canvas id="segmentPieChart" height="120"></canvas>
                        <small class="text-secondary">By persona</small>
                    </div>
                </div>
            </div>
            <!-- Feedback & Reviews Carousel -->
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h5 class="card-title" style="color:#22c55e;font-weight:700;">Customer Reviews</h5>
                        <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <blockquote class="blockquote mb-0">
                                        <p>“CampusBite’s wraps are a lifesaver during late study nights!”</p>
                                        <footer class="blockquote-footer">John, CS Student</footer>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <blockquote class="blockquote mb-0">
                                        <p>“Fast delivery and healthy options. Highly recommend!”</p>
                                        <footer class="blockquote-footer">Mary, Business Student</footer>
                                    </blockquote>
                                </div>
                                <div class="carousel-item">
                                    <blockquote class="blockquote mb-0">
                                        <p>“The email offers keep me coming back for more deals.”</p>
                                        <footer class="blockquote-footer">Ali, Law Student</footer>
                                    </blockquote>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Export & Share Options -->
        <div class="row mb-5">
            <div class="col-12 text-end">
                <button class="btn btn-outline-success me-2" onclick="window.print()"><i class="bi bi-printer"></i> Export PDF</button>
                <button class="btn btn-outline-warning" onclick="alert('Share link copied!')"><i class="bi bi-share"></i> Share Dashboard</button>
            </div>
        </div>
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
                        <li><a href="/dashboard" style="color:#fbbf24;font-weight:700;">Dashboard</a></li>
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
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <!-- jsPDF & html2canvas CDN for PDF export -->
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf@2.5.1/dist/jspdf.umd.min.js"></script>
    <script>
        // Metrics Bar Chart
        const metricsBarChart = document.getElementById('metricsBarChart').getContext('2d');
        new Chart(metricsBarChart, {
            type: 'bar',
            data: {
                labels: ['Registrations', 'Orders', 'Subscribers', 'Repeat Purchases'],
                datasets: [{
                    label: 'Count',
                    data: [
                        {!! json_encode($registrations ?? 100) !!},
                        {!! json_encode($orders ?? 80) !!},
                        {!! json_encode($subscribers ?? 200) !!},
                        {!! json_encode($repeat_orders ?? 50) !!}
                    ],
                    backgroundColor: [
                        '#fbbf24', '#22c55e', '#e52e71', '#124B45'
                    ],
                    borderRadius: 8
                }]
            },
            options: {
                plugins: {
                    legend: {display: false},
                    tooltip: {enabled: true}
                },
                scales: {
                    y: {beginAtZero: true, ticks: {stepSize: 20}}
                }
            }
        });
        // Email Engagement Pie Chart
        const openRate = parseFloat(("{{ $open_rate ?? '30%' }}").replace('%','')) || 30;
        const clickRate = parseFloat(("{{ $click_rate ?? '10%' }}").replace('%','')) || 10;
        const otherRate = 100 - openRate - clickRate;
        const emailPieChart = document.getElementById('emailPieChart').getContext('2d');
        new Chart(emailPieChart, {
            type: 'pie',
            data: {
                labels: ['Open', 'Click', 'Other'],
                datasets: [{
                    data: [openRate, clickRate, otherRate],
                    backgroundColor: ['#22c55e', '#e52e71', '#fbbf24'],
                    borderWidth: 2,
                    borderColor: '#fff'
                }]
            },
            options: {
                plugins: {
                    legend: {display: true, position: 'bottom'},
                    tooltip: {enabled: true}
                }
            }
        });
        // PDF Export with branding/colors and solid background for clarity
        document.querySelector('.btn-outline-success').onclick = function() {
            const dashboard = document.querySelector('main');
            // Save original styles
            const originalBg = dashboard.style.background;
            const originalClass = dashboard.className;
            // Set solid white background and remove overlay for export
            dashboard.style.background = '#fff';
            dashboard.className = dashboard.className.replace('animate__animated animate__fadeIn', '');
            html2canvas(dashboard, {backgroundColor: '#fff', scale:2}).then(function(canvas) {
                // Restore original styles
                dashboard.style.background = originalBg;
                dashboard.className = originalClass;
                const imgData = canvas.toDataURL('image/png');
                const pdf = new window.jspdf.jsPDF({orientation:'portrait', unit:'pt', format:'a4'});
                // Add branding header
                pdf.setFillColor(18,75,69); // #124B45
                pdf.rect(0,0,pdf.internal.pageSize.getWidth(),60,'F');
                pdf.setFont('helvetica','bold');
                pdf.setTextColor(251,191,36); // #fbbf24
                pdf.setFontSize(24);
                pdf.text('CampusBite Dashboard', 40, 40);
                // Add dashboard image
                pdf.addImage(imgData, 'PNG', 0, 70, pdf.internal.pageSize.getWidth(), pdf.internal.pageSize.getHeight()-70);
                pdf.save('campusbite-dashboard.pdf');
            });
        };
    </script>
</body>
</html>
