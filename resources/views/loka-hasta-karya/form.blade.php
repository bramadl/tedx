@extends('layouts.home')

@section('page')
<div class="forms">
    @include('layouts.header')

    <section class="Section-Form-LokaKarya">

        <div class="Section-Title">
        <h1>Pendaftaran Loka Hasta Karya</h1>
        <h1><span>TEDx</span>UniversitasBrawijaya 2021</h1>
        </div>

        <div class="Section-Form">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="" id="name" class="text">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="" id="email" class="text">
            </div>
            <div class="form-group">
                <label for="whatsaap">No. Whatsaap</label>
                <input type="number" name="" id="whatsaap" class="text">
            </div>
            <div class="form-group">
                <label for="community">Asal Instansi atau Komunitas</label>
                <input type="text" name="" id="community" class="text">
            </div>
            <div class="form-group">
                <label for="sosial-media">Media Sosial</label>
                <input type="text" name="" id="sosial-media" class="text">
            </div>
            <div class="form-group">
                <p>Bentuk Karya</p>
                <div class="radio-input">
                <input type="radio" name="" id="gambar" value="gambar" class="radio">
                <label for="gambar">Gambar</label>
                </div>
                <div class="radio-input">
                <input type="radio" name="" id="lukisan" value="lukisan" class="radio">
                <label for="lukisan">Lukisan</label>
                </div>
                <div class="radio-input">
                <input type="radio" name="" id="grafis" value="grafis" class="radio">
                <label for="grafis">Grafis</label>
                </div>
                <div class="radio-input">
                <input type="radio" name="digital" id="digital" value="digital" class="radio">
                <label for="digital">Digital</label>
                </div>
            </div>
            <div class="form-group">
                <label for="art-title">Judul Karya</label>
                <input type="text" name="" id="art-title" class="text">
            </div>
            <div class="form-group">
                <label for="art-title">Deskripsi Karya</label>
                <textarea name="" id="art-title" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="art-title">Tahun Pembuatan Karya</label>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">2021</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">2021</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">2021</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">Others</label>
                    <input type="text" class="text">
                </div>
            </div>
            <div class="form-group">
                <p>File Karya (dengan format Nama peserta_Asal Instansi atau Komunitas) </p>
                <input type="file" name="" id="file" class="file">
            </div>
            <div class="form-group">
                <label for="">Dari manakah kamu mengetahui agenda ini?</label>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">Instagram TEDxUniversitasBrawijaya</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">Website TEDxUniversitasBrawijaya</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="" id="" class="radio">
                    <label for="">Twitter TEDxUniversitasBrawijaya</label>
                </div>
            </div>
            <div class="buttonLokaWrapper">
            <button type="submit" class="buttonLoka">Submit</button>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</div>
@endsection