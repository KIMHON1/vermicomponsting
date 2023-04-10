<?php

namespace App\Http\Controllers;

use App\Models\Cooperative;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;
use App\Models\Village;
use Illuminate\Support\Facades\DB;
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

        // $managerids = Cooperative::distinct()->pluck('co_operativemanager');
        // $managers = [];
        // foreach ($managerids as $managerid) {
        //     $manager_name  = User::find($managerid);
        // //    $manager_name =$manager_details->name;

        //    $managers[] = $manager_name;

        // }


        // $data = [];
        // $max_length = max(count($cooperatives), count($managers));
        // for ($i = 0; $i < $max_length; $i++) {
        //             $data[] = [
        //             'coop' => $cooperatives[$i] ?? null,
        //             'manager' => $managers[$i] ?? null,
        //                         ];
        //                                     }



        // return view('Cooperative.index',['cooperatives'=>$cooperatives,'managers'=>$managers])->with('i');

        return view('Cooperative.index',[ 'cooperatives'=>$cooperatives])->with('i');
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
                'co_operative_email'=>'required',
                'co_operative_telephone'=>'required',
                // 'status'=>'required',
                'starting_date'=>'required',
                'province'=>'required',
                'district'=>'required',
                'sector'=>'required',
                'cell'=>'required',

            ]
            );

        $manager_id=$formfields['co_operativemanager'];
        $manager_details = User::find($manager_id);
        $managername=$manager_details->name;
        $formfields['co_operativemanager']=$managername;


        $provincecode=$formfields['province'];

        $province_details = Province::find($provincecode);
        $province_name=$province_details->provincename;
        $formfields['province']=$province_name;

        $districtcode=$formfields['district'];

        $district_details= District::where('provincecode', $provincecode)
        ->where('districtcode', $districtcode)
        ->first();
        $district_name =$district_details->namedistrict;
        $formfields['district']= $district_name;



        $sectorcode = $formfields['sector'];
        $sector_details = Sector::where('districtcode', $districtcode)->where('sectorcode', $sectorcode)
        ->first();

        $sector_name =$sector_details->namesector;
        $formfields['sector']=  $sector_name;


        $codecell = $formfields['cell'];
        $cell_details = Cell::where('sectorcode', $sectorcode)->where('codecell', $codecell)
        ->first();
        $name_cell =   $cell_details->nameCell;
        $formfields['cell']=$name_cell;

        // codecell

        // dd($name_cell);


        $cooperative=Cooperative::create($formfields);
        $cooperative->users()->attach($manager_id);
        return redirect('/cooperatives');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function show(Cooperative $cooperative ,User $user)
    {

        $auth_user=auth()->user()->id;
        $cooperative_id = DB::table('cooperative_user')
                         ->where('user_id',$auth_user)
                         ->value('cooperative_id');
        $cooperativeInfo=Cooperative::find($cooperative_id);


        // dd($auth_user);
        return view('Cooperative.show',['cooperativeInfo'=>$cooperativeInfo]);
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
