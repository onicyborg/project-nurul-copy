<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:pria,wanita',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'pendidikan_terakhir' => 'required',
            'alamat' => 'required',
            'file_cv' => auth()->user()->file_cv ? 'nullable' : 'required',
            'file_foto' => auth()->user()->file_foto ? 'nullable' : 'required',
            'file_dokumen_pendukung' => auth()->user()->file_dokumen_pendukung ? 'nullable' : 'required'
        ]);

        $user_id = Auth::user()->id;
        $data = User::find($user_id);

        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->alamat = $request->alamat;

        // Proses penyimpanan file_cv
        if ($request->hasFile('file_cv')) {
            $file_cv = $request->file('file_cv');
            $file_cv_name = Str::uuid() . '.' . $file_cv->getClientOriginalExtension(); // Generate UUID sebagai nama file
            $file_cv->storeAs('public/dokumen_kandidat', $file_cv_name); // Simpan file dengan UUID
            $data->file_cv = 'storage/dokumen_kandidat/'. $file_cv_name;
        }

        // Proses penyimpanan file_foto
        if ($request->hasFile('file_foto')) {
            $file_foto = $request->file('file_foto');
            $file_foto_name = Str::uuid() . '.' . $file_foto->getClientOriginalExtension(); // Generate UUID sebagai nama file
            $file_foto->storeAs('public/dokumen_kandidat', $file_foto_name); // Simpan file dengan UUID
            $data->file_foto = 'storage/dokumen_kandidat/'. $file_foto_name;
        }

        // Proses penyimpanan file_dokumen_pendukung
        if ($request->hasFile('file_dokumen_pendukung')) {
            $file_dokumen_pendukung = $request->file('file_dokumen_pendukung');
            $file_dokumen_pendukung_name = Str::uuid() . '.' . $file_dokumen_pendukung->getClientOriginalExtension(); // Generate UUID sebagai nama file
            $file_dokumen_pendukung->storeAs('public/dokumen_kandidat', $file_dokumen_pendukung_name); // Simpan file dengan UUID
            $data->file_dokumen_pendukung = 'storage/dokumen_kandidat/'. $file_dokumen_pendukung_name;
        }

        $data->save();

        return redirect('/kandidat/profile')->with('success', 'Data Berhasil Diperbarui');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, auth()->user()->password)) {
                        $fail('The old password is incorrect.');
                    }
                },
            ],
            'new_password' => 'required|string|min:8|confirmed'
        ]);

        $data = User::find(Auth::user()->id);
        $data->password = Hash::make($request->new_password);
        $data->save();
        return redirect()->back()->with('success', 'Password Berhasil Diperbarui');
    }
}
