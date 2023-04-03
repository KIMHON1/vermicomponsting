<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,District,Province,Sector, Location};
use Illuminate\Support\Facades\DB;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $provinces = Province::all();
        $districts = District::all();

        return view('Dashboard.dropdown', compact('provinces', 'districts'));
    }


    public function getdistrict($provincecode){
        dd($provincecode);

        $districts = District::where('provincecode',$provincecode)->orderBy('namedistrict', 'ASC')->get();
        return json_encode($districts);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Normal.location_profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'firstname'=>'required',
            'secondname'=>'required',
            'profilePic'=>'required|nullable',

            'phonenumber'=>'required|unique:locations,phonenumber',
            'gender'=>'required',

            'province'=>'required',
            'district'=>'required',
            'sector'=>'required',
            'cell'=>'required',
            'village'=>'required',


            'description'=>'required',
            'user_id'=>'required'
        ]);

        if($request->hasFile('profilePic')){
            $formFields['profilePic'] =$request->file('profilePic')->store('profiles', 'public');
        }


        Location::create($formFields);
        return redirect('/dashboard');

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
