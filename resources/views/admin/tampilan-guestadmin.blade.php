<x-guest-layout>
    <h2 class="text-2xl font-bold mb-6 text-blue-600 text-center">
        Selamat Datang di Halaman Admin NusaVore
    </h2>

    <div class="bg-white shadow rounded-xl p-6">
        <div class="flex justify-center gap-4 mt-4">
            <a href="{{ route('login') }}"
               class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                Login
            </a>

            <a href="{{ route('register') }}"
               class="px-6 py-2 border border-gray-400 text-gray-700 rounded-lg hover:bg-gray-100 transition">
                Register
            </a>
        </div>
    </div>
</x-guest-layout>
