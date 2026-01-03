<x-layout>
    <div class="container">
        <div class="row p-3">
            <div class="col-md-8">
                <form action="/reservasi" method="POST">
                    @csrf
                    <h1>Reservasi & Pemesanan</h1>

                    {{-- Nama --}}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Atas Nama:</label>
                        <input type="text"
                               class="form-control @error('nama') is-invalid @enderror"
                               id="nama"
                               name="nama"
                               value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               id="email"
                               name="email"
                               value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Nomor Telepon --}}
                    <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                        <input type="text"
                               class="form-control @error('nomor_telepon') is-invalid @enderror"
                               id="nomor_telepon"
                               name="nomor_telepon"
                               value="{{ old('nomor_telepon') }}">
                        @error('nomor_telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Tanggal Reservasi --}}
                    <div class="mb-3">
                        <label for="reservation_date" class="form-label">Hari/Tanggal:</label>
                        <input type="date"
                               class="form-control @error('reservation_date') is-invalid @enderror"
                               id="reservation_date"
                               name="reservation_date"
                               value="{{ old('reservation_date') }}">
                        @error('reservation_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Waktu Reservasi --}}
                    <div class="mb-3">
                        <label for="reservation_time" class="form-label">Jam:</label>
                        <input type="time"
                               class="form-control @error('reservation_time') is-invalid @enderror"
                               id="reservation_time"
                               name="reservation_time"
                               value="{{ old('reservation_time') }}">
                        @error('reservation_time')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Jumlah Orang --}}
                    <div class="mb-3">
                        <label for="jumlah_orang" class="form-label">Jumlah Pax:</label>
                        <input type="number"
                               min="1"
                               class="form-control @error('jumlah_orang') is-invalid @enderror"
                               id="jumlah_orang"
                               name="jumlah_orang"
                               value="{{ old('jumlah_orang') }}">
                        @error('jumlah_orang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Catatan --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Catatan Tambahan:</label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                                  id="description"
                                  name="description"
                                  rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan Reservasi
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
