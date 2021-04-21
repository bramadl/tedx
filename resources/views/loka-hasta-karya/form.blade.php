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
            <form action="">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="" id="name">
            </form>
            <form action="">
            <label for="name">Email</label>
            <input type="text" name="" id="name">
            </form>
            <form action="">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="" id="name">
            </form>
            <form action="">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="" id="name">
            </form>
        </div>
    </section>

    @include('layouts.footer')
</div>
@endsection