@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card card-primary my-5">
            <form action="{{ route('certificate.update', $certificate->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header">
                    Edit Sertifikat
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Sertifikat</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Judul Sertifikat" value="{{ $certificate->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Produk</label>
                        <select class="form-select" aria-label="Default select example" name="product_id" id="product_id">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" @if($certificate->product_id == $product->id) selected @endif>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug Sertifikat (Tanpa Spasi)</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Sertifikat" value="{{ $certificate->slug }}">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk" rows="3">{{ $certificate->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Sertifikat</label>
                        <img class="img-fluid mb-3 col-sm-5 d-block" id="imgPreview" src="{{ asset($certificate->image) }}">
                        <input type="file" name="image" id="image" class="d-block form-control" onchange="previewImage()">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('certificate.index') }}" class="btn btn-danger">Batal</a>
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