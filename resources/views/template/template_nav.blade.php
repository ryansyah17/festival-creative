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
    <title>BCWF2023</title>
</head>

<body>
    <header class="header">
        <a href="/" data-aos="zoom-in-left"><i class="fas fa-angle-left"> BACK</i></a>
        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">BCWF 2023</a>
        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"></a>
    </header>

    @yield('detail_about')
    @yield('detail_lineup')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>
    <script src="assets/js/script.js" defer></script>
</body>

</html>