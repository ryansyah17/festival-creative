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
    <title>Home | BCWF2023</title>
</head>

<body>
    <header class="header">
        <div id="menu-btn" class="fas fa-bars" onclick="toggleMenu()"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">BCWF 2023</a>

        <nav data-aos="zoom-in-left" data-aos-delay="300" class="navbar" onclick="closeMenu()">
            <a data-aos="zoom-in-left" data-aos-delay="450" href="#home" onclick="closeMenu()">Home</a>
            <a data-aos="zoom-in-left" data-aos-delay="1050" href="#lineup" onclick="closeMenu()">lineup</a>
            <a data-aos="zoom-in-left" data-aos-delay="750" href="#event" onclick="closeMenu()">Event</a>
            <a data-aos="zoom-in-left" data-aos-delay="900" href="#venue" onclick="closeMenu()">venue</a>
            <a data-aos="zoom-in-left" data-aos-delay="600" href="#about" onclick="closeMenu()">About</a>
        </nav>

        <a data-aos="zoom-in-left" data-aos-delay="1350" href="#book-form" class="btn">Get-Tiket</a>
    </header>

    @yield('index')
    @yield('detail_about')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>

</body>

</html>