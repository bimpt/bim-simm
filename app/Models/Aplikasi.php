<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    use HasFactory;

    protected $table = "pengaturan_aplikasi";

    protected $fillable = [
        "key", "value", "keterangan",
        "jenis", "kategori", "script"
    ];

    public static function pengaturan_aplikasi()
    {
        $aplikasi = self::get();

        $data['nama_aplikasi'] = $aplikasi->where('key', 'nama_aplikasi')->first()->value ?? '';
        $data['akun_pengguna'] = $aplikasi->where('key', 'akun_pengguna')->first()->value ?? '';

        return $data;
    }
}
