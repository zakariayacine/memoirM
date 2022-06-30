<?php

namespace App\Http\Controllers;

use App\Models\Wilaya;
use App\Http\Requests\StoreWilayaRequest;
use App\Http\Requests\UpdateWilayaRequest;

class WilayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Wilaya::all();
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
     * @param  \App\Http\Requests\StoreWilayaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWilayaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wilaya  $wilaya
     * @return \Illuminate\Http\Response
     */
    public function show(Wilaya $wilaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wilaya  $wilaya
     * @return \Illuminate\Http\Response
     */
    public function edit(Wilaya $wilaya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWilayaRequest  $request
     * @param  \App\Models\Wilaya  $wilaya
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWilayaRequest $request, Wilaya $wilaya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wilaya  $wilaya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wilaya $wilaya)
    {
        //
    }
}
