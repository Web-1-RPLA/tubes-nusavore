<x-layout>
    <div class="container">
        <div class="row p-3">
            <div class="col">
                <form>
                    <h1>Tambah Menu</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Menu</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               value="{{ old('name') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control"
                                  id="description"
                                  name="description"
                                  rows="3">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number"
                               step="0.01"
                               class="form-control"
                               id="price"
                               name="price"
                               value="{{ old('price') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Menu</label>
                        <img class="img-preview img-fluid mb-3" style="display:none; max-width:250px;">
                        <input class="form-control"
                               type="file"
                               id="image"
                               name="image"
                               onchange="previewImage()">
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
