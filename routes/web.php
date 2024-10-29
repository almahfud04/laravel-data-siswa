<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Mendefinisikan route resource untuk Siswa
Route::resource('siswa', SiswaController::class);
