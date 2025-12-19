<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/menu/tambah-menu', [MenuController::class, 'create']);
Route::resource('menu', MenuController::class);

Route::get('/reservasi', function () {
    return view('reservasi/index');
});

Route::get('/reservasi/tambah-reservasi', function () {
    return view('reservasi/create');
});



