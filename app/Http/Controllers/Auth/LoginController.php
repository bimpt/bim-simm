<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\ImageController;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        $aplikasi = new ImageController();
        $template = 'layouts.templates.adminlte';

        return view('auth.login', [
            'favicon' => $aplikasi->imageApplication('favicon'),
            'logo' => $aplikasi->imageApplication('logo'),
            'template' => $template,
        ]);
    }

    public function store(Request $request)
    {
        $attribute = $request->validate([
            $this->username() =>  ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($attribute)) {
            return redirect(RouteServiceProvider::HOME)->with('success-login', 'Anda telah berhasil login.');
        }

        $akun = '';
        if ($this->username() == 'username') {
            $akun = 'Nama pengguna';
        } else {
            $akun = 'Email';
        }

        throw ValidationException::withMessages([
            'message' => $akun . ' atau kata sandi tidak sesuai.',
        ]);
    }

    public function username()
    {
        $field = filter_var(request()->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$field => request()->username]);
        return $field;
    }
}
