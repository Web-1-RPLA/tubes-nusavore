@extends('admin.layouts.app')

@section('title', 'Tambah Menu - Admin NusaVore')

@section('content')
<h2 class="text-3xl font-bold mb-6">Tambah Menu</h2>

<form action="/admin/menu" method="POST" enctype="multipart/form-data"
      class="bg-white p-8 rounded-xl shadow max-w-3xl">
    @csrf

    <div class="mb-4">
        <label class="block font-medium mb-1">Nama Menu</label>
        <input type="text" name="name"
               class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200"
               required>
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Deskripsi</label>
        <textarea name="description" rows="3"
                  class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200"></textarea>
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Harga</label>
        <input type="number" name="price"
               class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200"
               required>
    </div>

    <div class="mb-4">
        <label class="block font-medium mb-1">Kategori</label>
        <select name="category"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200">
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
            <option value="Dessert">Dessert</option>
        </select>
    </div>

    <div class="mb-6">
        <label class="block font-medium mb-1">Gambar Menu</label>
        <input type="file" name="image" class="w-full">
    </div>

    <div class="flex justify-end gap-3">
        <a href="/admin/menu" class="px-4 py-2 rounded-lg border">Batal</a>
        <button class="bg-amber-600 text-white px-6 py-2 rounded-lg hover:bg-amber-700">
            Simpan Menu
        </button>
    </div>
</form>
@endsection
