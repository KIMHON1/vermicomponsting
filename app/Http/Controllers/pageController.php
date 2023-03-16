<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use App\Models\User;
use App\Models\Bincondition;

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
    public function dashbord(User $user)
    {
        $users =User::all();
        $count = collect($users)->count();
        $bins =Bin::all();
        $bins_number = collect($bins)->count();

        $inactive_accounts = User::where('status',0)->count();
        $active_accounts = User::where('status',1)->count();


        return view('Dashboard.adminlanding',['user'=>$user,'count'=>$count,'bins_number'=>$bins_number,'active_accounts'=>$active_accounts,'inactive_accounts'=>$inactive_accounts]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//return bins in admin dashboard
    public function InvalidError(Request $request, User $user)
    {

        return view('Dashboard.erro403')->with('user',$user);
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
