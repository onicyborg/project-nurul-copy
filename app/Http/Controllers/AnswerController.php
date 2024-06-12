<?php

namespace App\Http\Controllers;

use App\Models\Results;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AnswerController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'pertanyaan_1' => 'required',
            'pertanyaan_2' => 'required',
            'pertanyaan_3' => 'required',
            'pertanyaan_4' => 'required',
            'pertanyaan_5' => 'required',
            'pertanyaan_6' => 'required',
            'pertanyaan_7' => 'required',
            'pertanyaan_8' => 'required',
            'pertanyaan_9' => 'required',
            'pertanyaan_10' => 'required',
            'pertanyaan_11' => 'required',
            'pertanyaan_12' => 'required',
            'pertanyaan_13' => 'required',
            'pertanyaan_14' => 'required',
            'pertanyaan_15' => 'required',
        ]);

        $idealValues = [
            1 => 4,
            2 => 4,
            3 => 4,
            4 => 4,
            5 => 4,
            6 => 4,
            7 => 4,
            8 => 4,
            9 => 4,
            10 => 4,
            11 => 4,
            12 => 4,
            13 => 4,
            14 => 4,
            15 => 4,
        ];

        $bobots = [
            1 => 10,
            2 => 15,
            3 => 10,
            4 => 10,
            5 => 5,
            6 => 5,
            7 => 5,
            8 => 5,
            9 => 5,
            10 => 5,
            11 => 5,
            12 => 5,
            13 => 5,
            14 => 5,
            15 => 5,
        ];

        $test = new Test();
        $test->soal_1 = $request->pertanyaan_1;
        $test->soal_2 = $request->pertanyaan_2;
        $test->soal_3 = $request->pertanyaan_3;
        $test->soal_4 = $request->pertanyaan_4;
        $test->soal_5 = $request->pertanyaan_5;
        $test->soal_6 = $request->pertanyaan_6;
        $test->soal_7 = $request->pertanyaan_7;
        $test->soal_8 = $request->pertanyaan_8;
        $test->soal_9 = $request->pertanyaan_9;
        $test->soal_10 = $request->pertanyaan_10;
        $test->soal_11= $request->pertanyaan_11;
        $test->soal_12 = $request->pertanyaan_12;
        $test->soal_13 = $request->pertanyaan_13;
        $test->soal_14 = $request->pertanyaan_41;
        $test->soal_15 = $request->pertanyaan_15;
        $test->user_id = Auth::id();
        $test->save();

        $total_score = 0;

        for($i=1;$i<=15;$i++){
            $jawaban = $request->input("pertanyaan_$i");
            $idealValue = $idealValues[$i];
            $gap = $idealValue - $jawaban;

            // Convert gap to score
            if ($gap == 0) {
                $score = 5;
            } elseif (abs($gap) == 1) {
                $score = 4;
            } elseif (abs($gap) == 2) {
                $score = 3;
            } elseif (abs($gap) == 3) {
                $score = 2;
            } else {
                $score = 1;
            }

            // Multiply the score by the weight of the criteria
            $bobot = $bobots[$i];
            $total_score += $score * ($bobot / 100);
        }

        // Log the total score before saving to the database
        Log::info('Total Score: ' . $total_score);
        // Store the candidate's total score in the database
        $result = new Results();
        $result->hasil_akhir = $total_score;
        $result->user_id = Auth::id();
        $result->save();

        return redirect('/test')->with('success', 'Berhasil Mengirim Tanggapan Anda');
    }
}
