@extends('layouts.main')

@section('css')
    <style>
        body {
            background-color: #F5E4D9;
        }
    </style>
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F5E4D9">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="content d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="image text-center mt-5">
            <img src="{{ asset($product->image) }}" alt="" width="500px">
        </div>
        <div class="row mb-3 mt-5">
            <div class="col-md-2">
                Nama Produk
            </div>
            <div class="col-md-10">
                <b>{{ $product->name }}</b>
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
        <div class="row mb-5">
            <a href="{{ $product->link }}" class="btn btn-info text-light" style="width: fit-content">Beli Produk</a>
        </div>
    </div>
</section>
@endsection