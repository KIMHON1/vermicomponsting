<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // default page
    public function index()
    {
        //

        return view('Normal.main-layout');
    }


//dashboard page
    public function dashbord()
    {
        
        return view('Dashboard.DashBoard');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//return bins in admin dashboard
    public function adminbin()
    {   
        $bins = Bin::all();
        return view('Dashboard.adminBins')->with('bins',$bins);
    }
// return single bin in admin dashboard
    public function admsinglebin( $id)
    {   
        $bins = Bin::all();
        $bin = Bin::find($id);
        return view('Dashboard.adminsingleBin')->with('bins',$bins);
    }
//show single bin in admin pannel

    public function showadminbin($id)
    {
        $bin = Bin::find($id);
        return view('Normal.singleBin')->with('bin',$bin);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
