<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/menu', function () {
    return view('menu/index');
});

Route::get('/menu/tambah-menu', function () {
    return view('menu/create');
});

Route::get('/reservasi', function () {
    return view('reservasi/index');
});

Route::get('/reservasi/tambah-reservasi', function () {
    return view('reservasi/create');
});



