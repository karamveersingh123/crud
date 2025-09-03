<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// register route
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');


//login route
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
