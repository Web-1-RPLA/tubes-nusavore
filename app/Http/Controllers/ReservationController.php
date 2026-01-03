<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservasi/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservasi/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
         $ValidateData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required',
            'nomor_telepon' => 'required',
            'reservation_date' => 'required',
            'reservation_time' => 'required',
            'jumlah_orang' => 'required|integer',
            'description' => 'nullable'
        ]);
        Reservation::create($ValidateData);
        return redirect('/reservasi')
        ->with('success', 'Reservasi Anda berhasil dikirim. Kami akan segera menghubungi Anda.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
