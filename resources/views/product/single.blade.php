@extends('layouts.main')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
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
                Slug Produk
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
    </div>
</section>
@endsection