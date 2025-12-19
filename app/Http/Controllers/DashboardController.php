<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard', [
        'activeReservations' => 0
        ]);
    }
}
