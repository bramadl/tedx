<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Title -->
    <title>TEDxUniversitasBrawijaya</title>

    <!-- Google Fonts: Open Sans & Playfair Display -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Locomotive Scroll CSS -->
    <link rel="stylesheet" href="https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.css" />
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="cursor"><div class="cursor__circle"></div></div>
    <div class="_tedx" data-scroll-container>
        <div class="_tedx_header_wrapper" data-scroll-section>
            @include('layouts.partials.navigation')
            <div class="_tedx_hero_wrapper">
                @yield('hero')
            </div>
        </div>
        @yield('content')
        @include('layouts.partials.footer')
    </div>

    <!-- GSAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" integrity="sha512-Q+G390ZU2qKo+e4q+kVcJknwfGjKJOdyu5mVMcR95NqL6XaF4lY4nsSvIVB3NDP54ACsS9rqhE1DVqgpApl//Q==" crossorigin="anonymous"></script>
    <!-- Locomotive Scroll JS -->
    <script src="https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>