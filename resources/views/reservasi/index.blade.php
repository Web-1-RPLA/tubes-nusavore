@extends('layouts.public')

@section('title', 'Reservasi - NusaVore')

@section('content')
<!-- Hero -->
<section class="py-20 bg-gradient-to-r from-amber-600 to-orange-500 text-white text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Reservasi Meja</h1>
    <p class="text-lg max-w-2xl mx-auto">
        Pastikan kenyamanan Anda dengan melakukan reservasi terlebih dahulu di NusaVore
    </p>
</section>

<!-- Form Reservasi -->
<section class="py-16">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-xl shadow p-8 md:p-10">

            <h2 class="text-2xl font-bold mb-8 text-center">
                Form Reservasi
            </h2>

            <form action="{{ route('reservasi.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block font-medium mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" required
                        class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200">
                </div>

                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" required
                        class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200">
                </div>

                <div>
                    <label class="block font-medium mb-1">Nomor Telepon</label>
                    <input type="text" name="nomor_telepon" required
                        class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200">
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-medium mb-1">Tanggal</label>
                        <input type="date" name="reservation_date" required
                            class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200">
                    </div>

                    <div>
                        <label class="block font-medium mb-1">Jam</label>
                        <input type="time" name="reservation_time" required
                            class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200">
                    </div>
                </div>

                <div>
                    <label class="block font-medium mb-1">Jumlah Pax</label>
                    <input type="number" name="jumlah_orang" min="1" required
                        class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200">
                </div>

                <div>
                    <label class="block font-medium mb-1">Catatan Tambahan</label>
<<<<<<< HEAD
                    <textarea name="description " rows="4"
=======
                    <textarea na"
>>>>>>> d53463473ff3b879db2ab452a05fcaaeceafc98d
                        class="w-full border rounded-lg p-3 focus:ring focus:ring-amber-200"
                        placeholder="Contoh: dekat jendela, ulang tahun, dll"></textarea>
                </div>

                <div class="pt-6">
                    <button
                        class="w-full bg-amber-600 text-white py-3 rounded-lg font-semibold hover:bg-amber-700 transition">
                        Kirim Reservasi
                    </button>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection
