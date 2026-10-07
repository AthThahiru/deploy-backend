<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mhs', [MahasiswaController::class, 'index']);
Route::post('/mhs', [MahasiswaController::class, 'store']);