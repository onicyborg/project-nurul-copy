<?php

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
    return view('welcome');
});

//routes untuk hrd
Route::group(['middleware' => 'role:hrd'], function () {

});

//routes untuk kandidat
Route::group(['middleware' => 'role:kandidat'], function () {

});
