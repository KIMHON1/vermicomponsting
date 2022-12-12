<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBinRequest;
use App\Http\Requests\UpdateBinRequest;
use App\Models\Bin;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bins = Bin::all();
        return view('Normal.bins')->with('bins',$bins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Normal.create_bin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $request->validate(
        //      [
        //         'number'=> 'required|unique:bins',
        //         'microcontroller_type'=>'required',
        //         'location' => 'required'
        //      ]
        //      );

        $bin = Bin::create($request->all());
        // $bin->user_id = auth()->user()->id;

      return redirect('/bins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function show(Bin $id)
    {       $bin = Bin::find($id);
            return view('Normal.singleBin')->with('bin',$bin);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function update_bin()
    {
        //
        return view('Normal.update_bin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinRequest  $request
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinRequest $request, Bin $bin)
    {
        //
        $bin=Bin::find($id);
        $bin =$request->all();
        $bin->update($input);
        return view('Normal.update_bin')->with('bin',$bin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bin  $bin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(auth()->user()->hasRole('Admin')){
        
        Bin::destroy($id);
        return redirect('/bins');
    } else{
        echo"you are not authorised";
    }



    }
}
