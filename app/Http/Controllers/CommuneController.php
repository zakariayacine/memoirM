<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Http\Requests\StoreCommuneRequest;
use App\Http\Requests\UpdateCommuneRequest;
use App\Models\Wilaya;
use Illuminate\Support\Facades\DB;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = "1")
    {
      return  DB::select('SELECT * FROM wilayas w INNER JOIN communes c on c.wilaya_id = w.id WHERE w.id = '.$id);
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
     * @param  \App\Http\Requests\StoreCommuneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommuneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Commune $commune)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function edit(Commune $commune)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommuneRequest  $request
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommuneRequest $request, Commune $commune)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commune $commune)
    {
        //
    }
}
