<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
        return view('Dashboard.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       //dd(auth()->user()->id);
        $formFields = $request->validate([
            'firstName'=>'required',
            'secondName'=>'required',


            'phoneNumber'=>'required',
            'gender'=>'required',
            'profilePic'=>'required|nullable',

            'Description'=>'required'

        ]);

        if($request->hasFile('profilePic')){
            $formFields['profilePic'] =$request->file('profilePic')->store('profiles', 'public');
        }
        


        $formFields['user_id']=auth()->user()->id;

        Profile::create($formFields);
        return redirect('/vermusers');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile, User $user)
    {


        $auth_user=auth()->user()->id;
        $user = User::find($auth_user);
        $user_profile = $user->profile;
        // if(auth()->user()->id=$user->user_id){
            return view('Dashboard.profile.show',['user_profile'=>$user_profile,'user'=>$user]);
        // }
        // return'dfghjryt';


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
