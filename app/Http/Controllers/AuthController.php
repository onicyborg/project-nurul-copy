<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'hrd') {
                return redirect('/hrd/dashboard');
            } else if (Auth::user()->role == 'kandidat') {
                return redirect('/kandidat/dashboard');
            } else {
                return redirect()->back()->with('error', 'Username atau Password Salah');
            }
        } else {
            return redirect()->back()->with('error', 'Username atau Password Salah');
        }
    }

    public function registrasi(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:pria,wanita',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'nomor_hp' => 'require|numeric',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->email = $request->email;
        $data->nomor_hp = $request->nomor_hp;
        $data->role = 'kandidat';
        $data->password = Hash::make($request->password);
        $data->save();

        return view('login')->with('success', 'Anda Berhasil Melakukan Registrasi, Silahkan Login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
