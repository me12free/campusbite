<nav class="navbar navbar-expand-lg shadow-sm sticky-top" x-data="{ dark: localStorage.getItem('theme') === 'dark', open: false }" :class="dark ? 'navbar-dark' : 'navbar-light'" style="background:#fffbe3; border-bottom: 2px solid #e52e71;">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
            <img src="/img/logo.png" alt="CampusBite Logo" width="38" height="38" class="me-2" style="border-radius:8px; box-shadow:0 2px 8px #e52e71; background:#fff;">
            <span style="font-family:'Montserrat',sans-serif;letter-spacing:1px;font-weight:700;font-size:1.5rem;color:#e52e71;">CampusBite</span>
        </a>
        <button class="navbar-toggler" type="button" @click="open = !open" :aria-expanded="open ? 'true' : 'false'" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" :class="open ? 'show' : ''">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link fw-bold" href="/menu" style="color:#e52e71;">Menu</a></li>
                <li class="nav-item"><a class="nav-link fw-bold" href="/cart" style="color:#fbbf24;">Cart</a></li>
                <li class="nav-item"><a class="nav-link fw-bold" href="/blog" style="color:#22c55e;">Blog</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="/login" style="color:#22c55e;">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register" style="color:#e52e71;">Register</a></li>
                @else
                    @if(auth()->user() && auth()->user()->is_admin)
                        <li class="nav-item"><a class="nav-link" href="/admin" style="color:#1877f3;">Admin Dashboard</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="/dashboard" style="color:#ff8a00;">Dashboard</a></li>
                    @endif
                    <li class="nav-item">
                        <form method="POST" action="/logout" style="display:inline;">
                            @csrf
                            <button class="nav-link btn btn-link" type="submit" style="padding:0;color:#888;">Logout</button>
                        </form>
                    </li>
                @endguest
                <li class="nav-item ms-2">
                    <button class="btn btn-sm btn-outline-secondary d-flex align-items-center" @click="dark = !dark; localStorage.setItem('theme', dark ? 'dark' : 'light')" :aria-label="dark ? 'Switch to light mode' : 'Switch to dark mode'">
                        <span x-show="!dark"><i class="bi bi-moon"></i></span>
                        <span x-show="dark"><i class="bi bi-sun"></i></span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
