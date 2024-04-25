<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('phone-auth', [PhoneAuthController::class, 'index']);
