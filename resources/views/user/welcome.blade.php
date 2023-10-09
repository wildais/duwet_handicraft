@extends('user.app')
@section('content')

<div>
<section class="site hero" style="background-image: url(images/anyamanbambu.jpg); width: 100%; background-size: cover; background-repeat: no-repeat;
            background-position: center; background-attachment: fixed;
            height: 100%;" id="section-home" data-stellar-background-ratio="0.5">
<div class="container">
    <div class="row intro-text align-items-center justify-content-center">
        <div class="col-md-10 animated tada">
            <br><br><br><br><br><br><br>
            <h1 class="site-heading site-animate"><font color="black"><h1>Selamat Datang!<strong class="d-block">Duwet Handicraft Toko Online Terlengkap Produk Anyaman Bambu</strong</h1>
            <strong class="d-block text-white text-uppercase letter-spacing"><font color="black">Selamat Berbelanja</strong>
<br><br><br>
            <div class="container">
    <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-8 text-center text-md-left pt-5 pt-md-0">
        <h3 class="mb-2"><strong> <font color="black">Kunjungi toko online kami untuk menemukan berbagai produk anyaman bambu.</strong> </h3><br>
        <h6 class="mb-2"><font color="black"><h5>Dapatkan produk original dengan kualitas terbaik</h6>
        <div class="intro-text text-center text-md-left">
            <h4 class="mb-3"><font color="black">Temukan berbagai kebutuhan Anda di Duwet Handicraft</h4>
            <p>
            <a href="{{ route('user.produk') }}" class="btn btn-sm btn-dark">Belanja Sekarang</a>
            </p>
        </div>
        </div>
    </div>
    </div>
            <br><br><br><br><br>
</div>
</div>
</div>
</section>
<div class="site-section block-3 site-blocks-2 bg-secondary"  data-aos="fade-up">
<div class="site-section-sm">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
        </div>
        <div class="text">
            <h5><strong>Pengiriman</strong></h5>
            <p>Pengiriman bisa ke seluruh wilayah Indonesia dengan berbagai pilihan jasa ekspedisi</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
            <span class="icon-star"></span>
        </div>
        <div class="text">
            <h5><strong>Kualitas Barang Oke</strong></h5>
            <p>Kualitas barang dari toko kami terjamin original dan berkualitas.</p>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
            <span class="icon-security"></span>
        </div>
        <div class="text">
            <h5><strong>Keamanan</strong></h5>
            <p>Kami menjamin keamanan dalam pengiriman barang sampai diterima oleh anda.</p>
        </div>
        </div>
    </div>
    </div>
</div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
        <h3><strong>Best Seller<strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel" >
            @foreach($produks as $produk)
            <div class="item">
            <div class="block-4 text-center">
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                <figure class="block-4-image">
                <img src="{{ url('images/'.$produk->image) }}" width="100%" style="height:300px"> 
                </a>
                <div class="block-4-text p-4">
                <h3><a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" style= "color:black">{{ $produk->name }}</a></h3>
                <p class="mb-0" style="color:black">{{ $produk->price }}</p>
                <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" class="btn btn-dark btn-block">Detail</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    </div>
</div>
    @endsection