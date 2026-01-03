@extends('admin.layouts.app')


@section('title', 'Edit Menu - Admin NusaVore')


@section('content')
    <h2 class="text-3xl font-bold mb-6">Edit Menu</h2>


    <form action="/admin/menu/{{ $menu->menu_id }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-8 rounded-xl shadow max-w-3xl">
        @csrf
        @method('PUT')


        <div class="mb-4">
            <label class="block font-medium mb-1">Nama Menu</label>
            <input type="text" name="name" value="{{ $menu->name }}"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200" required>
        </div>


        <div class="mb-4">
            <label class="block font-medium mb-1">Deskripsi</label>
            <textarea name="description" rows="3"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200">{{ $menu->description }}</textarea>
        </div>


        <div class="mb-4">
            <label class="block font-medium mb-1">Harga</label>
            <input type="number" name="price" value="{{ $menu->price }}"
                class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200" required>
        </div>


        <div class="mb-4">
            <label class="block font-medium mb-1">Kategori</label>
            <select name="category" class="w-full border rounded-lg p-2 focus:ring focus:ring-amber-200">
                <option value="Makanan" @selected($menu->category == 'Makanan')>Makanan</option>
                <option value="Minuman" @selected($menu->category == 'Minuman')>Minuman</option>
                <option value="Dessert" @selected($menu->category == 'Dessert')>Dessert</option>
            </select>
        </div>


        <div class="mb-6">
            <label class="block font-medium mb-1">Gambar Saat Ini</label>
            @if ($menu->image)
                <img src="{{ asset('storage/' . $menu->image) }}" class="h-32 rounded mb-3">
            @else
                <p class="text-sm text-gray-500">Tidak ada gambar</p>
            @endif


            <input type="file" name="image" class="w-full mt-2">
        </div>


        <div class="flex justify-end gap-3">
            <a href="/admin/menu" class="px-4 py-2 rounded-lg border">Batal</a>
            <button class="bg-amber-600 text-white px-6 py-2 rounded-lg hover:bg-amber-700">
                Update Menu
            </button>
        </div>
    </form>
@endsection