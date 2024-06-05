<?php

namespace App\Http\Controllers;

use App\Models\Results;
use App\Models\StatusRecruitment;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $data = Results::orderBy('hasil_akhir', 'desc')->get();

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
        $status = StatusRecruitment::find(1);

        return view('kandidat.dashboard', ['data' => $data, 'status' => $status]);
    }

    public function leaderboard_admin()
    {
        $data = Results::orderBy('hasil_akhir', 'desc')->take(10)->get();
        $total = Results::all()->count();
        $status = StatusRecruitment::find(1);


        return view('admin.dashboard', ['data' => $data, 'total'=>$total , 'status' => $status]);
    }

    public function update_status(Request $request)
    {
        $status = StatusRecruitment::find(1);
        $status->status = $request->status;
        $status->save();
        return redirect('/hrd/dashboard')->with('success', 'Berhasil Merubah Status Recruitment');
    }

    public function delete_data_test()
    {
        $data = Results::all();
        $data2 = Test::all();

        foreach($data as $item){
            $item->delete();
        }
        foreach($data2 as $item){
            $item->delete();
        }

        return redirect('/hrd/dashboard')->with('success', 'Berhasil Menghapus Seluruh Data Test Calon Karyawan');
    }
}
