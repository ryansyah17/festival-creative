<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="./assets/images/bcwf2023.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Home | BCWF2023</title>
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars" onclick="toggleMenu()"></div>
        <a data-aos="zoom-in-left" data-aos-delay="200" href="#" class="logo">BCWF 2023</a>
        <nav data-aos="zoom-in-left" data-aos-delay="300" class="navbar" onclick="closeMenu()">
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#home" onclick="closeMenu()">Home</a>
            <a data-aos="zoom-in-left" data-aos-delay="500" href="#lineup" onclick="closeMenu()">lineup</a>
            <a data-aos="zoom-in-left" data-aos-delay="550" href="#event" onclick="closeMenu()">Event</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="#venue" onclick="closeMenu()">venue</a>
            <a data-aos="zoom-in-left" data-aos-delay="650" href="#about" onclick="closeMenu()">About</a>
        </nav>
        <a data-aos="zoom-in-left" data-aos-delay="1000" href="#book-form" class="btn">Get-Tiket</a>
    </header>

    @yield('index')
    @yield('detail_about')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>
</body>

</html>