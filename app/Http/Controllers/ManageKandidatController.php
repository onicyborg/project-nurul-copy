<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManageKandidatController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'kandidat')->get();

        return view('admin.manage-kandidat', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('newpassword');
        $user->role = 'kandidat';
        $user->save();

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password != ''){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Data Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success', 'Berhasil Delete Data');
    }
}
