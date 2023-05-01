<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use App\Models\Planting;
use App\Models\Harvesting;
use App\Models\Cooperative;
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

        $auth_user=auth()->user()->id;
        $cooperative_id = DB::table('cooperative_user')
                         ->where('user_id',$auth_user)
                         ->value('cooperative_id');


                        //  $cooperative = Cooperative::find($cooperative_id);
                        // $bins = $cooperative->bins;

        $bins = DB::table('bins')->where('cooperative_id',$cooperative_id)->get();
        $binIds=$bins->pluck('id');
        $results = DB::table('plantings')
            ->rightjoin('harvestings', 'plantings.bin_id', '=', 'harvestings.bin_id')
            ->whereIn('harvestings.bin_id',$binIds)
            ->select('plantings.*','harvestings.*')
            ->whereRaw('harvestings.id = (select max(id) from harvestings where bin_id = ?)', $binIds)
            ->get();


            dd($results);














        return view('harvesting.index',['bins'=>$bins])->with('i');
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

        $planting_id = DB::table('plantings')->where('bin_id',$bin->id)->latest('id')->value('id');
        $plantings = Planting::find($planting_id);

        $formfields['planting_id'] = $planting_id;

        if(Harvesting::create($formfields)){

            $planting = Planting::find( $planting_id);
            $planting->status = 1;
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
