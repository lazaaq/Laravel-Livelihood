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
                    <a class="nav-link active" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/" class="nav-link lead" style="font-weight: 600">LIVELIHOOD</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="content d-flex align-items-center justify-content-center">
    <div class="container mt-5">
        @foreach ($products as $product)
        <div class="card col-lg-4 col-md-6 mb-3">
            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->deskripsi }}</p>
              <a href="/product/{{ $product->slug }}" class="btn btn-primary">Lihat Produk</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection