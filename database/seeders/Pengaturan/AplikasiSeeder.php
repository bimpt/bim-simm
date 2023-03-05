<?php

namespace Database\Seeders\Pengaturan;

use App\Models\Aplikasi;
use Illuminate\Database\Seeder;

class AplikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aplikasi = array(
            ["key" => "nama_aplikasi", "value" => "Layanan BIM", "keterangan" => "Isi nama Aplikasi", "jenis" => "text", "kategori" => "pengganti_sebutan", "script" => ""],
            ["key" => "akun_pengguna", "value" => "", "keterangan" => "Pilih Akun Pengguna yang ditampilkan di navbar", "jenis" => "option", "kategori" => "", "script" => ""],
            ["key" => "latar_login", "value" => "", "keterangan" => "Kosongkan, jika latar login tidak berubah", "jenis" => "image", "kategori" => "latar_login", "script" => "previewLatarLogin()"],
            ["key" => "logo", "value" => "", "keterangan" => "Kosongkan, jika logo tidak berubah", "jenis" => "image", "kategori" => "logo", "script" => "previewLogo()"],
            ["key" => "logo_aplikasi", "value" => "", "keterangan" => "Kosongkan, jika logo aplikasi tidak berubah", "jenis" => "image", "kategori" => "logo", "script" => "previewLogoAplikasi()"],
            ["key" => "favicon", "value" => "", "keterangan" => "Kosongkan, jika favicon tidak berubah", "jenis" => "image", "kategori" => "logo", "script" => "previewLogoFavicon()"],
        );

        foreach ($aplikasi as $item) {
            Aplikasi::create($item);
        }
    }
}
