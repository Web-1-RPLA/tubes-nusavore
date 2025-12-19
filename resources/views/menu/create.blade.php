<x-layout>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <form action="/menu" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Tambah Menu</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Menu</label>
                        <input type="text"class="form-control @error ('name') is-invalid @enderror"
                            value="{{ old('name') }}" id="name" name="name">
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error ('description') is-invalid @enderror"
                                  id="description"
                                  name="description"
                                  rows="3">{{ old('description') }}</textarea>
                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number"
                               step="0.01"
                               class="form-control @error ('price') is-invalid @enderror"
                               id="price"
                               value="{{ old('price') }}"
                               name="price">
                        @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Menu</label>
                        <img class="img-preview img-fluid mb-3" style="display:none; max-width:250px;">
                        <input class="form-control @error ('image') is-invalid @enderror"
                               type="file"
                               id="image"
                               name="image"
                               onchange="previewImage()">
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const reader = new FileReader();
            reader.readAsDataURL(image.files[0]);

            reader.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</x-layout>
