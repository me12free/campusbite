
<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Register | CampusBite',
    'meta_description' => 'Sign up for CampusBite to order food, get offers, and join the student community. Enjoy affordable campus meals and exclusive deals!',
    'canonical' => '/register',
    'og_title' => 'Register | CampusBite',
    'og_description' => 'Sign up for CampusBite to order food, get offers, and join the student community. Enjoy affordable campus meals and exclusive deals!',
    'og_url' => '/register',
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
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
                            <button type="submit" class="btn btn-primary w-100 shadow" style="background:#e52e71;border:none;">Register</button>
                            <a href="/menu" class="btn btn-link" style="color:#e52e71;">Browse Menu</a>
                        </form>
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