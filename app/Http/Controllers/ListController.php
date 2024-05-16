<?php

namespace App\Http\Controllers;

use App\Models\Results;
use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $data = Results::orderBy('hasil_akhir', 'desc')->take(10)->get();

        return view('admin.list-kandidat', ['data' => $data]);
    }

    public function detail_kandidat($id)
    {
        $data = User::find($id);

        return view('admin.profile', ['data' => $data]);
    }

    public function leaderboard()
    {
        $data = Results::orderBy('hasil_akhir', 'desc')->take(10)->get();

        return view('kandidat.dashboard', ['data' => $data]);
    }
}
