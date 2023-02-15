<?php

namespace App\Http\Controllers;

use App\Models\Dirigent;
use App\Http\Requests\StoreDirigentRequest;
use App\Http\Requests\UpdateDirigentRequest;

class DirigentController extends Controller
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
     * @param  \App\Http\Requests\StoreDirigentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirigentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dirigent  $dirigent
     * @return \Illuminate\Http\Response
     */
    public function show(Dirigent $dirigent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dirigent  $dirigent
     * @return \Illuminate\Http\Response
     */
    public function edit(Dirigent $dirigent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirigentRequest  $request
     * @param  \App\Models\Dirigent  $dirigent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirigentRequest $request, Dirigent $dirigent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dirigent  $dirigent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dirigent $dirigent)
    {
        //
    }
}
