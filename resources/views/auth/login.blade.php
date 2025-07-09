@include('components.head', [
    'title' => 'Login | CampusBite',
    'meta_description' => 'Login to CampusBite to order food, get offers, and manage your student account. Affordable campus meals and exclusive deals!',
    'canonical' => '/login',
    'og_title' => 'Login | CampusBite',
    'og_description' => 'Login to CampusBite to order food, get offers, and manage your student account. Affordable campus meals and exclusive deals!',
    'og_url' => '/login',
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                <div class="card border-0 shadow-sm feature-card" style="background:#fffbe3;border-radius:1.25rem;">
                    <div class="card-body p-4">
                        <h2 class="mb-4 text-center gradient-text" style="font-family:'Montserrat',sans-serif;">Login</h2>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" style="color:#e52e71;" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Password')" style="color:#fbbf24;" />
                                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-3 form-check">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <label for="remember_me" class="form-check-label" style="color:#22c55e;">{{ __('Remember me') }}</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none" href="{{ route('password.request') }}" style="color:#e52e71;">{{ __('Forgot your password?') }}</a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary w-100 shadow" style="background:#e52e71;border:none;">Log in</button>
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
