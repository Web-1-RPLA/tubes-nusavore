<!-- resources/views/menu.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Lengkap - NusaVore</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-amber-50 text-gray-800">

<!-- Navbar -->
<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-amber-600">🍽️ NusaVore</a>
        <nav class="space-x-6 hidden md:block">
            <a href="/" class="hover:text-amber-600">Beranda</a>
            <a href="/menu" class="text-amber-600 font-semibold">Menu</a>
            <a href="#kontak" class="hover:text-amber-600">Kontak</a>
        </nav>
        <a href="/reservasi" class="bg-amber-600 text-white px-4 py-2 rounded-lg">Reservasi</a>
    </div>
</header>

<!-- Header Menu -->
<section class="py-20 bg-gradient-to-r from-amber-600 to-orange-500 text-white text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Menu Lengkap Kami</h1>
    <p class="text-lg">Pilihan hidangan terbaik untuk menemani waktu makan Anda</p>
</section>

<!-- Filter Kategori -->
<section class="py-10">
    <div class="max-w-7xl mx-auto px-6 flex flex-wrap gap-4 justify-center">
        <button class="px-6 py-2 bg-amber-600 text-white rounded-full">Semua</button>
        <button class="px-6 py-2 bg-white shadow rounded-full hover:bg-amber-100">Makanan</button>
        <button class="px-6 py-2 bg-white shadow rounded-full hover:bg-amber-100">Minuman</button>
        <button class="px-6 py-2 bg-white shadow rounded-full hover:bg-amber-100">Dessert</button>
    </div>
</section>

<!-- Daftar Menu -->
<!-- Daftar Menu -->
<section class="pb-20">
    <div class="max-w-7xl mx-auto px-6 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        @forelse ($menus as $menu)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

            <img
                src="{{ $menu->image ? asset('storage/'.$menu->image) : asset('images/no-image.png') }}"
                alt="{{ $menu->name }}"
                class="h-48 w-full object-cover"
            >

            <div class="p-5">
                <h3 class="text-lg font-semibold">
                    {{ $menu->name }}
                </h3>

                <p class="text-sm text-gray-600">
                    {{ $menu->description ?? 'Deskripsi belum tersedia' }}
                </p>

                <div class="flex justify-between items-center mt-4">
                    <span class="font-bold text-amber-600">
                        Rp {{ number_format($menu->price, 0, ',', '.') }}
                    </span>

                    <a
                        href="https://wa.me/628xxxxxxxx?text=Halo%20NusaVore,%20saya%20ingin%20memesan%20{{ urlencode($menu->name) }}"
                        class="text-sm bg-amber-600 text-white px-3 py-1 rounded"
                        target="_blank"
                    >
                        Pesan
                    </a>
                </div>
            </div>
        </div>
        @empty
            <p class="col-span-full text-center text-gray-500">
                Menu belum tersedia.
            </p>
        @endforelse

    </div>
</section>

<!-- Footer -->
<footer id="kontak" class="bg-gray-900 text-gray-300 py-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; {{ date('Y') }} NusaVore. All rights reserved.</p>
        <p class="mt-2">Jl. Contoh No.123 · 08xxxxxxxx</p>
    </div>
</footer>

</body>
</html>
