<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login',['userData'=>session('userData')]);
})->name('login');
route::post('/login', [PageController::class,'login'])->name('login.post');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('pengelolaan', function () {
    return view('pengelolaan');
})->name('pengelolaan');