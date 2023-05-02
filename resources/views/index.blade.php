@extends('templates/base')
@section('title','Home | BCWF')
@section('container')
<div class="wrapper section-home">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/bg5.jpg');"></div>
        <div class="container">
            <div class="content-center">
                <img class="n-logo" src="./assets/images/bcwf2023-removebg-1.png" alt="" width="500" height="150">
                <h1 class="h1-seo">Bukittinggi Creative Week Festival.</h1>
                <h3>- Coffee Society -</h3>
            </div>
            <h6 class="category category-absolute">Designed by
                Someone People.
            </h6>
        </div>
    </div>
</div>
<div class="section section-about" id="#about-section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3 class="title">About</h3>
                <h5 class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sunt unde quis odit. Nam libero aut placeat ratione sed quae at dolore, perferendis quibusdam reprehenderit beatae doloribus dolorem earum cum.</h5>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a href="https://www.creative-tim.com/product/now-ui-kit" class="btn btn-primary btn-lg btn-round" role="button">
                    Download HTML
                </a>
                <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-lg btn-outline-primary btn-round" role="button">
                    Download PSD/Sketch
                </a>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                    <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="section section-event" id="#event-section">
    <div class="section-container">
      <h1 class="section-title">Event</h1> 
      <div class="section-voltage-button">
        <button onclick="window.location.href='/detail_event'">Detail</button>
      </div>
    </div>
    <div class="cards">
    
      <div class="card card1">
          <div class="section-containers">
              <img src="assets/img/header.jpg" alt="las vegas" class="images">
          </div>
          <div class="details">
              <h3>TalkShow</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
          </div>
      </div>
      <div class="card card2">
          <div class="section-containers">
              <img src="assets/img/header.jpg" alt="New York" class="images">
          </div>
          <div class="details">
              <h3>Creative Workshop Program</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
          </div>
      </div>
      <div class="card card3">
          <div class="section-containers">
              <img src="assets/img/header.jpg" alt="Singapore" class="images">
          </div>
          <div class="details">
              <h3>Local Discussion</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
          </div>
      </div>
      <div class="card card3">
        <div class="section-containers">
            <img src="assets/img/header.jpg" alt="Singapore" class="images">
        </div>
        <div class="details">
            <h3>Pameran Seni</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
        </div>
      </div>
      <div class="card card3">
        <div class="section-containers">
            <img src="assets/img/header.jpg" alt="Singapore" class="images">
        </div>
        <div class="details">
            <h3>Seni Pertunjukan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
        </div>
      </div>
      <div class="card card3">
        <div class="section-containers">
            <img src="assets/img/header.jpg" alt="Singapore" class="images">
        </div>
         <div class="details">
            <h3>Live Music</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
        </div>
      </div>
      <div class="card card3">
        <div class="section-containers">
            <img src="assets/img/header.jpg" alt="Singapore" class="images">
        </div>
          <div class="details">
            <h3>Funding for Artists</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
        </div>
      </div>
    </div>
  </div>
<div class="section section-sponsorship" id="#sponsorship-section" data-background="black">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3 class="title">Sponsorship</h3>
                <h5 class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, non. Error, hic vel a laboriosam voluptate aut magni libero voluptates nisi quam maiores eligendi illo nihil. Dolorum eum distinctio et.</h5>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a href="https://www.creative-tim.com/product/now-ui-kit" class="btn btn-primary btn-lg btn-round" role="button">
                    Download HTML
                </a>
                <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-lg btn-outline-primary btn-round" role="button">
                    Download PSD/Sketch
                </a>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="row justify-content-md-center sharing-area text-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3>Thank you for supporting us!</h3>
            </div>
            <div class="text-center col-md-12 col-lg-8">
                <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                    <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
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