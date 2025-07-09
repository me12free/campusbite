<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--
        CampusBite SEO: Title, Description, OG, Schema, Analytics
        - All meta tags are dynamic and keyword-rich
        - Add your Google Analytics and Search Console IDs below
    --}}
    <title>@yield('title', $meta_title ?? 'Campus food delivery, Budget meals for students | CampusBite')</title>
    <meta name="description" content="@yield('meta_description', $meta_description ?? 'CampusBite offers affordable campus food delivery, late-night meals, and student meal deals. Order food online and enjoy budget-friendly bites and chapati wraps near you.')">
    <link rel="canonical" href="{{ url()->current() }}">
    @if(isset($meta_og_image))
        <meta property="og:image" content="{{ $meta_og_image }}">
    @endif
    <meta property="og:title" content="@yield('title', $meta_title ?? 'Campus food delivery, Budget meals for students | CampusBite')">
    <meta property="og:description" content="@yield('meta_description', $meta_description ?? 'CampusBite offers affordable campus food delivery, late-night meals, and student meal deals. Order food online and enjoy budget-friendly bites and chapati wraps near you.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    {{-- Schema.org LocalBusiness markup --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "CampusBite",
      "url": "{{ url('/') }}",
      "description": "Campus food delivery, budget meals for students, meal deals, chapati wraps near me.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Nairobi",
        "addressCountry": "KE"
      },
      "image": "{{ asset('logo.png') }}"
    }
    </script>
    <!-- Google Analytics/Search Console placeholders -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"></script> -->
    <!-- <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" /> -->
    {{-- Google Analytics 4 (replace G-XXXXXXX) --}}
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXX');
    </script> -->
    {{-- Google Search Console (replace with your verification) --}}
    <!-- <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        /* Simple fade-in animation for main content */
        main { animation: fadeIn 0.7s ease; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .navbar-brand { font-weight: bold; letter-spacing: 1px; }
        .nav-link:hover { color: #ff5722 !important; transition: color 0.2s; }
    </style>
</head>
<body>
    {{-- Responsive, animated navigation --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 shadow-sm" aria-label="Main navigation">
        <div class="container">
            <a class="navbar-brand" href="/">CampusBite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('menu.index') }}">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cart.index') }}">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                    {{-- Guest links --}}
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endguest
                    {{-- Authenticated user links --}}
                    @auth
                        <li class="nav-item"><a class="nav-link" href="#">Hi, {{ Auth::user()->name }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
