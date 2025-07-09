

@include('components.head', [
    'title' => $title ?? 'Sample Blog Post | CampusBite',
    'meta_description' => $meta_description ?? 'Read the latest CampusBite blog post about student food, deals, and healthy eating.',
    'canonical' => $canonical ?? url()->current(),
    'og_title' => $og_title ?? 'Sample Blog Post | CampusBite',
    'og_description' => $og_description ?? 'Read the latest CampusBite blog post about student food, deals, and healthy eating.',
    'og_url' => $og_url ?? url()->current(),
])

<body class="bg-light">
    @include('components.navbar')
    <main class="container py-4 animate__animated animate__fadeIn">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <article itemscope itemtype="https://schema.org/Article">
                    <h1 class="mb-3" itemprop="headline">{{ $blog->title }}</h1>
                    @if($blog->image_url)
                        <img src="{{ $blog->image_url }}" class="img-fluid mb-3" alt="{{ $blog->title }} cover" loading="lazy" itemprop="image">
                    @endif
                    <div class="mb-4 text-muted">
                        <span>Published <time itemprop="datePublished" datetime="{{ $blog->published_at ? $blog->published_at->toDateString() : $blog->created_at->toDateString() }}">
                            {{ $blog->published_at ? $blog->published_at->format('F j, Y') : $blog->created_at->format('F j, Y') }}
                        </time></span>
                    </div>
                    <div class="mb-4" itemprop="articleBody">
                        {!! nl2br(e($blog->body ?? $blog->content)) !!}
                    </div>
                    <meta itemprop="author" content="CampusBite">
                    <a href="/blog" class="btn btn-outline-secondary">Back to Blog</a>
                    <a href="/menu" class="btn btn-link">Order from Menu</a>
                </article>
            </div>
        </div>
    </main>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
