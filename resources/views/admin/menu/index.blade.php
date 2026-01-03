@extends('admin.layouts.app')

@section('title', 'Admin Menu - NusaVore')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold">Daftar Menu</h2>
    <a href="/admin/menu/create"
       class="bg-amber-600 text-white px-5 py-2 rounded-lg shadow hover:bg-amber-700">
        + Tambah Menu
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-amber-100">
            <tr>
                <th class="p-4 text-left">Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menus as $menu)
            <tr class="border-t hover:bg-amber-50">
                <td class="p-4 font-medium">{{ $menu->name }}</td>
                <td>{{ $menu->category }}</td>
                <td>Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                <td class="text-center space-x-2">
                    <a href="/admin/menu/{{ $menu->menu_id }}/edit"
                       class="text-blue-600 hover:underline">Edit</a>

                    <form action="/admin/menu/{{ $menu->menu_id }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus menu ini?')"
                                class="text-red-600 hover:underline">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-6 text-center text-gray-500">
                    Belum ada menu.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
