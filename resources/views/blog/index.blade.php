<!DOCTYPE html>
<html lang="en">
@include('components.head', [
    'title' => 'CampusBite Blog | Campus Food Tips & Deals',
    'meta_description' => 'Get the latest campus food tips, student deals, and healthy eating ideas from CampusBite. Order from our menu and enjoy affordable student meals.',
    'canonical' => '/blog',
    'og_title' => 'CampusBite Blog | Campus Food Tips & Deals',
    'og_description' => 'Get the latest campus food tips, student deals, and healthy eating ideas from CampusBite. Order from our menu and enjoy affordable student meals.',
    'og_url' => '/blog',
])
<body class="bg-light" style="background: linear-gradient(rgba(30,30,30,0.7), rgba(30,30,30,0.7)), url('/img/hero-bg.jpg') center/cover no-repeat fixed; min-height: 100vh;">
    @include('components.navbar')
    <main class="container py-5 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;">
        <div class="d-flex align-items-center mb-4">
            <h1 class="mb-0 gradient-text" style="font-family:'Montserrat',sans-serif;font-weight:700;letter-spacing:1px;">CampusBite Blog</h1>
        </div>
        <p class="mb-4" style="color:#222; background:rgba(255,251,227,0.95); border-radius:1rem; padding:1rem 1.5rem; box-shadow:0 2px 12px #0001;">Get the latest campus food tips, student deals, and healthy eating ideas. <a href="/menu" style="color:#e52e71;">Order from our menu</a> or <a href="/register" style="color:#22c55e;">join CampusBite</a> for exclusive offers!</p>
        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="background:#fffbe3;border-radius:1.25rem;">
                        <img src="{{ $blog->image_url }}" class="card-img-top" alt="{{ $blog->title }} cover" loading="lazy" style="object-fit:cover;max-height:180px;border-top-left-radius:1.25rem;border-top-right-radius:1.25rem;">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mt-2" style="font-weight:700;color:#fbbf24;">{{ $blog->title }}</h5>
                            <p class="card-text text-secondary">{{ $blog->excerpt }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-outline-primary btn-sm" style="color:#e52e71;border-color:#e52e71;">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">No blog posts found.</div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links() }}
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
    @include('components.footer')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
