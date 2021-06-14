<?php

namespace App\Http\Controllers;

use App\Models\BusBookings;
use Illuminate\Http\Request;
use App\Models\BusSeats;

class busBookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busBookings = BusBookings::with('bus_seats');
        return busRoutes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'seat_number' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);
        BusBookings::create($request->all());

        return 'Booking Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusBookings  $busBookings
     * @return \Illuminate\Http\Response
     */
    public function show(BusBookings $busBookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusBookings  $busBookings
     * @return \Illuminate\Http\Response
     */
    public function edit(BusBookings $busBookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusBookings  $busBookings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusBookings $busBookings)
    {
        $busBookings = BusBookings::find($request->id);
        $busBookings -> seat_number=$request->seat_number;
        $busBookings -> price=$request->price;
        $busBookings -> status=$request->status;
        $busBookings -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusBookings  $busBookings
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusBookings $busBookings)
    {
        //
    }

    function delete($id){
        $busBookings = BusBookings::find($id);
        $busBookings->delete();
    }
}
