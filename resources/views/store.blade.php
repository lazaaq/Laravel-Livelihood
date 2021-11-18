@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="css/store.css">
@endsection

@section('content')
<header>
    <div class="container">
        <div class="black-box">
            <div class="wrap-header">
                <div class="not-dropdown">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/store">Store</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                    <div class="brand">livelihood</div>
                </div>
                <div class="dropdown">
                    <button onclick="lihat_menu()" id="lihat-menu">
                        <img src="img/icon/down-chevron.svg" alt="Menu">
                    </button>
                    <button onclick="tutup_menu()" id="tutup-menu">
                        <img src="img/icon/down-chevron.svg" alt="Menu">
                    </button>
                    <div class="items" id="menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/store">Store</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="product">
    <div class="container">
        <div class="row">
            <div class="col judul">
                NEW PRODUCT!
            </div>
        </div>
        <div class="row">
            <div class="col image">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/produk/1/streetwearid1-01.jpg" class="d-block m-auto" alt="StreetWear">
                        </div>
                        <div class="carousel-item">
                            <img src="img/produk/1/streetwearid1-02.jpg" class="d-block m-auto" alt="StreetWear">
                        </div>
                        <div class="carousel-item">
                            <img src="img/produk/1/basic-01.jpg" class="d-block m-auto" alt="StreetWear">
                        </div>
                        <div class="carousel-item">
                            <img src="img/produk/1/foto1.jpg" class="d-block m-auto" alt="StreetWear">
                        </div>
                        <div class="carousel-item">
                            <img src="img/produk/1/foto2.jpg" class="d-block m-auto" alt="StreetWear">
                        </div>
                        <div class="carousel-item">
                            <img src="img/produk/1/ukuran.jpg" class="d-block m-auto" alt="StreetWear">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
        <div class="deskripsi justify-content-center">
            <div class="row">
                <div class="col-4 non-value">
                    <div class="nama">Nama</div>
                    <div class="color">Color</div>
                    <div class="material">Material</div>
                    <div class="harga">Harga</div>
                </div>
                <div class="col-8 value">
                    <div class="nama-value">: T-shirt Oversized Basic</div>
                    <div class="color-value">: Black</div>
                    <div class="material-value">: Cotton</div>
                    <div class="harga-value">: Rp 79.000</div>
                </div>
            </div>
            <div class="row">
                <a href="https://shopee.co.id/Oversized-Basic-T-shirt-i.411594208.4488330631?position=0">
                    <span class="btn btn-outline-dark" >Buy Now</span>
                </a>
            </div>
        </div>
    </div>
</section>    
@endsection

@section('js')

@endsection