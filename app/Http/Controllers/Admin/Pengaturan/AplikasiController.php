<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use App\Models\Aplikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AplikasiController extends Controller
{
    public function index()
    {
        $aplikasi = Aplikasi::orderBy('kategori')->get();
        $akun_pengguna = Aplikasi::where('key', 'akun_pengguna')->first();

        return view('pages.admin.pengaturan.aplikasi.index', [
            'aplikasi' => $aplikasi,
            'akun_pengguna' => $akun_pengguna,
            'options' => $this->Options(),
            'reset' => "Batal",
            'submit' => "Simpan",
            'table' => "aplikasi",
        ]);
    }

    // Update Text dan Option
    public function update(Request $request)
    {
        $datas = Aplikasi::get();
        foreach ($datas as $data) {
            $key = $data->key;
            Aplikasi::where('key', $key)->update(['value' => rtrim($request->$key, "/")]);
        }

        return redirect()->route('aplikasi.index')->with('update-success', 'Proses ubah data berhasil.');
    }

    // Update Image
    public function updateImage(Request $request)
    {
        $this->validate($request, [
            'latar_login' => 'image|file|max:1024',
        ]);

        $datas = Aplikasi::where('jenis', 'image')->get();
        foreach ($datas as $data) {
            $key = $data->key;
            $this->imageUpload($request, $key);
        }

        return redirect()->route('aplikasi.index')->with('update-success', 'Proses ubah data berhasil.');
    }

    public function imageUpload($request, $key)
    {
        $oldImage = 'oldImage_' . $key;
        $aplikasi = Aplikasi::where('key', $key)->first();

        if (!empty($request->$key)) {
            if ($request->$oldImage) {
                Storage::delete('pengaturan-aplikasi/' . $request->$oldImage);
            }

            $filenameWithExtPhoto = $request->file($key)->getClientOriginalName();
            $filenamePhoto = pathinfo($filenameWithExtPhoto, PATHINFO_FILENAME);
            $extensionPhoto = $request->file($key)->getClientOriginalExtension();
            $filenameSimpanPhoto = $key . $filenamePhoto . '_' . time() . '.' . $extensionPhoto;
            $path = $request->file($key)->storeAs('pengaturan-aplikasi', $filenameSimpanPhoto);
        } else {
            $filenameSimpanPhoto = $aplikasi->value;
        }

        $aplikasi->update(['value' => $filenameSimpanPhoto]);
    }

    public function Options()
    {
        return array(
            ["value" => "1", "label" => "Nama Lengkap"],
            ["value" => "2", "label" => "Nama Pengguna"],
            ["value" => "3", "label" => "Alamat Email"],
        );
    }
}
