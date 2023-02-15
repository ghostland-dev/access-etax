<?php

namespace App\Http\Controllers;

use App\Models\Constant;
use App\Http\Requests\StoreConstantRequest;
use App\Http\Requests\UpdateConstantRequest;

class ConstantController extends Controller
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
     * @param  \App\Http\Requests\StoreConstantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConstantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function show(Constant $constant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function edit(Constant $constant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConstantRequest  $request
     * @param  \App\Models\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConstantRequest $request, Constant $constant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constant  $constant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constant $constant)
    {
        //
    }
}
