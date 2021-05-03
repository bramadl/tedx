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
    <link rel="stylesheet" href="https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.css"/>
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="_tedx" data-scroll-container>
        <div class="_tedx_header_wrapper" data-scroll-section>
            <div class="_tedx_navigation_wrapper">
                <div class="_tedx_logo_container">
                    <img src="{{ asset('img/tedx.png') }}" alt="TEDxUniversitasBrawijaya2021">
                </div>
                <div class="_tedx_menu_container">
                    <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.5" y1="0.5" x2="15.5" y2="0.5" stroke="white" stroke-linecap="round"/>
                        <line x1="0.5" y1="8.5" x2="15.5" y2="8.5" stroke="white" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>

            <div class="_tedx_hero_wrapper">
                <div class="_tedx_hero_title">
                    <div class="_tedx_hero_title_container">
                        <div class="_tedx_title">
                            <h1>
                                <p><span>Manifestasi</span></p>
                                <br>
                                <p><span>Peradaban</span></p>
                                <div class="background"></div>
                            </h1>
                        </div>
                        <div class="_tedx_subtitle">
                            <h2>Membicarakan yang dibicarakan manusia</h2>
                        </div>
                        <div class="_tedx_register_cta">
                            <a href="#">Beli Tiket</a>
                        </div>
                    </div>
                </div>

                <div class="_tedx_hero_asset">
                    <div class="_tedx_hero_asset_container">
                        <img src="{{ asset('img/illustrations/main-asset.png') }}" alt="TEDxUB2021">
                    </div>
                    <svg class="close" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.75">
                        <path d="M25.9259 0L100 74.0741L74.0741 100L2.07675e-05 25.9259L25.9259 0Z" fill="#B82B2B"/>
                        <path d="M74.0741 0L0 74.0741L25.9259 100L100 25.9259L74.0741 0Z" fill="#B82B2B"/>
                        </g>
                    </svg>
                    <div class="line-container">
                        <svg class="line" width="1" height="150" viewBox="0 0 1 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line opacity="0.5" x1="0.5" y1="2.18557e-08" x2="0.499993" y2="150" stroke="white"/>
                        </svg>
                        <div class="text">
                            May 30, 2021
                        </div>
                    </div>
                </div>

                <div class="_tedx_hero_icons">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-line"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <section class="_tedx_about_section" data-scroll-section>
            <div class="_tedx_about_section_container">
                <div class="_tedx_about_wrapper">
                    <div class="_tedx_title_overlay">
                        <div class="_tedx_title_wrapper">
                            <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">
                            About
                            </h2>
                        </div>
                        <div class="_tedx_title_text">
                            <h3>Tema: Manifestasi Peradaban</h3>
                            <p>TEDxUniversitasBrawijaya 2021 tahun ini akan membahas bagaimana Pop Culture tidak melulu disajikan dalam bentuk kesenian musik dan lukisan, tapi juga dapat dibagikan melalui bagaimana kolektif manusia mempunyai kebebasan untuk mengekspresikan dirinya melalui Pop Culture dalam bentuk yang simbolis dan konseptual, namun praktis dan dapat dikonsumsi tanpa batas akhir sehingga dapat menarik perhatian banyak orang dari segala ras, tempat tinggal, usia, dan gender.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- GSAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
    <!-- Locomotive Scroll JS -->
    <script src="https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>