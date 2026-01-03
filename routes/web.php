<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;


Route::get('/', function () {
    return view('landingPage');
});

//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {

    // kalo udah login
    if (Auth::check()) {
        return app(AdminController::class)->index();
    }

    // kalo belum login
    return view('admin.tampilan-guestadmin');

})->name('admin.index');


Route::middleware('auth')->prefix('admin')
    ->name('admin.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/menu', [MenuController::class, 'index']);


Route::get('/reservasi/tambah-reservasi', [ReservationController::class, 'create']);
Route::resource('reservasi', ReservationController::class);

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


require __DIR__.'/auth.php';
