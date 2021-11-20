@extends('layouts.main')

@section('css')
    <style>
        body {
            background-color: #F5E4D9;
        }
    </style>
@endsection

@section('content')
<section class="content d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="judul my-5 text-center">
            <h1>Sertifikat Keaslian Produk</h1>
        </div>
        <div class="image text-center mt-5">
            <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->title }}" width="900px" class="rounded">
        </div>
        <div class="row mb-3 mt-5">
            <div class="col-md-2">
                Nama Produk
            </div>
            <div class="col-md-10">
                <b>{{ $certificate->title }}</b>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-2">
                Deskripsi Produk
            </div>
            <div class="col-md-10">
                <b>{{ $certificate->deskripsi }}</b>
            </div>
        </div>
        <div class="mb-5">
            <a href="/product/{{ $certificate->product->slug }}" class="btn btn-info text-light">Lihat Produk</a>
        </div>
    </div>
</section>
@endsection