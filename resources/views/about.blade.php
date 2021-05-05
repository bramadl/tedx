@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_about">
  <div style="display: inline-block;">
    <div class="_tedx_section_title_overlay">
      <div class="_tedx_section_title_wrapper">
        <div class="_tedx_section_title">
          <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">About</h2>
        </div>
        <div class="_tedx_section_text">
          <h3>Tema: Manifestasi Peradaban</h3>
          <p>TEDxUniversitasBrawijaya 2021 tahun ini akan membahas bagaimana Pop Culture tidak melulu disajikan dalam bentuk kesenian musik dan lukisan, tapi juga dapat dibagikan melalui bagaimana kolektif manusia mempunyai kebebasan untuk mengekspresikan dirinya melalui Pop Culture dalam bentuk yang simbolis dan konseptual, namun praktis dan dapat dikonsumsi tanpa batas akhir sehingga dapat menarik perhatian banyak orang dari segala ras, tempat tinggal, usia, dan gender.</p>
        </div>
      </div>
    </div>
    <div class="_tedx_section_about_cta">
      <div class="_tedx_link" cursor-class="hover"><a href="{{ url('/about#ted') }}">About TED</a></div>
      <div class="_tedx_link" cursor-class="hover"><a href="{{ url('/about') }}">About TEDxUniversitasBrawijaya</a></div>
      <div class="_tedx_link" cursor-class="hover"><a href="{{ url('/about#tedx') }}">About TEDx</a></div>
    </div>
  </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<div id="ted" style="margin: 200px 0;" data-scroll-section>
  <div class="_tedx_about_ted_wrapper">
    <div class="_tedx_about_ted_content">
      <div class="_tedx_title">
        <h2>About Ted</h2>
      </div>
      <div class="_tedx_text">
        <p>TED is a nonprofit devoted to spreading ideas, usually in the form of short, powerful talks (18 minutes or less). TED began in 1984 as a conference where Technology, Entertainment and Design converged, and today covers almost all topics — from science to business to global issues — in more than 100 languages. Meanwhile, independently run TEDx events help share ideas in communities around the world.</p>
      </div>
    </div>
    <div class="_tedx_about_ted_image">

    </div>
  </div>
</div>
@endsection