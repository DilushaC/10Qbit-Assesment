<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class routeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Route::all();
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
            'node_one' => 'required',
            'node_two' => 'required',
            'route_number' => 'required',
            'distance' => 'required',
            'time' => 'required',
        ]);

        Route::create($request->all());

        return 'Route Added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $route = Route::find($request->id);
        $route -> node_one=$request->node_one;
        $route -> node_two=$request->node_two;
        $route -> route_number=$request->route_number;
        $route -> distance=$request->distance;
        $route -> time=$request->time;
        $route -> save();

        return 'Item Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }

    function delete($id){
        $route = Route::find($id);
        $route->delete();

        return 'Item deleted';
    }
}
