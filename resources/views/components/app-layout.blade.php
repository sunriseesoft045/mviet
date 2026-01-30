<!--
  Blade Component: resources/views/components/app-layout.blade.php
  Description: Main application layout with Navbar and Footer.
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Professional College Website' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 text-gray-800">

        <!-- Site Navbar -->
        <x-navbar />

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Site Footer -->
        <x-footer />

    </body>
</html>
