@extends('user.app')
@section('content')
<br><br><br><br><br><br><br>
  <div>
   <!-- <section class="site-hero" style="background-image: url(images/batek.jpg); width 100%;" id="section-home"> -->
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="rowcol-lg-6 pr-lg-4 mb-4 mb-lg-0">
          <img width="550px" src="images/logoduwet.jpeg" alt="Image placeholder" class="img-fluid">
</div>
<div class="col-lg-5 pl-lg-5">
  <div class="section-heading">
    <h3>About <strong>Duwet Handicraft</strong></h3>
</div><p>
        Duwet Handicraft adalah Produk Kerajinan Anyaman Bambu dari Desa Duwet. Produk anyaman bambu yang dihasilkan merupakan buatan tangan masyarakat desa Duwet yang kualitasnya sudah tidak perlu diragukan lagi. Masyarakat Duwet mulai membuat produk anyaman bambu sejak tahun 1960an.
Saat ini terdapat berbagai variasi produk anyaman bambu yang diproduksi oleh kurang lebih 165 pengrajin.
</p>
<div class="container">
  <h5><strong>Contact Info</strong></h5>
    <ul class="list-unstyled">
    <li>
    <span class="icon icon-home">  Sanan, Duwet, Kecamatan Tumpang, Kabupaten Malang, Jawa Timur 65156</span>
    </li> 
    <li>
    <span class="icon icon-phone">  081-216-893-425</span>
    </li>
    <li>
    <span class="icon icon-envelope"> duwethandicraft@gmail.com</span>
    </li>
</div>
</div>
</div>
</div>
</div>
</section>

    @yield('content')
  </div>

  <script src="{{ asset('shopper') }}/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
  <script src="{{ asset('shopper') }}/js/jquery-ui.js"></script>
  <script src="{{ asset('shopper') }}/js/popper.min.js"></script>
  <script src="{{ asset('shopper') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('shopper') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('shopper') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('shopper') }}/js/aos.js"></script>

  <script src="{{ asset('shopper') }}/js/main.js"></script>
    @yield('js')
</header>
</html>