<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'qr-code'], function () {
    Route::get('qr-generator', [QrController::class, 'index'])->name('qr.form');
    Route::post('generate', [QrController::class, 'generate'])->name('qr.generate');
});
