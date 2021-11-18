@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="css/contact.css">
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

<section class="contact">
    <div class="container">
        <div class="row justify-content-center judul mb-3">
            Social Media
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-lg-2">
                <a href="https://www.instagram.com/lvlhd.idn">
                    <div class="image">
                        <img src="img/sosmed/instagram.svg" alt="Instagram">
                        <div class="text">Instagram</div>
                    </div>
                    
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <a href="https://shopee.co.id/livelihood.idn">
                    <div class="image">
                        <img src="img/sosmed/shopee.png" alt="Shopee">
                        <div class="text">Shopee</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <a href="mailto:livelihoodddd@gmail.com">
                    <div class="image">
                        <img src="img/sosmed/mail.svg" alt="Email">
                        <div class="text">Email</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <a href="https://www.tokopedia.com/livelihoodofficialshop">
                    <div class="image">
                        <img src="img/sosmed/tokopedia.png" alt="Tokopedia">
                        <div class="text">Tokopedia</div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <a href="https://www.facebook.com/livelihood.idn">
                    <div class="image">
                        <img src="img/sosmed/facebook.png" alt="Facebook">
                        <div class="text">Facebook</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    
@endsection