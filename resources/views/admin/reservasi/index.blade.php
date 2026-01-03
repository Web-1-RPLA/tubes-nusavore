@extends('admin.layouts.app')

@section('title', 'Data Reservasi')

@section('content')
<h2 class="text-2xl font-bold mb-6 text-amber-600">📋 Daftar Reservasi</h2>

<div class="bg-white shadow rounded-xl overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead class="bg-amber-100 text-gray-700">
            <tr>
                <th class="px-4 py-3 text-left">Nama</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Telepon</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Jam</th>
                <th class="px-4 py-3">Pax</th>
                <th class="px-4 py-3">Catatan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservations as $r)
            <tr class="border-t hover:bg-amber-50">
                <td class="px-4 py-3 font-medium">{{ $r->nama }}</td>
                <td class="px-4 py-3">{{ $r->email }}</td>
                <td class="px-4 py-3">{{ $r->nomor_telepon }}</td>
                <td class="px-4 py-3">{{ $r->reservation_date }}</td>
                <td class="px-4 py-3">{{ $r->reservation_time }}</td>
                <td class="px-4 py-3 text-center">{{ $r->jumlah_orang }}</td>
                <td class="px-4 py-3">{{ $r->description ?? '-' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                    Belum ada reservasi
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
