<!-- resources/views/admin/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin NusaVore')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-amber-50 text-gray-800">

<!-- Header Admin -->
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-amber-600">🍽️ Admin NusaVore</h1>
        <nav class="space-x-4">
            <a href="/admin/menu" class="hover:text-amber-600">Menu</a>
            <a href="/" class="text-sm text-gray-600 hover:text-amber-600">Website</a>
        </nav>
    </div>
</header>

<!-- Content -->
<main class="max-w-7xl mx-auto px-6 py-10">
    @yield('content')
</main>

<!-- Footer -->
<footer class="text-center text-sm text-gray-500 py-6">
    © {{ date('Y') }} NusaVore Admin Panel
</footer>

</body>
</html>
