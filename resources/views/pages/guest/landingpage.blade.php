<x-simm-app-layout title="Beranda">
    <!-- header -->
    <section id="bim-header" style="background-image: url('/themes/img/pengaturan-aplikasi/header.png'); background-repeat: no-repeat; background-size: cover;" class="header-img">
        <div class="header-img">
            <div class="title">
                <h1>Selamat Datang di Website Lentera Istiqomah</h1>

                {{-- <p>Informasi keuangan, layanan dan kegiatan dakwah Masjid Al-Istiqomah.</p> --}}
                <p>Media Dakwah Masjid Al Istiqomah Purbalingga "Pancarkan Cahaya Ilmu Tenangkan Jiwa"</p>

                <div class="btn btn-header">
                    <a href="">Visi Misi</a>
                </div>
            </div>
        </div>
    </section>

    <section id="jadwalsholat">
        <h2 class="title">
            Jadwal Shalat untuk wilayah Kab. Purbalingga dan sekitarnya
        </h2>
        <p>Sabtu, 11 Maret 2023 | 18 Sya'ban 1444 H</p>

        <div class="waktu-sholat">
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Imsyak</h6>
                <h5>04:21</h5>
            </div>
            <div class="box-waktu-sholat lr">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Subuh</h6>
                <h5>04:31</h5>
            </div>
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Syuruq</h6>
                <h5>05:45</h5>
            </div>
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Dhuha</h6>
                <h5>06:09</h5>
            </div>
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Dhuhur</h6>
                <h5>11:52</h5>
            </div>
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Asyar</h6>
                <h5>15:04</h5>
            </div>
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Maghrib</h6>
                <h5>17:55</h5>
            </div>
            <div class="box-waktu-sholat">
                <img src="{{ asset('/themes/img/pengaturan-aplikasi/landing-page/icon-time.png') }}" alt="waktu sholat" class="img-waktu">
                <h6>Isya</h6>
                <h5>19:05</h5>
            </div>
        </div>
    </section>

    <section id="laporankeuangan">
        <div class="col-md-3 total">
            <h2>Laporan Keuangan</h2>
            <p>Total Dana Terkumpul</p>
            <span>Rp 6.800.000</span>
        </div>
        <div class="col-md-9 d-flex">
            <div class="col-md-4">
                <div class="card box-card">
                    <p>Total Infaq Harian</p>
                    <span>Rp. -</span>
                    <small>selengkapnya ></small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-card">
                    <p>Total Infaq Sholat Jum'at</p>
                    <span>Rp. 201.800</span>
                    <small>selengkapnya ></small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-card">
                    <p>Total Donasi</p>
                    <span>Rp. 4.500.000</span>
                    <small>selengkapnya ></small>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="jadwalkegiatan">
        <h2>Jadwal Kegiatan di Masjid Al Istiqomah</h2>

    </section> --}}

    <!-- content artikel-->
    {{-- <section id="content">
        <h3>Jadwal Kegiatan di Masjid Al Istiqomah</h3>

    </section>

    <!-- content youtube-->
    <section id="content">
        <h3>Jadwal Kegiatan di Masjid Al Istiqomah</h3>

    </section>

    <section id="partner">
        <h2>Community & Partners</h2>

    </section> --}}
</x-simm-app-layout>
