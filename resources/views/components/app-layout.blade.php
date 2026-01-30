<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'College Website')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('components.premium-header')
    @include('components.navbar')

    <main class="relative z-0">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>