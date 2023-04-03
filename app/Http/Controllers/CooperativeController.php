<?php

namespace App\Http\Controllers;

use App\Models\Cooperative;
use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CooperativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cooperatives = Cooperative::all();
        $managerids = Cooperative::distinct()->pluck('co_operativemanager');
        $managers = [];
        foreach ($managerids as $managerid) {
            $manager_name  = User::find($managerid);
        //    $manager_name =$manager_details->name;

           $managers[] = $manager_name;

        }


        $data = [];
        $max_length = max(count($cooperatives), count($managers));
        for ($i = 0; $i < $max_length; $i++) {
                    $data[] = [
                    'coop' => $cooperatives[$i] ?? null,
                    'manager' => $managers[$i] ?? null,
                                ];
                                            }



        // return view('Cooperative.index',['cooperatives'=>$cooperatives,'managers'=>$managers])->with('i');

        return view('Cooperative.index',['data'=>$data])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // if(auth()->user()->roles){
        //     foreach(auth()->user()->roles as $role){
        //         if($role->name =='Manager'){
        //             return view('Cooperative.create');
        //         }
        //     }
        // }

        $managers = User::where('Roles','Manager')->get();
        // $userId = $managers->user->id;
        // return view('Cooperative.index');

        return view('Cooperative.create',['managers'=>$managers]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formfields = $request->validate(
            [
                'co_operativename'=> 'required',
                'co_operativemanager' => 'required',
                'co_operativedescription'=>'required',

            ]
            );
        $formfields[ 'user_id'] =auth()->user()->id;

        Cooperative::create($formfields);
        return redirect('/cooperatives');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperative $cooperative)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperative $cooperative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cooperative $cooperative)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperative $cooperative)
    {

        $cooperativeId->delete();
    }
}
