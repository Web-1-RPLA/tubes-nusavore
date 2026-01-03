<<<<<<< HEAD
<!-- resources/views/admin/layouts/app.blade.php -->
=======
>>>>>>> d53463473ff3b879db2ab452a05fcaaeceafc98d
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin NusaVore')</title>
    @vite('resources/css/app.css')
</head>
<<<<<<< HEAD
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
=======

<body class="bg-amber-50 text-gray-800 min-h-screen flex flex-col">

<!-- ================= HEADER ================= -->
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('admin.index') }}" class="cursor-pointer">
            <h1 class="text-2xl font-bold text-amber-600">
                🍽️ Admin NusaVore
            </h1>
        </a>

        <!-- Navigation + User -->
        <div class="flex items-center space-x-6">

            <!-- Navigation -->
            <nav class="space-x-4 text-sm font-medium">
                <a href="/admin/menu" class="hover:text-amber-600">Menu</a>
                <a href="/admin/reservasi" class="hover:text-amber-600">Reservasi</a>
                <a href="/" class="text-gray-600 hover:text-amber-600">Website</a>
            </nav>

            <!-- User Dropdown -->
            @auth
            <div class="relative">
                <button
                    onclick="toggleUserMenu()"
                    class="flex items-center space-x-2 text-sm font-medium text-gray-700 hover:text-amber-600 focus:outline-none"
                >
                    <span>Hai, {{ Auth::user()->name }}</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div
                    id="userMenu"
                    class="hidden absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-md"
                >
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 rounded-lg"
                        >
                            Logout
                        </button>
                    </form>
                </div>
            </div>
            @endauth

        </div>
    </div>
</header>

<!-- ================= CONTENT ================= -->
<main class="flex-grow max-w-7xl mx-auto px-6 py-10">
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
>>>>>>> d53463473ff3b879db2ab452a05fcaaeceafc98d
<footer class="text-center text-sm text-gray-500 py-6">
    © {{ date('Y') }} NusaVore Admin Panel
</footer>

<<<<<<< HEAD
=======
<!-- ================= SCRIPT ================= -->
<script>
    function toggleUserMenu() {
        document.getElementById('userMenu').classList.toggle('hidden');
    }

    // Tutup dropdown kalau klik di luar
    document.addEventListener('click', function (e) {
        const menu = document.getElementById('userMenu');
        if (!e.target.closest('.relative')) {
            menu?.classList.add('hidden');
        }
    });
</script>

>>>>>>> d53463473ff3b879db2ab452a05fcaaeceafc98d
</body>
</html>
