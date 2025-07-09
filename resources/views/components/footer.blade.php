<footer class="text-center py-4 mt-5 border-top position-relative" x-data="{ dark: localStorage.getItem('theme') === 'dark' }" :class="dark ? 'text-light' : 'text-dark'" style="background:#fffbe3;">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="mb-2 mb-md-0 d-flex align-items-center flex-wrap">
            <img src="/img/logo.png" alt="CampusBite Logo" width="38" height="38" class="me-2" style="border-radius:8px; box-shadow:0 2px 8px #e52e71; background:#fff;">
            <span class="fw-bold me-3" style="font-family:'Montserrat',sans-serif;letter-spacing:1px;font-weight:700;font-size:1.5rem;color:#e52e71;">CampusBite</span>
            <span class="mx-2" style="color:#fbbf24;">|</span>
            <a href="/menu" class="text-decoration-none me-2 fw-bold" style="color:#e52e71;">Menu</a>
            <a href="/blog" class="text-decoration-none me-2 fw-bold" style="color:#fbbf24;">Blog</a>
            <a href="/register" class="text-decoration-none fw-bold" style="color:#22c55e;">Register</a>
        </div>
        <div class="mb-2 mb-md-0">
            <a href="#" target="_blank" class="me-2" aria-label="Twitter" style="color:#1da1f2;"><i class="bi bi-twitter"></i></a>
            <a href="#" target="_blank" class="me-2" aria-label="Facebook" style="color:#1877f3;"><i class="bi bi-facebook"></i></a>
            <a href="#" target="_blank" aria-label="Instagram" style="color:#e52e71;"><i class="bi bi-instagram"></i></a>
        </div>
        <div>
            <button class="btn btn-sm btn-outline-secondary d-flex align-items-center" @click="dark = !dark; localStorage.setItem('theme', dark ? 'dark' : 'light')" :aria-label="dark ? 'Switch to light mode' : 'Switch to dark mode'">
                <span x-show="!dark"><i class="bi bi-moon"></i></span>
                <span x-show="dark"><i class="bi bi-sun"></i></span>
            </button>
        </div>
    </div>
    <div class="mt-3 small opacity-75" style="color:#888">&copy; {{ date('Y') }} CampusBite. All rights reserved.</div>
</footer>
<!-- Alpine.js for theme toggle -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
