<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NusaVore')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-amber-50 text-gray-800">

<!-- Navbar -->
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-amber-600">🍽️ NusaVore</a>
        <nav class="space-x-6 hidden md:block">
            <a href="/" class="hover:text-amber-600">Beranda</a>
            <a href="/menu" class="hover:text-amber-600">Menu</a>
            <a href="/reservasi" class="hover:text-amber-600">Reservasi</a>
        </nav>
    </div>
</header>

<!-- Content -->
<main>
{{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="max-w-3xl mx-auto mt-6 px-6">
            <div class="bg-green-100 border border-green-400 text-green-800 px-6 py-4 rounded-xl shadow">
                <div class="flex items-center gap-3">
                    <span class="text-xl">✅</span>
                    <p class="font-medium">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-10 text-center mt-16">
    <p>&copy; {{ date('Y') }} NusaVore. All rights reserved.</p>
    <p class="text-sm mt-1">Jl. Contoh No.123 · 08xxxxxxxx</p>
</footer>

</body>
</html>
