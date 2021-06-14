<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class busController extends Controller
{

    public function index()
    {
        return Bus::all(); //retrieve bus data
    }

    public function create(Request $request)
    {


    }

    public function store(Request $request) //Bus adding function
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'vehicle_number' => 'required',
        ]);

        Bus::create($request->all());

        return 'Bus Added Successfully';


    }

    public function show(Bus $bus)
    {
        //
    }

    public function edit(Bus $bus)
    {
        //
    }

    public function update(Request $request, Bus $bus)
    {
        //mention the id and update the fields
        $bus = Bus::find($request->id);
        $bus -> name=$request->name;
        $bus -> type=$request->type;
        $bus -> vehicle_number=$request->vehicle_number;
        $bus -> save();

    }

    public function destroy(Bus $bus)
    {
        //
    }

    //delete bus data from here
    function delete($id){
        $bus = Bus::find($id);
        $bus->delete();
    }
}
