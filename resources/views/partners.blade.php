@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_about">
    <div style="display: inline-block;">
        <div class="_tedx_section_title_overlay">
            <div class="_tedx_section_title_wrapper">
                <div class="_tedx_section_title">
                    <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Partners</h2>
                </div>
                <div class="_tedx_section_text">
                    <h3>Beberapa Pihak yang terlibat</h3>
                    <p>TEDxUniversitasBrawijaya 2021 tahun ini akan membahas bagaimana Pop Culture tidak melulu disajikan dalam bentuk kesenian musik dan lukisan, tapi juga dapat dibagikan melalui bagaimana kolektif manusia mempunyai kebebasan untuk mengekspresikan dirinya melalui Pop Culture dalam bentuk yang simbolis dan konseptual, namun praktis dan dapat dikonsumsi tanpa batas akhir sehingga dapat menarik perhatian banyak orang dari segala ras, tempat tinggal, usia, dan gender.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<section class="_tedx_section _tedx_section_partners" data-scroll-section>
    <div class="_tedx_section_image_partners_container">
        <div class="tedx_section_image_partners_content">
            <img src="{{ asset('img/cocacola.png') }}" alt="">
            <h1>Coca Cola</h1>
            <ul class="a">
                <li><a href="">Sponsor</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Whatsapp</a></li>
            </ul>
        </div>
        <div class="tedx_section_image_partners_content image2">
            <img src="{{ asset('img/cocacola.png') }}" alt="">
            <h1>Coca Cola</h1>
            <ul class="a">
                <li><a href="">Sponsor</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Whatsapp</a></li>
            </ul>
        </div>
    </div>
    <div class="_tedx_section_image_partners_container container2">
        <div class="tedx_section_image_partners_content">
            <img src="{{ asset('img/cocacola.png') }}" alt="">
            <h1>Coca Cola</h1>
            <ul class="a">
                <li><a href="">Suuported By</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Whatsapp</a></li>
            </ul>
        </div>
        <div class="tedx_section_image_partners_content image2">
            <img src="{{ asset('img/cocacola.png') }}" alt="">
            <h1>Coca Cola</h1>
            <ul class="a">
                <li><a href="">Partnership</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Whatsapp</a></li>
            </ul>
        </div>
    </div>
</section>
@endsection