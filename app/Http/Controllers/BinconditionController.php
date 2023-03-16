<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBinconditionRequest;
use App\Http\Requests\UpdateBinconditionRequest;
use Illuminate\Http\Request;
use App\Models\Bincondition;
use App\Models\Bin;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\BinConditionChanged;



class BinconditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     $bincondition = Bincondition::all();
    //     // return view('')->with('bincondition',$bincondition);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Bin $bin)
    {
        //


        return view('Normal.create_conditions')->with('bin',$bin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBinconditionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBinconditionRequest $request, Bin $bin)
    {
       $formFields = $request->validate([

        'temperature' => 'required',
        'humidity' => 'required',
        'acidity' => 'required',
        'bin_id' => 'required',

       ]);

    //    $formFields['bin_id'] = $bin->id;

        Bincondition::create($formFields);
        return redirect('/bins');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function show(Bin $bin)
    {



        $conditions=$bin->binconditions;
       // $condition_count = $conditions->count();




        return view('Normal.singleBin',['bin'=>$bin,'conditions'=>$conditions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function edit(Bin $bin)
    {




         $conditions=$bin->binconditions;
        return view('Normal.update_condition',['bin'=>$bin,'conditions'=>$conditions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinconditionRequest  $request
     * @param  \App\Models\Bincondition  $bincondition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinconditionRequest $request, Bin $bin)
    {
        //



        $formFields = $request->validate([

            'temperature' => 'required',
            'humidity' => 'required',
            'acidity' => 'required',
            'bin_id' => 'required',

           ]);
           $user= User::find(auth()->user()->id);

           $conditions=$bin->binconditions;

          $conditions->update($formFields);

          Notification::send($user, new BinConditionChanged($conditions));



            return redirect('/bins');
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
