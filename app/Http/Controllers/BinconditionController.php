<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBinconditionRequest;
use App\Http\Requests\UpdateBinconditionRequest;
use App\Models\Bincondition;

class BinconditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bincondition = Bincondition::all();
        return view('')->with('bincondition',$bincondition);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBinconditionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function stor(StoreBinconditionRequest $request)
    {
        //
        $request->validate(
            [
               'temperature'=> 'required',
               'humidity'=>'required',
               'acidity' => 'required',
               'watercondition' => 'required'
               
            ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function show(Bincondition $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function edit(Bincondition $bincondition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinconditionRequest  $request
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinconditionRequest $request, Bincondition $bincondition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bincondition $bincondition)
    {
        //
    }
}
