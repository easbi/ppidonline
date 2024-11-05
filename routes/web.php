<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeberatanController;
use App\Http\Controllers\PermohonanController;


Route::get('/', [HomeController::class, 'index']);

Route::resource('/permohonan', PermohonanController::class);
Route::resource('/keberatan', KeberatanController::class);
Route::resource('/pengaduan', PengaduanController::class);
