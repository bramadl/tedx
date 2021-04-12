@extends('layouts.home')

@section('page')
<div class="Landing">
    @include('layouts.header')

    <section class="Section Section--Elaborasi">
        <div class="Elaborasi-Background">
            <img src="/img/backgrounds/yellowbg.png">
        </div>

        <main class="Elaborasi-Section">
            <h2 class="Section-Title">
                Gerai Sorai
            </h2>
            <p class="Section-Text">
                Keinginan kami untuk terkoneksi denganmu kami wujudkan dalam Gerai Sorai. Ramaikan perayaan ini dengan membeli Merchandise TEDxUniversitasBrawijaya!
            </p>
            <a href="http://localhost:8000" class="Section-Link">
                Beli Sekarang
            </a>
        </main>

        <img src="/img/backgrounds/figure.png" alt="" class="Elaborasi-Deco" data-scroll data-scroll-speed="2">
    </section>

    @include('layouts.footer')
</div>
@endsection