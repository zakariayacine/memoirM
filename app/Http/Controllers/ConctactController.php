<?php

namespace App\Http\Controllers;

use App\Models\Conctact;
use App\Http\Requests\StoreConctactRequest;
use App\Http\Requests\UpdateConctactRequest;

class ConctactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreConctactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConctactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conctact  $conctact
     * @return \Illuminate\Http\Response
     */
    public function show(Conctact $conctact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conctact  $conctact
     * @return \Illuminate\Http\Response
     */
    public function edit(Conctact $conctact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConctactRequest  $request
     * @param  \App\Models\Conctact  $conctact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConctactRequest $request, Conctact $conctact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conctact  $conctact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conctact $conctact)
    {
        //
    }
}
