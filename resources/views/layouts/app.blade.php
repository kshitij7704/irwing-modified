<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <meta name="keywords" content="{{ $seo->meta_keywords ?? '' }}">
        <link rel="canonical" href="{{ $seo->canonical_url ?? url()->current() }}" />

        <meta property="og:title" content="{{ $seo->og_title ?? $seo->meta_title ?? '' }}" />
        <meta property="og:description" content="{{ $seo->og_description ?? $seo->meta_description ?? '' }}" />
        @if(!empty($seo->og_image))
            <meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}" />
        @endif

        <meta name="twitter:title" content="{{ $seo->twitter_title ?? $seo->meta_title ?? '' }}">
        <meta name="twitter:description" content="{{ $seo->twitter_description ?? $seo->meta_description ?? '' }}">
        @if(!empty($seo->twitter_image))
            <meta name="twitter:image" content="{{ asset('storage/' . $seo->twitter_image) }}">
        @endif


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        @stack('scripts')
        @livewireScripts
    </body>
</html>
