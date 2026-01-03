<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/menu', [MenuController::class, 'index']);


Route::get('/reservasi/tambah-reservasi', [ReservationController::class, 'create']);
Route::resource('reservasi', ReservationController::class);


Route::get('/meja', function () {
    return view('meja/index');
});

Route::resource('/admin/menu', Admin\MenuController::class);

Route::prefix('admin')->group(function () {
    Route::get('/menu', [AdminMenuController::class, 'index']);
    Route::get('/menu/create', [AdminMenuController::class, 'create']);
    Route::post('/menu', [AdminMenuController::class, 'store']);
    Route::get('/menu/{menu}/edit', [AdminMenuController::class, 'edit']);
    Route::put('/menu/{menu}', [AdminMenuController::class, 'update']);
    Route::delete('/menu/{menu}', [AdminMenuController::class, 'destroy']);
});

Route::prefix('admin')->group(function () {
    Route::get('/reservasi', [AdminReservationController::class, 'index']);
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Route dashboard harus di paling atas agar tidak tertimpa resource lain
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route resource lain
    Route::resource('menus', \App\Http\Controllers\Admin\MenuController::class);
    Route::resource('reservations', \App\Http\Controllers\Admin\ReservationController::class);
    // tambahkan resource lain jika ada
});
