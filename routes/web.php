<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwilioController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('sendMessage', [TwilioController::class, 'sendMessage']);
Route::post('sendWhatsapp', [TwilioController::class, 'sendWhatsapp']);