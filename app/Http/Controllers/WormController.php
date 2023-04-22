<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWormRequest;
use App\Http\Requests\UpdateWormRequest;
use App\Models\Worm;
use Illuminate\Support\Facades\DB;


class WormController extends Controller
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
        $worms = DB::table('worms')
                      ->where('cooperative_id', $cooperative_id)
                      ->get();

        return view('worms.index',['worms'=>$worms])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $auth_user=auth()->user()->id;
        $cooperative_id = DB::table('cooperative_user')
        ->where('user_id',$auth_user)
        ->value('cooperative_id');

        return view('worms.create',[ 'cooperative_id'=>$cooperative_id ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWormRequest $request)
    {
            $formfield = $request->validate(
                [
                    'name' => 'required',
                    'price' => 'required',
                    'population' => 'required',
                    'description' => 'nullable',
                    'cooperative_id' => 'required',



                ]
                );


                $worm->price = $formfield['price'];
                $worm->cooperative_id = $formfield['cooperative_id'];
                $worm = Worm::firstOrCreate(['name' => $formfield['name']]);

                $worm->price = $formfield['price'];
             
                $worm->save();

                return redirect('/worms/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worm  $worm
     * @return \Illuminate\Http\Response
     */
    public function show(Worm $worm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worm  $worm
     * @return \Illuminate\Http\Response
     */
    public function edit(Worm $worm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWormRequest  $request
     * @param  \App\Models\Worm  $worm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWormRequest $request, Worm $worm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worm  $worm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worm $worm)
    {
        //
    }
}
