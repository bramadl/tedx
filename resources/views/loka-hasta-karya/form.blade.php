@extends('layouts.home')

@section('page')
<div class="forms">
    @include('layouts.header')

    <section class="Section-Form-LokaKarya">

        <div class="Section-Title">
            <h1>Pendaftaran Loka Hasta Karya</h1>
            <h1><span>TEDx</span>UniversitasBrawijaya 2021</h1>
        </div>

        <form id="form-loka-hasta-karya" class="Section-Form">
            <div>
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="name">
            </div>
            <div>
                <label for="name">Email</label>
                <input type="text" name="" id="name">
            </div>
            <div>
                <label for="name">Nama Lengkap</label>
                <input type="text" name="" id="name">
            </div>
            <div>
                <label for="name">Nama Lengkap</label>
                <input type="text" name="" id="name">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>

    @include('layouts.footer')
</div>
@endsection

@push('scripts')
<script>
    const url = 'http://127.0.0.1:8001/api/loka-hasta-karya'
    const form = document.getElementById('form-loka-hasta-karya')

    const getValueFrom = (element) => {
        let target = document.querySelector(`[name=${element}]`)
        if (!target) return null
        
        let value = target.value
        return value
    }

    const formData = {
        nama_lengkap: getValueFrom('nama_lengkap'),
        nomor_wa: getValueFrom('nomor_wa'),
        instansi_komunitas: getValueFrom('instansi_komunitas'),
        media_sosial: getValueFrom('media_sosial'),
        bentuk_karya: getValueFrom('bentuk_karya'),
        judul_karya: getValueFrom('judul_karya'),
        deskripsi_karya: getValueFrom('deskripsi_karya'),
        tahun_pembuatan_karya: getValueFrom('tahun_pembuatan_karya'),
        file_karya: getValueFrom('file_karya'),
        sumber_informasi: getValueFrom('sumber_informasi'),
    }

    const displayErrorFor = (element, text) => {
        let target = document.querySelector(`[name=${element}]`)
        if (!target) return

        const p = document.createElement('p')
        p.textContent = text
        p.style.color = 'red'
        p.style.fontSize = '12px'
        p.style.fontStyle = 'italic'

        target.parentElement.appendChild(p)
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.errors) {
                const {
                    nama_lengkap,
                    nomor_wa,
                    instansi_komunitas,
                    media_sosial,
                    bentuk_karya,
                    judul_karya,
                    deskripsi_karya,
                    tahun_pembuatan_karya,
                    file_karya,
                    sumber_informasi,
                } = data.errors

                displayErrorFor('nama_lengkap', nama_lengkap)
            }
        })
        .catch(error => {
            console.log('Lah', error);
        })
    })
</script>
@endpush