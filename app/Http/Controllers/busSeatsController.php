<?php

namespace App\Http\Controllers;

use App\Models\BusSeats;
use Illuminate\Http\Request;

class busSeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busSeats = BusSeats::with('bus');
        return busSeats;
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
            'price' => 'required'

        ]);

        Bus::create($request->all());

        return 'Bus Added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusSeats  $busSeats
     * @return \Illuminate\Http\Response
     */
    public function show(BusSeats $busSeats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusSeats  $busSeats
     * @return \Illuminate\Http\Response
     */
    public function edit(BusSeats $busSeats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusSeats  $busSeats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusSeats $busSeats)
    {
        $busSeats = BusSeats::find($request->id);
        $busSeats -> seats_number=$request->seat_number;
        $busSeats -> type=$request->seat_number;
        $busSeats -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusSeats  $busSeats
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusSeats $busSeats)
    {
        //
    }

    function delete($id){
        $busSeats = BusSeats::find($id);
        $busSeats->delete();
    }

}
