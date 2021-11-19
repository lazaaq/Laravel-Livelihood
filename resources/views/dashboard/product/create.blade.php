@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card card-primary mt-5">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    Tambah Produk
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Produk" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug Produk</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Produk" value="{{ old('slug') }}">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link Produk</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="Link Produk" value="{{ old('link') }}">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="{{ old('harga') }}">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Harga Produk</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk" rows="3">{{ old('deskripsi') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <img class="img-fluid mb-3 col-sm-5" id="imgPreview" style="display: none;">
                        <input type="file" name="image" id="image" class="d-block form-control" onchange="previewImage()">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('product.index') }}" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('#imgPreview');

        imgPreview.style.display = 'block';
        $('.image-form').css('margin-left', 'auto');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection