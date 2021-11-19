@extends('layouts.app')

@section('css')
    
@endsection

@section('content')
<section class="content">
    <div class="container">
        <div class="card card-light my-5">
            <div class="card-header">
                Detail Produk
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-2">
                        Nama Produk
                    </div>
                    <div class="col-md-10">
                        <b>{{ $product->name }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Slug
                    </div>
                    <div class="col-md-10">
                        <b>{{ $product->slug }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Link Produk
                    </div>
                    <div class="col-md-10">
                        <b>{{ $product->link }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Harga Produk
                    </div>
                    <div class="col-md-10">
                        <b>Rp {{ number_format($product->harga, 0, ',', '.') }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Deskripsi Produk
                    </div>
                    <div class="col-md-10">
                        <b>{{ $product->deskripsi }}</b>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        Gambar Produk
                    </div>
                    <div class="col-md-10">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->image }}" class="img-thumbnail" style="width:500px">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('product.index') }}" class="btn btn-primary">Kembali</a>
            </div>
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