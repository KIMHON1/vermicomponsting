<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantingRequest;
use App\Http\Requests\UpdatePlantingRequest;
use App\Models\Planting;

class PlantingController extends Controller
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
     * @param  \App\Http\Requests\StorePlantingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlantingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function show(Planting $planting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function edit(Planting $planting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlantingRequest  $request
     * @param  \App\Models\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantingRequest $request, Planting $planting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planting $planting)
    {
        //
    }
}
