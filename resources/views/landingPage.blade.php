<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaVore - Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-amber-50 text-gray-800">

<!-- Navbar -->
<header class="bg-white shadow fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-amber-600">🍽️ NusaVore</h1>
        <nav class="space-x-6 hidden md:block">
            <a href="menu" class="hover:text-amber-600">Menu</a>
            <a href="#tentang" class="hover:text-amber-600">Tentang</a>
            <a href="#kontak" class="hover:text-amber-600">Kontak</a>
        </nav>
        <a href="#pesan" class="bg-amber-600 text-white px-4 py-2 rounded-lg">Pesan Sekarang</a>
    </div>
</header>

<!-- Hero -->
<section class="pt-32 pb-24 bg-[url('https://images.unsplash.com/photo-1555992336-03a23c5c8f4d')] bg-cover bg-center text-white">
    <div class="bg-black/60">
        <div class="max-w-7xl mx-auto px-6 py-24 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">Cita Rasa Terbaik di Setiap Sajian</h2>
            <p class="text-lg md:text-xl mb-8">Nikmati hidangan lezat dengan bahan segar dan resep istimewa dari dapur kami.</p>
            <a href="menu" class="bg-amber-600 px-8 py-3 rounded-lg text-lg font-semibold">Lihat Menu</a>
        </div>
    </div>
</section>

<!-- Menu -->
<section id="menu" class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-12">Menu Favorit</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold">Nasi Goreng Spesial</h4>
                    <p class="text-gray-600">Perpaduan bumbu khas dengan topping pilihan.</p>
                    <p class="mt-4 font-bold text-amber-600">Rp 25.000</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold">Ayam Bakar Madu</h4>
                    <p class="text-gray-600">Ayam empuk dengan saus madu manis gurih.</p>
                    <p class="mt-4 font-bold text-amber-600">Rp 30.000</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow overflow-hidden">
                <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445" class="h-56 w-full object-cover">
                <div class="p-6">
                    <h4 class="text-xl font-semibold">Dessert Spesial</h4>
                    <p class="text-gray-600">Manis, lembut, dan bikin ketagihan.</p>
                    <p class="mt-4 font-bold text-amber-600">Rp 18.000</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang -->
<section id="tentang" class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-6">Tentang NusaVore</h3>
        <p class="text-lg">NusaVore adalah restoran yang menghadirkan masakan berkualitas dengan rasa autentik, suasana nyaman, dan pelayanan terbaik.</p>
    </div>
</section>

<!-- CTA -->
<section id="pesan" class="py-20 bg-amber-600 text-white text-center">
    <h3 class="text-3xl font-bold mb-6">Siap Menikmati Hidangan Kami?</h3>
    <a href="/reservasi" class="bg-white text-amber-600 px-8 py-3 rounded-lg font-semibold">Reservasi Sekarang</a>
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
