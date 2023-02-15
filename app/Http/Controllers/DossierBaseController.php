<?php

namespace App\Http\Controllers;

use App\Models\DossierBase;
use App\Http\Requests\StoreDossierBaseRequest;
use App\Http\Requests\UpdateDossierBaseRequest;

class DossierBaseController extends Controller
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
     * @param  \App\Http\Requests\StoreDossierBaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDossierBaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DossierBase  $dossierBase
     * @return \Illuminate\Http\Response
     */
    public function show(DossierBase $dossierBase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DossierBase  $dossierBase
     * @return \Illuminate\Http\Response
     */
    public function edit(DossierBase $dossierBase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDossierBaseRequest  $request
     * @param  \App\Models\DossierBase  $dossierBase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDossierBaseRequest $request, DossierBase $dossierBase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DossierBase  $dossierBase
     * @return \Illuminate\Http\Response
     */
    public function destroy(DossierBase $dossierBase)
    {
        //
    }
}
