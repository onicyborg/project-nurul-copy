<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function(){
    return view('registrasi');
});
Route::post('/registrasi', [AuthController::class, 'registrasi']);
Route::get('/logout', [AuthController::class, 'logout']);

//routes untuk hrd
Route::group(['middleware' => 'role:hrd'], function () {
    Route::get('/hrd/dashboard', [ListController::class, 'leaderboard_admin'])->name('dashboard');
    Route::put('/update-status-recruitment', [ListController::class, 'update_status']);
    Route::delete('/reset-data', [ListController::class, 'delete_data_test']);
    Route::get('/hrd/list-kandidat-terbaik', [ListController::class, 'index']);
    Route::get('/hrd/detail-kandidat/{id}', [ListController::class, 'detail_kandidat']);
});

//routes untuk kandidat
Route::group(['middleware' => 'role:kandidat'], function () {
    Route::get('/kandidat/dashboard', [ListController::class, 'leaderboard']);
    Route::get('/kandidat/profile', function(){
        return view('kandidat.profile');
    });
    Route::get('/kandidat/update-profile', function(){
        return view('kandidat.update_profile');
    });
    Route::put('/update/profile', [ProfileController::class, 'update']);
    Route::put('/update/password', [ProfileController::class, 'update_password']);
    Route::get('/test', function(){
        return view('kandidat.test.test');
    });
    Route::get('/soal', function(){
        return view('kandidat.test.soal');
    });
    Route::post('/submit-test', [AnswerController::class, 'submit']);
});
