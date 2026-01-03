<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Review; 
use App\Models\User;

class DashboardController extends Controller
{
public function index()
{
    $totalMenus = Menu::count();
    $totalReservations = Reservation::count();
    $pendingReservations = Reservation::where('status', 'pending')->count(); 
    $totalUsers = User::where('role', 'customer')->count(); 

    // Ambil 4 menu terbaru untuk ditampilkan
    $latestMenus = Menu::latest()->take(4)->get();

    return view('admin.dashboard', compact(
        'totalMenus',
        'totalReservations',
        'pendingReservations',
        'totalUsers',
        'latestMenus'
    ));
}
}