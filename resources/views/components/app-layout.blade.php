@props(['header' => null])

<x-html>
    <body class="bg-light">
        @include('components.navbar')
        <main class="container py-4 animate__animated animate__fadeIn" style="font-family:'Montserrat',sans-serif;min-height:60vh;">
            @if ($header)
                <div class="mb-4">
                    {{ $header }}
                </div>
            @endif
            {{ $slot }}
        </main>
        @include('components.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</x-html>
