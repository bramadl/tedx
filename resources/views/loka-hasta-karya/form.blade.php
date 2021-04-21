@extends('layouts.home')

@section('page')
<div class="forms">
    @include('layouts.header')

    <section class="Section-Form-LokaKarya" style="margin-bottom: 3rem;">

        <div class="Section-Title">
            <h1>Pendaftaran Loka Hasta Karya</h1>
            <h1><span>TEDx</span>UniversitasBrawijaya 2021</h1>
        </div>
        <form id="form-loka-hasta-karya" class="Section-Form" enctype="multipart/form-data">
            <div class="form-group" data-name="nama_lengkap">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="name" class="text">
            </div>
            <div class="form-group" data-name="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="text">
            </div>
            <div class="form-group" data-name="nomor_wa">
                <label for="whatsaap">No. Whatsaap</label>
                <input type="number" name="nomor_wa" id="whatsaap" class="text">
            </div>
            <div class="form-group" data-name="instansi_komunitas">
                <label for="community">Asal Instansi atau Komunitas</label>
                <input type="text" name="instansi_komunitas" id="community" class="text">
            </div>
            <div class="form-group" data-name="media_sosial">
                <label for="sosial-media">Media Sosial</label>
                <input type="text" name="media_sosial" id="sosial-media" class="text">
            </div>
            <div class="form-group" data-name="bentuk_karya">
                <label>Bentuk Karya</label>
                <div class="radio-input">
                    <input type="radio" name="bentuk_karya" id="gambar" value="gambar" class="radio">
                    <label for="gambar">Gambar</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="bentuk_karya" id="lukisan" value="lukisan" class="radio">
                    <label for="lukisan">Lukisan</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="bentuk_karya" id="grafis" value="grafis" class="radio">
                    <label for="grafis">Grafis</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="bentuk_karya" id="digital" value="digital" class="radio">
                    <label for="digital">Digital</label>
                </div>
            </div>
            <div class="form-group" data-name="judul_karya">
                <label for="art-title">Judul Karya</label>
                <input type="text" name="judul_karya" id="art-title" class="text">
            </div>
            <div class="form-group" data-name="deskripsi_karya">
                <label for="art-title">Deskripsi Karya</label>
                <textarea name="deskripsi_karya" id="art-title" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group" data-name="tahun_pembuatan_karya">
                <label for="art-title">Tahun Pembuatan Karya</label>
                <div class="radio-input">
                    <input type="radio" name="tahun_pembuatan_karya" id="2021" value="2021" class="radio">
                    <label for="2021">2021</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="tahun_pembuatan_karya" id="2020" value="2020" class="radio">
                    <label for="2020">2020</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="tahun_pembuatan_karya" id="2019" value="2019" class="radio">
                    <label for="2019">2019</label>
                </div>
                <div class="radio-input">
                    <label for="other">Others</label>
                    <input type="text" name="tahun_pembuatan_karya" id="other" value="other" class="text">
                </div>
            </div>
            <div class="form-group" data-name="file_karya">
                <label>File Karya (dengan format Nama peserta_Asal Instansi atau Komunitas dalam .PDF!)</label>
                <br>
                <input type="file" name="file_karya" id="file" class="file">
            </div>
            <div class="form-group" data-name="sumber_informasi">
                <label for="">Dari manakah kamu mengetahui agenda ini?</label>
                <div class="radio-input">
                    <input type="radio" name="sumber_informasi" id="Instagram" value="Instagram" class="radio">
                    <label for="Instagram">Instagram TEDxUniversitasBrawijaya</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="sumber_informasi" id="Website" value="Website" class="radio">
                    <label for="Website">Website TEDxUniversitasBrawijaya</label>
                </div>
                <div class="radio-input">
                    <input type="radio" name="sumber_informasi" id="Twitter" value="Twitter" class="radio">
                    <label for="Twitter">Twitter TEDxUniversitasBrawijaya</label>
                </div>
            </div>
            <div class="buttonLokaWrapper">
                <button type="submit" class="buttonLoka">Submit</button>
            </div>
        </form>
    </section>

    @include('layouts.footer')
</div>
@endsection

@push('scripts')
<script>
    const url = 'https://admin.tedxuniversitasbrawijaya.com/api/loka-hasta-karya'
    const form = document.getElementById('form-loka-hasta-karya')

    const getValueFrom = (element) => {
        let target = document.querySelector(`[name=${element}]`)
        if (!target) return null

        let value = target.value
        return value
    }

    const getFileFrom = (element, cb) => {
        let target = document.querySelector(`[name=${element}]`)
        if (!target) return null

        const file = target.files[0]
        const fileReader = new FileReader()

        let result

        fileReader.onloadend = function() {
            return cb(this.result)
        }

        fileReader.readAsDataURL(file)
    }

    const displayErrorFor = (element, text) => {
        let target = document.querySelector(`[data-name=${element}]`)
        if (!target) return

        const p = document.createElement('p')
        p.textContent = text
        p.style.color = 'red'
        p.style.fontSize = '12px'
        p.style.fontStyle = 'italic'
        p.style.marginTop = '.5rem'

        target.appendChild(p)
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault()

        let fileKarya = null
        getFileFrom('file_karya', function(result) {
            fileKarya = result

            const formData = new FormData()
            formData.append('nama_lengkap', getValueFrom('nama_lengkap'))
            formData.append('email', getValueFrom('email'))
            formData.append('nomor_wa', getValueFrom('nomor_wa'))
            formData.append('instansi_komunitas', getValueFrom('instansi_komunitas'))
            formData.append('media_sosial', getValueFrom('media_sosial'))
            formData.append('bentuk_karya', getValueFrom('bentuk_karya'))
            formData.append('judul_karya', getValueFrom('judul_karya'))
            formData.append('deskripsi_karya', getValueFrom('deskripsi_karya'))
            formData.append('tahun_pembuatan_karya', getValueFrom('tahun_pembuatan_karya'))
            formData.append('file_karya', fileKarya)
            formData.append('sumber_informasi', getValueFrom('sumber_informasi'))

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                    },
                    body: formData
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
                        displayErrorFor('email', email)
                        displayErrorFor('nomor_wa', nomor_wa)
                        displayErrorFor('instansi_komunitas', instansi_komunitas)
                        displayErrorFor('media_sosial', media_sosial)
                        displayErrorFor('bentuk_karya', bentuk_karya)
                        displayErrorFor('judul_karya', judul_karya)
                        displayErrorFor('deskripsi_karya', deskripsi_karya)
                        displayErrorFor('tahun_pembuatan_karya', tahun_pembuatan_karya)
                        displayErrorFor('file_karya', file_karya)
                        displayErrorFor('sumber_informasi', sumber_informasi)
                    }

                    if (data.success) {
                        Swal.fire({
                            title: 'File kamu telah kami simpan!',
                            text: "Kami akan menghubungi melalui Email. Mohon menunggu informasi berikutnya!",
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Lanjutkan!',
                            cancelButtonText: 'Tutup!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Terima kasih!',
                                    'Jangan lupa untuk datang di main event!',
                                    'success'
                                )
                            }
                            setTimeout(() => {
                                location.href = '/'
                            }, 2000)
                        })
                    }
                })
                .catch(error => {
                    console.log('Lah', error);
                })
        })
    })
</script>
@endpush