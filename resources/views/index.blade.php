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
                Someone People.
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
    <div class="section-container">
        <h1>Event</h1>
        <div class="section-voltage-button">
            <button onclick="window.location.href='/detail_event'">Detail</button>
        </div>
    </div>
    <div class="cards">
        <div class="kartu card1">
            <div class="section-containers">
                <img src="assets/img/header.jpg" alt="las vegas" class="images">
            </div>
            <div class="details">
                <h3>TalkShow</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="kartu card2">
            <div class="section-containers">
                <img src="assets/img/header.jpg" alt="New York" class="images">
            </div>
            <div class="details">
                <h3>Creative Workshop Program</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="kartu card3">
            <div class="section-containers">
                <img src="assets/img/header.jpg" alt="Singapore" class="images">
            </div>
            <div class="details">
                <h3>Local Discussion</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="kartu card3">
            <div class="section-containers">
                <img src="assets/img/header.jpg" alt="Singapore" class="images">
            </div>
            <div class="details">
                <h3>Pameran Seni</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="kartu card3">
            <div class="section-containers">
                <img src="assets/img/header.jpg" alt="Singapore" class="images">
            </div>
            <div class="details">
                <h3>Seni Pertunjukan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="kartu card3">
            <div class="section-containers">
                <img src="assets/img/header.jpg" alt="Singapore" class="images">
            </div>
            <div class="details">
                <h3>Live Music</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="kartu card3">
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
<div class="section section-sponsorship" id="#sponsorship-section">
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
<div class="section section-kontak" id="#kontak-section" data-background-color="black">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="text-center col-md-12 col-lg-8">
                <h3 class="title">Kontak</h3>
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
@endsection