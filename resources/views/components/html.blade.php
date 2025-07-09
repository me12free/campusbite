<!DOCTYPE html>
<html lang="en">
    @include('components.head', [
        'title' => $title ?? 'CampusBite',
        'meta_description' => $meta_description ?? '',
        'canonical' => $canonical ?? request()->url(),
        'og_title' => $og_title ?? ($title ?? 'CampusBite'),
        'og_description' => $og_description ?? ($meta_description ?? ''),
        'og_url' => $og_url ?? ($canonical ?? request()->url()),
    ])
    {{ $slot }}
</html>
