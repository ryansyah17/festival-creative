@extends('templates/base')
@section('title','Home | BCWF')
@section('container')
<div class="wrapper section-home">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/bg_bcwf.jpg');"></div>
        <div class="container">
            <div class="content-center">
                <!-- <img class="n-logo" src="./assets/images/bcwf2023-removebg-1.png" alt="" width="500" height="150"> -->
                <br><br><br><br><br>
                <h1 class="h1-seo">Bukittinggi Creative Week Festival.</h1>
                <h3>- Coffee Society -</h3>
            </div>
            <h6 class="category category-absolute">Designed by
                Effort Projects
            </h6>
        </div>
    </div>
</div>
<div class="section section-about" id="#about-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block" src="./assets/img/bg_bcwf.jpg" alt="First slide">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Nature, United States</h5>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="./assets/img/bg_bcwf.jpg" alt="Second slide">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Somewhere Beyond, United States</h5>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="./assets/img/bg_bcwf.jpg" alt="Third slide">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Yellowstone National Park, United States</h5>
                            </div> -->
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <h1>About Us</h1>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <div>
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <span>Bukittinggi Creative Week Festival 2023 adalah agenda kreatif yang akan diadakan pada bulan Agustus 2023. Agenda ini bertujuan untuk merepresentasi pekerja seni dan pekerja industri kreatif di Bukittinggi. Agenda kreatif ini tentu akan mendukung kerja-kerja kreatif dan budaya sekaligus mengaktualisasi aktivisme kesenian para pekerja seni dan pekerja kreatif di dalam atau di luar kota Bukittinggi. Agenda kreatif ini digagas oleh CV. ArtlessSociety, sebuah kolektif non-pemerintahan yang bergerak di bidang literasi dan pengembangan kesenian dan kebudayaan yang berbasis di Bukittinggi. Festival ini didanai oleh investor dan sponsor dari brand-brand yang asosiatif dengan value dan semangat festival BCWF 2023.</span>
                        </div><br>
                        <div id="home" role="tabpanel">
                            <span>Coffee Society—atau “Masyarakat Kopi” adalah tema pertama yang diangkat pada festival BCWF 2023. Tema ini lahir dari realitas kedai kopi hari ini; kedai kopi tidak hanya tumbuh sebagai sebuah trend bisnis, namun kedai kopi juga tumbuh menjadi sebuah ruang, tempat lahirnya gagasan-gagasan segar.</span>
                        </div><br>
                        <div id="home" role="tabpanel">
                            <span>Agenda ini terdiri dari panel diskusi, pameran senirupa, art performances, band concerts, dan bazaar. Stakeholders dari festival ini adalah tim manajemen festival, intelektual, seniman dan presenter, investor dan sponsor, attendees dan komunitas masyarakat di sekitar lokasi festival, dan bisnis lokal dan vendor-vendor UMKM.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-event" id="#event-section">
<div class="event-container">

<h3 class="event-title"> Daftar Event </h3>

<div class="daftar-event">

   <div class="event" data-name="p-1">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>TalkShow</h3>
   </div>

   <div class="event" data-name="p-2">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>Creative WorkShop Program</h3>
   </div>

   <div class="event" data-name="p-3">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>Local Discussion</h3>
   </div>

   <div class="event" data-name="p-4">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>Pameran</h3>
   </div>

   <div class="event" data-name="p-5">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>Pertunjukan</h3>

   </div>

   <div class="event" data-name="p-6">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>Live Music</h3>
   </div>

   <div class="event" data-name="p-7">
      <img src="assets/images/bcwf2023.png" alt="">
      <h3>Funding For Artist</h3>
   </div>

</div>

</div>

<div class="products-preview">

<div class="preview" data-target="p-1">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Talshow</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

<div class="preview" data-target="p-2">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Creative WorkShop Program</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

<div class="preview" data-target="p-3">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Local Discussion</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

<div class="preview" data-target="p-4">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Pameran</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

<div class="preview" data-target="p-5">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Seni Pertunjukan</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

<div class="preview" data-target="p-6">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Live Music</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

<div class="preview" data-target="p-7">
   <i class="fas fa-times"></i>
   <img src="assets/images/bcwf2023.png" alt="">
   <h3>Funding For Artist</h3>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
</div>

</div>
</div>
<div class="section section-sponsorship" id="#sponsorship-section" data-background="black">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-10">
                <h3 class="title">Sponsorship</h3>
                <div class="card">
                    <div class="card-body">
                        <br>
                        <h5>ISI SPONSOR</h5>
                        <h5>ISI SPONSOR</h5>
                        <h5>ISI SPONSOR</h5>
                        <h5>ISI SPONSOR</h5>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
    </div>
</div>
<div class="section section-kontak" id="#kontak-section">
    <div class="section-contact">
    <h2><span>Kontak Kami</span></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.
        </p>
    <div class="row"> 
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7617337929737!2d100.3669398596592!3d-0.3051533853376605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd538bce0251993%3A0x671c755cea2a2d4!2sJam%20Gadang%2C%20Benteng%20Ps.%20Atas%2C%20Kec.%20Guguk%20Panjang%2C%20Kota%20Bukittinggi%2C%20Sumatera%20Barat%2026136!5e0!3m2!1sid!2sid!4v1682957420366!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <div class="contact-container">
          <div class="contact-info">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          
          <div class="contact-wrapper">
            <a href="https://www.instagram.com/bktcreativeweekfestival/" class="contact-box instagram">
              <i class="fi fi-instagram" data-feather="instagram"></i>
              <span>Instagram</span>
            </a>
            <a href="https://wa.me/+6281243779612" class="contact-box whatsapp">
              <i class="fi fi-whatsapp" data-feather="phone"></i>
              <span>WhatsApp</span>
            </a>
            <a href="#" class="contact-box twitter">
              <i class="fi fi-twitter" data-feather="twitter"></i>
              <span>Twitter</span>
            </a>
          </div>
        </div>
    </div>
    </div>
</div>
@endsection