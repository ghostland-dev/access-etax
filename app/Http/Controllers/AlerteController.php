<?php

namespace App\Http\Controllers;

use App\Models\Alerte;
use App\Http\Requests\StoreAlerteRequest;
use App\Http\Requests\UpdateAlerteRequest;

class AlerteController extends Controller
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
     * @param  \App\Http\Requests\StoreAlerteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlerteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function show(Alerte $alerte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function edit(Alerte $alerte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlerteRequest  $request
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlerteRequest $request, Alerte $alerte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alerte  $alerte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alerte $alerte)
    {
        //
    }
}
