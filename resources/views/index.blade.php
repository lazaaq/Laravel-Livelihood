@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection

@section('content')
<section class="hero">
    <div class="container">
        <div class="black-box">
            <div class="wrap-header">
                <div class="not-dropdown">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/product">Product</a></li>
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
                            <li><a href="/product">Product</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row real-hero">
                <div class="col col-12 col-lg-6">
                    <div class="text">
                        <div class="heading">livelihood.</div>
                        <div class="deskripsi">
                            Oversized T-shirt & Limited Edition
                            Inspied by urban culture, street, art, music and stuff.
                            #LiveliGang.
                        </div>
                        <a href="store.html"><span>SHOP NOW</span></a>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="image">
                        <img src="img/logo/white.jpg" alt="Model">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="floating">
            <div class="head">
                <div class="judul">
                    <div class="text">about us.</div>
                </div>
                <a href="contact.html"><span>&#8594;</span></a>
            </div>
            <div class="body">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, pariatur iure nesciunt cum alias, accusamus ducimus odit obcaecati odio ipsa tempora minus repellat debitis, accusantium ab in voluptatibus vero beatae doloremque eligendi et? Error aliquid at cupiditate maxime pariatur aut dolores eos neque, quae doloribus natus? Deserunt aliquid, et, tenetur eos officiis placeat ratione quidem pariatur sapiente cum beatae sed. Iure non eveniet eaque similique natus molestias fuga neque? Possimus, non error. In tenetur iure, eos quos aperiam aliquid culpa voluptatem magni labore hic asperiores, dignissimos recusandae eius quis. Quam in accusamus architecto aperiam eius blanditiis harum iusto alias praesentium.
            </div>
        </div>
    </div>
</section>

<section class="store">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F5E4D9" fill-opacity="1" d="M0,160L15,144C30,128,60,96,90,101.3C120,107,150,149,180,181.3C210,213,240,235,270,213.3C300,192,330,128,360,122.7C390,117,420,171,450,170.7C480,171,510,117,540,128C570,139,600,213,630,208C660,203,690,117,720,117.3C750,117,780,203,810,213.3C840,224,870,160,900,160C930,160,960,224,990,261.3C1020,299,1050,309,1080,266.7C1110,224,1140,128,1170,96C1200,64,1230,96,1260,122.7C1290,149,1320,171,1350,165.3C1380,160,1410,128,1425,112L1440,96L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path></svg>

    <div class="container">
        <div class="black">
            <div class="row">
                <div class="col col-12 col-lg-6">
                    <div class="text">
                        <div class="line-1">T-SHIRT</div>
                        <div class="line-2">OVERSIZED</div>
                        <div class="line-3">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores blanditiis repellendus dolor quam, nesciunt magnam, quibusdam officiis numquam dolores tenetur odit neque ea vel iusto atque corporis ipsum ipsam! Quaerat natus quae fugit similique neque aspernatur excepturi obcaecati repudiandae tenetur officiis esse tempore voluptatem, distinctio velit dignissimos id laudantium impedit.
                        </div>
                        <div class="buy">
                            <a href="https://shopee.co.id/Oversized-Basic-T-shirt-i.411594208.4488330631?position=0"><span>Buy Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="image">
                        <img src="img/produk/1/basic-01.jpg" alt="Produk">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F5E4D9" fill-opacity="1" d="M0,288L10.9,293.3C21.8,299,44,309,65,298.7C87.3,288,109,256,131,234.7C152.7,213,175,203,196,208C218.2,213,240,235,262,213.3C283.6,192,305,128,327,128C349.1,128,371,192,393,218.7C414.5,245,436,235,458,218.7C480,203,502,181,524,144C545.5,107,567,53,589,74.7C610.9,96,633,192,655,202.7C676.4,213,698,139,720,133.3C741.8,128,764,192,785,234.7C807.3,277,829,299,851,288C872.7,277,895,235,916,186.7C938.2,139,960,85,982,96C1003.6,107,1025,181,1047,208C1069.1,235,1091,213,1113,218.7C1134.5,224,1156,256,1178,256C1200,256,1222,224,1244,181.3C1265.5,139,1287,85,1309,106.7C1330.9,128,1353,224,1375,245.3C1396.4,267,1418,213,1429,186.7L1440,160L1440,320L1429.1,320C1418.2,320,1396,320,1375,320C1352.7,320,1331,320,1309,320C1287.3,320,1265,320,1244,320C1221.8,320,1200,320,1178,320C1156.4,320,1135,320,1113,320C1090.9,320,1069,320,1047,320C1025.5,320,1004,320,982,320C960,320,938,320,916,320C894.5,320,873,320,851,320C829.1,320,807,320,785,320C763.6,320,742,320,720,320C698.2,320,676,320,655,320C632.7,320,611,320,589,320C567.3,320,545,320,524,320C501.8,320,480,320,458,320C436.4,320,415,320,393,320C370.9,320,349,320,327,320C305.5,320,284,320,262,320C240,320,218,320,196,320C174.5,320,153,320,131,320C109.1,320,87,320,65,320C43.6,320,22,320,11,320L0,320Z"></path></svg>
    
</section>

<section class="contact">
    <div class="container">
        <div class="row justify-content-center judul mb-3">
            Social Media
        </div>
        <div class="row justify-content-center">
            <div class="col-12  col-sm-8 col-lg-2">
                <a href="https://www.instagram.com/lvlhd.idn">
                    <div class="image">
                        <img src="img/sosmed/instagram.svg" alt="Instagram">
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-2">
                <a href="https://shopee.co.id/livelihood.idn">
                    <div class="image">
                        <img src="img/sosmed/shopee.png" alt="Shopee">
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-2">
                <a href="mailto:livelihoodddd@gmail.com">
                    <div class="image">
                        <img src="img/sosmed/mail.svg" alt="Email">
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-2">
                <a href="https://www.tokopedia.com/livelihoodofficialshop">
                    <div class="image">
                        <img src="img/sosmed/tokopedia.png" alt="Tokopedia">
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-2">
                <a href="https://www.facebook.com/livelihood.idn">
                    <div class="image">
                        <img src="img/sosmed/facebook.png" alt="Facebook">
                    </div>
                </a>
            </div>
        </div>
        <div class="bottom">
            <a href="#">
                <div class="wrap">
                    TOP
                </div>
            </a>
        </div>
    </div>
</section>
@endsection

@section('js')
    
@endsection