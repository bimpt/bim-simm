<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\Aplikasi;
use Exception;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function imageApplication($key)
    {
        $image_default = "/themes/img/pengaturan-aplikasi/" . str_replace('_', '-', $key) . ".png";

        try {
            $dataApp = Aplikasi::get();
            $aplikasi = $dataApp->where('key', $key)->first();

            if ($aplikasi->value) {
                $image = "/storage/pengaturan-aplikasi/" . $aplikasi->value;
            } else {
                $image = $image_default;
            }
        } catch (Exception $e) {
            $image = $image_default;
        }

        return $image;
    }

    public function imagePengguna($key)
    {
        if (Auth::user()->photo) {
            $image = "/storage/pengguna/" . Auth::user()->photo;
        } else {
            $image = "/themes/img/pengaturan-aplikasi/" . str_replace('_', '-', $key) . ".png";
        }

        return $image;
    }
}
