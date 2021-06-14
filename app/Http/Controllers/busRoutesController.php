<?php

namespace App\Http\Controllers;

use App\Models\BusRoutes;
use Illuminate\Http\Request;

class busRoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busRoutes = BusRoutes::with('bus');
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
            'status' => 'required',
        ]);
        Route::create($request->all());

        return 'Route Added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusRoutes  $busRoutes
     * @return \Illuminate\Http\Response
     */
    public function show(BusRoutes $busRoutes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusRoutes  $busRoutes
     * @return \Illuminate\Http\Response
     */
    public function edit(BusRoutes $busRoutes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusRoutes  $busRoutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusRoutes $busRoutes)
    {
        $busRoutes = BusSeats::find($request->id);
        $busRoutes -> status=$request->status;
        $busRoutes -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusRoutes  $busRoutes
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusRoutes $busRoutes)
    {
        //
    }

    function delete($id){
        $busRoutes = BusRoutes::find($id);
        $busRoutes->delete();
    }
}
