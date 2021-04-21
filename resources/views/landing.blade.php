@extends('layouts.home')

@section('page')
<div class="Landing">
    @include('layouts.header')

    <section class="Section Section--LokaKarya">

        <main class="LokaKarya-Section">
            <h2 class="Section-Title">
                Loka Hasta Karya
            </h2>
            <p class="Section-Text">
            Loka Hasta Karya hadir sebagai wadah apresiasi bagi setiap bagian dari kita yang ingin berkontribusi dalam Manifestasi Peradaban melalui karya-karya terbaik yang akan ditampilkan pada penyelenggaraan eksibisi Main Event TEDxUniversitasBrawijaya 2021. Kami mengajakmu berpartisipasi dalam Loka Hasta Karya dengan cara memberikan karya-karya terbaikmu di sini!
            </p>
            <a href="{{ url('/loka-hasta-karya/registrasi') }}" class="Section-Link">Registrasi</a>
            <a href="" class="Section-Link">Guideline</a>
        </main>
    </section>

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
            <a href="https://app.tedxuniversitasbrawijaya.com" class="Section-Link">
                Beli Sekarang
            </a>
        </main>


        <img src="/img/backgrounds/figure.png" alt="" class="Elaborasi-Deco" data-scroll data-scroll-speed="2">
    </section>

    @include('layouts.footer')
</div>
@endsection