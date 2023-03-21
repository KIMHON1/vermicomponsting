<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHarvestingRequest;
use App\Http\Requests\UpdateHarvestingRequest;
use App\Models\Harvesting;

class HarvestingController extends Controller
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
     * @param  \App\Http\Requests\StoreHarvestingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHarvestingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function show(Harvesting $harvesting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function edit(Harvesting $harvesting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHarvestingRequest  $request
     * @param  \App\Models\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHarvestingRequest $request, Harvesting $harvesting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harvesting $harvesting)
    {
        //
    }
}
