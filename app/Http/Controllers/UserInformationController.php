<?php

namespace App\Http\Controllers;

use App\Models\User_information;
use App\Http\Requests\StoreUser_informationRequest;
use App\Http\Requests\UpdateUser_informationRequest;

class UserInformationController extends Controller
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
     * @param  \App\Http\Requests\StoreUser_informationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser_informationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_information  $user_information
     * @return \Illuminate\Http\Response
     */
    public function show(User_information $user_information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_information  $user_information
     * @return \Illuminate\Http\Response
     */
    public function edit(User_information $user_information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_informationRequest  $request
     * @param  \App\Models\User_information  $user_information
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser_informationRequest $request, User_information $user_information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_information  $user_information
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_information $user_information)
    {
        //
    }
}
