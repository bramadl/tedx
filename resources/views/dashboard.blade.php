@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_about dashboard">
    <div style="display: inline-block;">
        <div class="_tedx_section_title_overlay dashboard">
            <div class="_tedx_section_title_wrapper">
                <div class="_tedx_section_title dashboard">
                    <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="_tedx_dashboard_user">
            <div>
                <p class="_tedx_link">Hello, Lorem Ipsum!</p>
            </div>
            <div>
                <a href="" class="_tedx_link">Logout Account</a>
            </div>
        </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<div data-scroll-section>
<div class="_tedx_dashboard_content_container">
    <!-- STATUS USER -->
    <div class="_tedx_dashboard_status_wrapper">
        <div class="_tedx_dashboard_status_caption">
            <h2><span>TEDx</span>UniversitasBrawijaya2021</h2>
            <p>Manifestasi Peradaban</p>
        </div>
        <div class="_tedx_dashboard_status_button">
            <div class="_tedx_dashboard_status_audiens">
                <p>Status: Audiens</p>
                <p>Confirmed</p>
            </div>
        </div>
    </div>
    <!-- END STATUS USER -->

    <!-- USER CARD FEATURES -->
    <div class="_tedx_dashboard_card_features_wrapper">
        <div class="_tedx_dashboard_card_feature">
            <div class="_tedx_card_feature_title">
                <i class="fas fa-desktop"></i>
                <h2>Virtual Art Exhibition</h2>
            </div>
            <div class="_tedx_card_feature_caption">
                <p>Kunjungi pameran karya terbaik dari Loka Hasta Karya dengan pengalaman virtual.</p>
            </div>
            <a href="" class="_tedx_link card">Kunjungi Pameran</a>
        </div>
        <div class="_tedx_dashboard_card_feature">
            <div class="_tedx_card_feature_title">
                <i class="fas fa-ticket-alt"></i>
                <h2>Pembelian Tiket</h2>
            </div>
            <div class="_tedx_card_feature_caption">
                <p>Lihat invoice, status pembelian, dan history dari pembelian tiket di akun kamu.</p>
            </div>
            <a href="" class="_tedx_link card">Lihat Tiket</a>
        </div>
        <div class="_tedx_dashboard_card_feature">
            <div class="_tedx_card_feature_title">
                <i class="fas fa-video"></i>
                <h2>Livestream Channel</h2>
            </div>
            <div class="_tedx_card_feature_caption">
                <p>Kunjungi pameran karya terbaik dari Loka Hasta Karya dengan pengalaman virtual.</p>
            </div>
            <a href="" class="_tedx_link card">Masuk Livestream</a>
        </div>
        <div class="_tedx_dashboard_card_feature">
            <div class="_tedx_card_feature_title">
                <i class="fas fa-calendar-alt"></i>
                <h2>Jadwal Kegiatan</h2>
            </div>
            <div class="_tedx_card_feature_caption">
                <p>Urutan kegiatan pelaksanaan puncak acara pada sesi livestream TEDxUniversitasBrawijaya2021.</p>
            </div>
            <a href="" class="_tedx_link card">Unduh Jadwal</a>
        </div>
        <div class="_tedx_dashboard_card_feature">
            <div class="_tedx_card_feature_title">
                <i class="fas fa-sync"></i>
                <h2>Permintaan Token</h2>
            </div>
            <div class="_tedx_card_feature_caption">
                <p>Membuat permintaan untuk refresh token yang telah terpakai sesuai dengan syarat dan kondisi.</p>
            </div>
            <a href="" class="_tedx_link card">Buat Permintaan</a>
        </div>
        <div class="_tedx_dashboard_card_feature">
            <div class="_tedx_card_feature_title">
                <i class="fas fa-user"></i>
                <h2>Kelola Akun</h2>
            </div>
            <div class="_tedx_card_feature_caption">
                <p>Lihat detail akun dan status akun kamu serta ubah password jika diperlukan.</p>
            </div>
            <a href="" class="_tedx_link card">Kelola Akun</a>
        </div>
    </div>
    <!-- END USER CARD FEATURES -->
</div>
</div>
@endsection