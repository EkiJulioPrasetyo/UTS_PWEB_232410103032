<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="min-h-screen flex flex-col bg-gray-100">
        @if (!isset($showNavbar) || $showNavbar)
            <div class="z-20 relative">
                @include('components.navbar')
            </div>
        @endif
        <main class="{{ isset($fullPage) && $fullPage ? 'flex-1' : 'flex-1 p-4' }}">
            @yield('content')
        </main>
        @include('components.footer')
        @stack('scripts')
    </body>
</html>
