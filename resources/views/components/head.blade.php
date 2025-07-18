<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'CampusBite | Affordable Food for Strathmore Students' }}</title>
    <meta name="description" content="{{ $meta_description ?? 'Order affordable, fast food online at Strathmore University with CampusBite. Enjoy student deals, menu variety, and campus delivery.' }}">
    <link rel="canonical" href="{{ $canonical ?? request()->url() }}">
    <meta property="og:title" content="{{ $og_title ?? ($title ?? 'CampusBite | Affordable Food for Strathmore Students') }}">
    <meta property="og:description" content="{{ $og_description ?? ($meta_description ?? 'Order affordable, fast food online at Strathmore University with CampusBite. Enjoy student deals, menu variety, and campus delivery.') }}">
    <meta property="og:url" content="{{ $og_url ?? ($canonical ?? request()->url()) }}">
    <meta property="og:type" content="website">
    <!-- CampusBite Favicons & Manifest -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#124B45">
    <meta name="msapplication-TileColor" content="#fbbf24">
    <meta name="color-scheme" content="light dark">
    <meta name="keywords" content="CampusBite, Strathmore food, student deals, campus delivery, chapati wraps, rice bowls, smoothies, healthy eating, affordable meals">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Montserrat', sans-serif; background-color: #fffbe3; }
        .navbar, footer { font-family: 'Montserrat', sans-serif; }
    </style>
    @stack('head')
</head>
