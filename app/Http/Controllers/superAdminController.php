<?php

namespace App\Http\Controllers;

use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class superAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SuperAdmin::all();
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        SuperAdmin::create($request->all());

        return 'Admin added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(SuperAdmin $superAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperAdmin $superAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperAdmin $superAdmin)
    {
        $superAdmin = SuperAdmin::find($request->id);
        $superAdmin -> name=$request->name;
        $superAdmin -> email=$request->email;
        $superAdmin -> password=$request->password;
        $superAdmin -> save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperAdmin  $superAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperAdmin $superAdmin)
    {
        //
    }

    function delete($id){
        $superAdmin = SuperAdmin::find($id);
        $superAdmin->delete();
    }
}
