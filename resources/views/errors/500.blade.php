<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'Server Error | CampusBite',
    'meta_description' => 'A server error occurred. Please try again later.',
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;min-height:60vh;">
        <div class="row justify-content-center align-items-center" style="min-height:40vh;">
            <div class="col-md-8 text-center">
                <img src="/img/logo.png" alt="CampusBite Logo" width="80" class="mb-4" style="border-radius:16px;box-shadow:0 2px 8px #e52e71;background:#fff;">
                <h1 class="display-4 fw-bold mb-3 gradient-text" style="color:#e52e71;">Server Error</h1>
                <p class="lead mb-4" style="color:#222; background:rgba(255,251,227,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001;">
                    Oops! Something went wrong on our end.<br>
                    Please try again later.<br>
                    <span class="text-danger">(Error 500)</span>
                </p>
                <a href="/" class="btn btn-primary shadow" style="background:#e52e71;border:none;">Go Home</a>
            </div>
        </div>
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
