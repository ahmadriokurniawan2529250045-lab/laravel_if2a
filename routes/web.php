<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('fakultas', App\Http\Controllers\FakultasController::class);
Route::resource('periodes', App\Http\Controllers\PeriodeController::class);