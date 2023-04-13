<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use App\Models\Planting;
use App\Models\Harvesting;
use Illuminate\Support\Facades\DB;


class HarvestingCompostController extends Controller
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
    public function create(Bin $bin)
    {


        return view('harvesting.end',['bin'=>$bin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bin $bin)
    {



        $formfields = $request->validate(
            [
                "wormQuantity"=>"required",
                "harvestCompostQuantity"=>"required",
            ]
        );

        $formfields['bin_id'] = $bin->id;

        $planting_id = DB::table('plantings')->where('bin_id',$bin->id)->value('id');
        $plantings = Planting::find($planting_id);

        $formfields['planting_id'] = $planting_id;

        if(Harvesting::create($formfields)){

            $planting = Planting::find( $planting_id);
            $planting->status = 0;
            $planting->save();
        };

        return redirect('/bins');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
