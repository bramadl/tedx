@extends('layouts.master')

@section('hero')
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
      <a href="#" cursor-class="hover">Beli Tiket</a>
    </div>
  </div>
</div>

<div class="_tedx_hero_asset">
  <div class="_tedx_hero_asset_container">
    <img src="{{ asset('img/illustrations/main-asset.png') }}" alt="TEDxUB2021">
  </div>
  <svg class="close" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g opacity="0.75">
      <path d="M25.9259 0L100 74.0741L74.0741 100L2.07675e-05 25.9259L25.9259 0Z" fill="#B82B2B" />
      <path d="M74.0741 0L0 74.0741L25.9259 100L100 25.9259L74.0741 0Z" fill="#B82B2B" />
    </g>
  </svg>
  <div class="line-container">
    <svg class="line" width="1" height="150" viewBox="0 0 1 150" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line opacity="0.5" x1="0.5" y1="2.18557e-08" x2="0.499993" y2="150" stroke="white" />
    </svg>
    <div class="text">
      May 30, 2021
    </div>
  </div>
</div>

<div class="_tedx_hero_icons">
  <a href="#" cursor-class="hover"><i class="fab fa-twitter"></i></a>
  <a href="#" cursor-class="hover"><i class="fab fa-instagram"></i></a>
  <a href="#" cursor-class="hover"><i class="fab fa-line"></i></a>
</div>
@endsection

@section('content')
<section class="_tedx_section _tedx_section_about" data-scroll-section>
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
      <div class="_tedx_link" cursor-class="hover"><a href="#">About TED</a></div>
      <div class="_tedx_link" cursor-class="hover"><a href="#">About TEDxUniversitasBrawijaya</a></div>
      <div class="_tedx_link" cursor-class="hover"><a href="#">About TEDx</a></div>
    </div>
  </div>
</section>

<!-- Video Teaser -->
<div id="videoTeaser" style="margin: 150px 0;" data-scroll-section>
  <div class="_tedx_video_teaser">
    <div class="_tedx_video_mask">
      <div class="_tedx_video_text">
        <h1><span>TEDx</span>UniversitasBrawijaya</h1>
        <h2>Teaser Video</h2>
        <button cursor-class="hover">Play Video</button>
      </div>
    </div>
  </div>
</div>
<!-- ./Video Teaser -->

<section class="_tedx_section _tedx_section_speakers" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Speakers</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>Tema: Manifestasi Peradaban</h3>
        <p>TEDxUniversitasBrawijaya 2021 tahun ini akan membahas bagaimana Pop Culture tidak melulu disajikan dalam bentuk kesenian musik dan lukisan, tapi juga dapat dibagikan melalui bagaimana kolektif manusia mempunyai kebebasan untuk mengekspresikan dirinya melalui Pop Culture dalam bentuk yang simbolis dan konseptual, namun praktis dan dapat dikonsumsi tanpa batas akhir sehingga dapat menarik perhatian banyak orang dari segala ras, tempat tinggal, usia, dan gender.</p>
      </div>
    </div>
  </div>
</section>

<!-- Speaker List -->
<div id="speakerList" style="margin: 150px 0;" data-scroll-section>
  <div class="_tedx_speaker_container">
    <div class="_tedx_speaker_profile">
      <div class="_tedx_speaker_image reveal">
        <img src="https://images.unsplash.com/photo-1516726817505-f5ed825624d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80">
        <div class="_tedx_speaker_title">
          <div>
            <h1>Peran Acting Di Dunia Industri</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="separator"></div>
    <div class="_tedx_speaker_wrapper">
      <div class="_tedx_speaker_list">
        <div class="_tedx_speaker_avatar" data-target="angelina_jolie" cursor-class="speaker">
          <img src="https://images.unsplash.com/photo-1516726817505-f5ed825624d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80">
          <div class="_tedx_speaker_info">
            <h1>Angelina Jolie</h1>
            <p>Actor</p>
          </div>
        </div>
        <div class="_tedx_speaker_avatar" data-target="karen_elina" cursor-class="speaker">
          <img src="https://images.unsplash.com/photo-1503104834685-7205e8607eb9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80">
          <div class="_tedx_speaker_info">
            <h1>Karen Elina</h1>
            <p>Writer / Novelist</p>
          </div>
        </div>
        <div class="_tedx_speaker_avatar" data-target="jane_wong" style="border-bottom: 0;" cursor-class="speaker">
          <img src="https://images.unsplash.com/photo-1526413232644-8a40f03cc03b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80%20634w">
          <div class="_tedx_speaker_info">
            <h1>Jane Wong</h1>
            <p>Beauty Guru</p>
          </div>
        </div>
      </div>
      <div class="_tedx_link">
        <a href="#">Read More About The Timelines</a>
      </div>
    </div>
  </div>
</div>
<!-- ./Speaker List -->

<section class="_tedx_section _tedx_section_anima" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Anima</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>[an-nuh-mah]: Latin - JIWA</h3>
        <p>Dalam kehidupan kita dengan masyarakat kolektif, tentunya kita memiliki pribadi yang berbeda untuk kita tunjukkan kepada dunia luar. Dalam upaya kita untuk terkoneksi dengan satu sama lain, kita membentuk sebuah persona, identitas, sebuah jiwa yang merepresentasikan siapa diri kita ditengah arus masyarakat. Lalu dalam dunia populer ini siapakah kamu?</p>
      </div>
    </div>
  </div>
</section>

<!-- Anima Archetype -->
<div id="animaArchetype" style="margin: 0 0 150px;" data-scroll-section>
  <div class="_tedx_archetype">
    <div id="drag-container" cursor-class="drag">
      <div id="spin-container">
        <!-- Add your images (or video) here -->
        <img src="https://images.unsplash.com/photo-1579762715118-a6f1d4b934f1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=931&q=80" data-archetype="dreamer" cursor-class="dreamer" />
        <img src="https://images.unsplash.com/photo-1575995872537-3793d29d972c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=965&q=80" data-archetype="lover" cursor-class="lover" />
        <img src="https://images.unsplash.com/photo-1578924824780-b7c49930e310?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=935&q=80" data-archetype="hero" cursor-class="hero" />
        <img src="https://images.unsplash.com/photo-1582201942961-2e1c3e63d9b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=911&q=80" data-archetype="jester" cursor-class="jester" />

        <!-- Text at center of ground -->
        <div id="archetypeText" class="text">
          <h2>Klik dan tahan lalu geser mouse untuk memutar kartu dan klik pada salah satu kartu untuk membaca Archetype</h2>
        </div>
      </div>
      <div id="ground"></div>
    </div>
  </div>
</div>
<!-- ./Anima Archetype -->

<section class="_tedx_section _tedx_section_ticket" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Ticket</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>PRESALE TICKETS</h3>
        <p>Pembelian tiket hanya diberlakukan pre-sale dan dapat dilakukan pada tanggal 11 - 17 Mei 2021 untuk pre-sale pertama kemudian pre-sale kedua dimulai pada tanggal 18 - 24 Mei 2021. Untuk melakukan pembelian, pastikan kamu sudah melakukan registrasi akun sebelumnya ya.</p>
      </div>
    </div>
  </div>
</section>

<!-- Ticket Purchase -->
<div id="ticketPurchase" style="margin: 150px 0;" data-scroll-section>
  <div class="_tedx_ticket_container">
    <div class="_tedx_ticket">
      <div class="_tedx_ticket_left">
        <div class="_tedx_ticket_logo">
          <img src="{{ asset('img/tedx.png') }}">
        </div>
        <div class="_tedx_ticket_title">
          <h2>Manifestasi Peradaban</h2>
          <div>
            <span>Senin, 30 Mei 2021</span>
            <span class="dot"></span>
            <span>12:00 WIB</span>
          </div>
        </div>
        <div class="_tedx_ticket_token">
          <span>A2XX XXXX XXXX XXA2</span>
        </div>
      </div>
      <div class="_tedx_ticket_right">
        <svg viewBox="0 0 386 400" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" d="M0.206634 399.609L110.914 199.915L0.0834961 0H162.246L191.995 53.6622L221.745 0H371.999C375.772 0 385.464 0 385.464 0L273.076 199.915L385.311 399.609C385.311 399.609 375.732 399.609 371.999 399.609H221.622L191.995 346.168L162.369 399.609H0.206634Z" fill="#B82B2B" />
          <line x1="1" y1="-1" x2="198.851" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 14 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="88.9328" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 371.473 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 353 344.662)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 193.242 347.659)" stroke="white" stroke-width="2" stroke-linecap="round" />
        </svg>
      </div>
    </div>
    <div class="_tedx_ticket_detail" style="padding-left: 50px;">
      <div class="_tedx_ticket_description">
        <div>
          <h3><span>Ticket</span> Presale 1</h3>
        </div>
        <div>
          <p>Pembelian hanya berlaku pada tanggal <br> <span>11 - 17 Mei 2021</span></p>
        </div>
        <div>
          <p>Mohon pastikan kamu sudah membaca syarat dan ketentuan pembelian tiket sebelum melakukan pembelian</p>
        </div>
        <div>
          <a href="#" cursor-class="hover">Syarat dan Ketentuan</a>
        </div>
      </div>
      <div class="_tedx_ticket_button">
        <button cursor-class="hover">
          <span>Beli Tiket</span>
          <strong>Rp 85.000</strong>
        </button>
      </div>
    </div>
  </div>

  <div class="_tedx_ticket_container" style="margin-top: 150px;">
    <div class="_tedx_ticket_detail" style="padding-right: 50px;">
      <div class="_tedx_ticket_description">
        <div>
          <h3><span>Ticket</span> Presale 1</h3>
        </div>
        <div>
          <p>Pembelian hanya berlaku pada tanggal <br> <span>18 - 24 Mei 2021</span></p>
        </div>
        <div>
          <p>Mohon pastikan kamu sudah membaca syarat dan ketentuan pembelian tiket sebelum melakukan pembelian</p>
        </div>
        <div>
          <a href="#" cursor-class="hover">Syarat dan Ketentuan</a>
        </div>
      </div>
      <div class="_tedx_ticket_button">
        <button cursor-class="hover">
          <span>Beli Tiket</span>
          <strong>Rp 85.000</strong>
        </button>
      </div>
    </div>
    <div class="_tedx_ticket">
      <div class="_tedx_ticket_left">
        <div class="_tedx_ticket_logo">
          <img src="{{ asset('img/tedx.png') }}">
        </div>
        <div class="_tedx_ticket_title">
          <h2>Manifestasi Peradaban</h2>
          <div>
            <span>Senin, 30 Mei 2021</span>
            <span class="dot"></span>
            <span>12:00 WIB</span>
          </div>
        </div>
        <div class="_tedx_ticket_token">
          <span>A2XX XXXX XXXX XXA2</span>
        </div>
      </div>
      <div class="_tedx_ticket_right">
        <svg viewBox="0 0 386 400" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" d="M0.206634 399.609L110.914 199.915L0.0834961 0H162.246L191.995 53.6622L221.745 0H371.999C375.772 0 385.464 0 385.464 0L273.076 199.915L385.311 399.609C385.311 399.609 375.732 399.609 371.999 399.609H221.622L191.995 346.168L162.369 399.609H0.206634Z" fill="#B82B2B" />
          <line x1="1" y1="-1" x2="198.851" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 14 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="88.9328" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 371.473 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 353 344.662)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 193.242 347.659)" stroke="white" stroke-width="2" stroke-linecap="round" />
        </svg>
      </div>
    </div>
  </div>
</div>
<!-- ./Ticket Purchase -->
@endsection