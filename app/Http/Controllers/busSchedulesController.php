<?php

namespace App\Http\Controllers;

use App\Models\BusSchedules;
use Illuminate\Http\Request;

class busSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busSchedules = BusSchedules::with('bus_route');
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
            'direction' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
        BusSchedules::create($request->all());

        return 'Bus Schedule Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusSchedules  $busSchedules
     * @return \Illuminate\Http\Response
     */
    public function show(BusSchedules $busSchedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusSchedules  $busSchedules
     * @return \Illuminate\Http\Response
     */
    public function edit(BusSchedules $busSchedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusSchedules  $busSchedules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusSchedules $busSchedules)
    {
        $busSchedules = BusSchedules::find($request->id);
        $busSchedules -> direction=$request->direction;
        $busSchedules -> start=$request->start;
        $busSchedules -> end=$request->end;
        $busSchedules -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusSchedules  $busSchedules
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusSchedules $busSchedules)
    {
        //
    }

    function delete($id){
        $busSchedules = BusSchedules::find($id);
        $busSchedules->delete();
    }
}
