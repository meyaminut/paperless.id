<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Paperless.id - Solusi Digital Kreatif' }}</title>

        <!-- Meta Descriptions & SEO -->
        <meta name="description" content="{{ $metaDescription ?? 'Paperless.id - Platform layanan & aset digital ramah lingkungan tanpa sampah kertas.' }}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @endif

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
        </style>
    </head>
    <body class="bg-[#f8fafc] text-slate-800 antialiased selection:bg-blue-500 selection:text-white min-h-screen flex flex-col justify-between">

        <!-- Background Ambient Pattern -->
        <div class="fixed inset-0 pointer-events-none z-0 opacity-40" 
             style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 24px 24px;"></div>

        <!-- Main Wrapper Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-12 w-full flex-1 flex flex-col justify-between">

            <!-- Navigation Header Component -->
            <x-header :active-page="$activePage ?? ''" />

            <!-- Main Page Content Slot -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            <!-- Footer Component -->
            <x-footer :site-info="$siteInfo ?? \App\Services\SiteDataService::getSiteInfo()" />

        </div>

    </body>
</html>
