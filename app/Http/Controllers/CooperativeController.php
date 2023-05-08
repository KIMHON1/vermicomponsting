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
use App\Models\Member;
use App\Models\Bin;
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
        $users = User::all();
        $cooperatives = Cooperative::all();
    //     $managerIds = $cooperatives->users()->pluck('users.id');
    //    ;



        return view('Cooperative.index',[ 'cooperatives'=>$cooperatives,'users'=>$users])->with('i');
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
    public function show(Cooperative $cooperative ,User $user, Member $menber)
    {

        $auth_user=auth()->user()->id;
        $cooperative_id = DB::table('cooperative_user')
                         ->where('user_id',$auth_user)
                         ->value('cooperative_id');
        $cooperativeInfo=Cooperative::find($cooperative_id);








        $Members=Member::where('cooperative_id',$cooperative_id)->get();




        return view('Cooperative.show',['cooperativeInfo'=>$cooperativeInfo, 'Members'=>$Members])->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function edit(Cooperative $cooperative)
    {
        // $
        $managers = User::where('Roles','Manager')->get();
        $provinces = Province::all();


        return view('Cooperative.edit_cooperative',['cooperative'=>$cooperative,'managers'=>$managers,'provinces'=>$provinces]);
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


        $cooperative->update($formfields);
        $cooperative->users()->detach($manager_id);
        $cooperative->users()->attach($manager_id);
        return redirect('/cooperatives');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cooperative  $cooperative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cooperative $cooperative)
    {
    //  dd($cooperative);
        // $cooperativeId->delete();

        // $cooperative = Cooperative::Find($cooperative->id);
        $cooperative->delete();
        return redirect('/cooperatives');
    }




    public function updateStatus(Cooperative $cooperative, $status_code)
    {

            $cooperative = Cooperative::find($cooperative->id);
            $cooperative->status = $status_code;
            $update_cooperative=$cooperative->save();

            if ($update_cooperative) {
                return redirect('/cooperatives')->with('success', 'Cooperative  status updated successfully');
            }

            return redirect('/cooperatives')->with('error', 'Failed to update the cooperative');

    }

}
