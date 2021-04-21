@extends('layouts.home')

@section('page')
<div class="guideline">
    @include('layouts.header')
    <section class="Section Section-Guideline">
        <div class="section-header">
            <div class="section-guideline-title">
                <h2>Guideline Open Submission</h2>
                <h2><span>TEDx</span>UniversitasBrawijaya 2021: <span>LOKA HASTA KARYA</span></h2>
            </div>
            <div class="section-guideline-content">
                <p>Manusia memiliki tempat tersendiri untuk meluapkan pikiran dan apa yang sedang dibayangkan. Tanpa batas, mereka dapat menciptakan karya menjadi suatu bentuk manifestasi ekspresi. Dalam proses terciptanya sebuah karya, koneksi antar-manusia saling terbentuk, melebur, dan bersatu. Bersifat konseptual, simbolis, dan praktis, sebuah karya selalu dapat dikonsumsi oleh setiap manusia, tanpa terkecuali.</p><br>
                <p>Loka Hasta Karya hadir sebagai wadah apresiasi bagi setiap bagian dari kita yang ingin berkontribusi dalam Manifestasi Peradaban melalui karya-karya terbaik yang akan ditampilkan pada penyelenggaraan eksibisi Main Event TEDxUniversitasBrawijaya 2021. Kami mengajakmu berpartisipasi dalam Loka Hasta Karya dengan cara memberikan karya-karya terbaikmu di sini!</p>
            </div>
            <div class="registrasi-periode-guideline">
                <h2>Periode Pendaftaran</h2>
                <h2>21 April - 4 Mei 2021 pukul 23.59 WIB.</h2>
            </div>
        </div>
        <div class="terms-conditions">
            <h2>Syarat dan Ketentuan</h2>
            <ol>
                <li>Karya yang diajukan merupakan hasil orisinil cipta asli peserta.</li><br>
                <li>Karya mengusung tema “Konektivitas”<br>Kamu dapat membuat sebuah karya dalam bentuk gambar, lukisan, grafis, baik manual maupun digital, dengan tema konektivitas yang dapat diinterpretasikan sesuai dengan apa yang pernah kamu alami atau yang terjadi di sekitarmu. Konektivitas dapat diartikan sebagai sebuah hubungan yang saling berkaitan antara satu dengan yang lainnya. Karya ini akan menjadi produk berisi pesan yang ingin kamu sampaikan atau rasakan ketika berada dalam lingkup koneksi. Kamu dapat mengekspresikan bentuk konektivitas dalam dirimu dengan lingkungan sekitar, orang terdekat, benda, suasana, memori terdahulu, tempat, atau bahkan dengan dirimu sendiri. Tiada batasan mengenai makna sebuah koneksi, karena kami ingin membagikan makna koneksi yang dapat diinterpretasikan dengan imajinasi liar oleh setiap orang.</li><br>
                <li>Karya berupa dua dimensi dan dapat berupa gambar, lukisan, grafis, dan digital.</li><br>
                <li>Tidak mengandung unsur SARA dan/atau Pornografi.</li><br>
                <li>Karya yang dibuat tidak memiliki maksud untuk merendahkan atau menjatuhkan pihak manapun.</li><br>
                <li>Apabila karya ditemukan tidak orisinil, maka TEDxUniversitasBrawijaya berhak meminta pertanggungjawaban dari peserta.</li><br>
                <li>Setiap peserta dapat mengajukan satu karya terbaiknya.</li><br>
                <li>TEDxUniversitasBrawijaya akan memberikan credit terhadap karya yang telah diajukan.</li><br>
                <li>TEDxUniversitasBrawijaya akan melakukan kurasi terhadap karya yang telah diajukan sesuai dengan guidelines yang tertera.</li><br>
                <li>TEDxUniversitasBrawijaya memiliki hak untuk mempublikasikan karya yang telah diajukan dalam rangkaian penyelenggaraan pameran di Main Event.</li><br>
            </ol>
        </div>
        <div class="registrasi-guideline">
            <h2>Cara Registrasi</h2>
            <ol>
                <li>Membaca dengan seksama Guideline Open Submission Loka Hasta Karya.</li>
                <li>Mengisi formulir pada <a href="{{ url('/loka-hasta-karya/registrasi') }}" style="color: red; font-weight:bold">tautan ini</a></li>
            </ol>
        </div>
    </section>

    @include('layouts.footer')
</div>
@endsection