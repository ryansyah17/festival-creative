@extends('templates/base')
@section('title', 'Home | BCWF')
@section('container')
    <div class="wrapper section-home">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/bg_bcwf.jpg');">
            </div>
            <div class="container animate__animated animate__fadeInDown">
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
    <div class="section section-countdown" id="#countdown-section" data-background-color="merah">
        <div class="count-conta">
        <div class="countdown-title">Countdown</div>
		    <div class="countdown-container">
		        <div class="countdown-box-days">
			        <span id="days"></span>
			        <div class="countdown-label">Hari</div>
		        </div>
		        <div class="countdown-box-hours">
			        <span id="hours"></span>
			        <div class="countdown-label">Jam</div>
		        </div>
		        <div class="countdown-box-minutes">
			        <span id="minutes"></span>
			        <div class="countdown-label">Menit</div>
		        </div>
		        <div class="countdown-box-seconds">
			        <span id="seconds"></span>
			        <div class="countdown-label">Detik</div>
		        </div>
		    </div>
        </div>
	</div>
    <div class="section section-about" id="#about-section" data-background-color="blue">
        <div class="event-container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block" src="./assets/images/bcwf2023.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="./assets/images/bcwf2023.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="./assets/images/bcwf2023.png" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <i class="now-ui-icons arrows-1_minimal-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="flex-md-row mb-4 box-shadow h-md-250" data-background-color="white">
                        <div class="d-flex flex-column align-items-start">
                            <h1>About Us</h1>
                            <span>Bukittinggi Creative Week Festival 2023 adalah agenda kreatif yang akan diadakan pada
                                bulan Agustus 2023. Agenda ini bertujuan untuk merepresentasi pekerja seni dan pekerja
                                industri kreatif di Bukittinggi. Agenda kreatif ini tentu akan mendukung kerja-kerja kreatif
                                dan budaya sekaligus mengaktualisasi aktivisme kesenian para pekerja seni dan pekerja
                                kreatif di dalam atau di luar kota Bukittinggi. Agenda kreatif ini digagas oleh CV.
                                ArtlessSociety, sebuah kolektif non-pemerintahan yang bergerak di bidang literasi dan
                                pengembangan kesenian dan kebudayaan yang berbasis di Bukittinggi. Festival ini didanai oleh
                                investor dan sponsor dari brand-brand yang asosiatif dengan value dan semangat festival BCWF
                                2023.</span>
                            <br><span>Bukittinggi Creative Week Festival 2023 adalah agenda kreatif yang akan diadakan pada
                                bulan Agustus 2023. Agenda ini bertujuan untuk merepresentasi pekerja seni dan pekerja
                                industri kreatif di Bukittinggi. Agenda kreatif ini tentu akan mendukung kerja-kerja kreatif
                                dan budaya sekaligus mengaktualisasi aktivisme kesenian para pekerja seni dan pekerja
                                kreatif di dalam atau di luar kota Bukittinggi. Agenda kreatif ini digagas oleh CV.
                                ArtlessSociety, sebuah kolektif non-pemerintahan yang bergerak di bidang literasi dan
                                pengembangan kesenian dan kebudayaan yang berbasis di Bukittinggi. Festival ini didanai oleh
                                investor dan sponsor dari brand-brand yang asosiatif dengan value dan semangat festival BCWF
                                2023.</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="section section-event" id="#event-section" data-background-color="merah">
        <div class="event-container">

            <h3 class="event-title"> Event </h3>

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

    <div class="section section-ticket" id="#ticket-section" data-background-color="blue">
        <div class="ticket-container">
            <h3 class="ticket-title">Ticket</h3>
            <div class="daftar-ticket">    
                <div class="ticket"></div>
                <div class="ticket"></div>
                <div class="ticket"></div>
                <div class="ticket"></div>
            </div>
            
        </div>
    </div>

    <div class="section section-sponsorship" id="#sponsorship-section" data-background-color="kuning">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="text-center col-md-12 col-lg-10">
                    <h1>Sponsorship</h1>
                    <div class="card">
                        <div class="card-body">
                            <br>
                            <span class="text-black">ISI SPONSOR</span><br>
                            <span class="text-black">ISI SPONSOR</span><br>
                            <span class="text-black">ISI SPONSOR</span><br>
                            <span class="text-black">ISI SPONSOR</span><br>
                            <span class="text-black">ISI SPONSOR</span><br><br>
                            
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
    <div class="section section-kontak" id="#kontak-section" data-background-color="hijau">
        <div class="kontak-container">
            <h3 class="kontak-title">
                Information
            </h3>
            <div class="kontak">
                <div class="row">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7617337929737!2d100.3669398596592!3d-0.3051533853376605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd538bce0251993%3A0x671c755cea2a2d4!2sJam%20Gadang%2C%20Benteng%20Ps.%20Atas%2C%20Kec.%20Guguk%20Panjang%2C%20Kota%20Bukittinggi%2C%20Sumatera%20Barat%2026136!5e0!3m2!1sid!2sid!4v1682957420366!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="map"></iframe>
                </div>
                    <div class="contact-info">
                        <div class="card-info">
                            <a href="#" class="icon1">
                              <i class="icons fa fa-facebook"></i>
                              <span>Facebook</span>
                            </a>
                        </div>
                        <div class="card-info">
                            <a href="https://www.instagram.com/bktcreativeweekfestival/" class="icon2">
                              <i class="icons fa fa-instagram"></i>
                              <span>Instagram</span>
                            </a>
                        </div>
                        <div class="card-info">
                            <a href="#" class="icon3">
                              <i class="icons fa fa-twitter"></i>
                              <span>Twitter</span>
                            </a>
                        </div>
                        <div class="card-info">
                            <a href="#" class="icon4">
                              <i class="icons fa fa-whatsapp"></i>
                              <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
