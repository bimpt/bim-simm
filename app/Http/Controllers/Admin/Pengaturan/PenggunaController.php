<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    public function index()
    {
        $table = "pengguna";
        $pengguna = User::all();
        $demo = env('WEB_DEMO');
        $title = "Pengguna";

        return view('pages.admin.pengaturan.pengguna.index', compact('table', 'pengguna', 'demo', 'title'));
    }

    public function create()
    {
        $pengguna = new User();
        $reset = "Kosongkan";
        $submit = "Tambah";
        return view('pages.admin.pengaturan.pengguna.create', compact('pengguna', 'reset', 'submit'));
    }

    public function store(UserRequest $request)
    {
        if ($request->hasFile('photo')) {
            $filenameWithExtPhoto = $request->file('photo')->getClientOriginalName();
            $filenamePhoto = pathinfo($filenameWithExtPhoto, PATHINFO_FILENAME);
            $extensionPhoto = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpanPhoto = 'photo' . $filenamePhoto . '_' . time() . '.' . $extensionPhoto;
            $path = $request->file('photo')->storeAs('pengguna', $filenameSimpanPhoto);
        } else {
            $filenameSimpanPhoto = '';
        }

        $attributes = $request->all();
        $attributes['photo'] = $filenameSimpanPhoto;

        User::create($attributes);

        return redirect()->route('pengguna.index')->with('store-success', 'Berhasil menambahkan Pengguna Baru');
    }

    public function edit($id)
    {
        $table = "pengguna";
        $pengguna = User::find(decrypt($id));
        $reset = "Kembalikan";
        $submit = "Ubah";
        $title = "Pengguna";

        return view('pages.admin.pengaturan.pengguna.edit', compact('table', 'pengguna', 'reset', 'submit', 'title'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'photo' => 'image|file|max:1024',
        ]);

        $pengguna = User::find(decrypt($id));
        $attributes = $request->all();

        if (!empty($attributes['photo'])) {
            if ($request->oldPhoto) {
                Storage::delete('pengguna/' . $request->oldPhoto);
            }

            $filenameWithExtPhoto = $request->file('photo')->getClientOriginalName();
            $filenamePhoto = pathinfo($filenameWithExtPhoto, PATHINFO_FILENAME);
            $extensionPhoto = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpanPhoto = 'photo' . $filenamePhoto . '_' . time() . '.' . $extensionPhoto;
            $path = $request->file('photo')->storeAs('pengguna', $filenameSimpanPhoto);
        } else {
            $filenameSimpanPhoto = $pengguna->photo;
        }

        $attributes['photo'] = $filenameSimpanPhoto;

        $pengguna->update($attributes);

        return redirect()->route('pengguna.index')->with('update-success', 'Proses ubah data berhasil.');
    }

    public function destroy($id)
    {
        $pengguna = User::find(decrypt($id));

        if ($pengguna->photo) {
            Storage::delete('pengguna/' . $pengguna->photo);
        }
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('destroy-success', 'Proses hapus data berhasil.');
    }

    public function deleteChecked(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $pengguna = User::find($id);
            if ($pengguna->photo) {
                Storage::delete('pengguna/' . $pengguna->photo);
            }
        }

        User::whereIn('id', $ids)->delete();

        return response()->json(['success' => "Data telah dihapus"]);
    }
}
