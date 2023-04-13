<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\District;
use App\Models\Sector;
use App\Models\Cell;
use App\Models\Village;

class MemberController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $formfields = $request->validate([
            'firstname'=>'required',
            'secondname'=>'required',
            'phonenumber'=>'required',
            'email'=>'required',
            'province'=>'required',
            'district'=>'required',
            'sector'=>'required',
            'cell'=>'required',


        ]);
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



        $auth_user=auth()->user()->id;
        $cooperative_id = DB::table('cooperative_user')
                         ->where('user_id',$auth_user)
                         ->value('cooperative_id');

        $formfields['cooperative_id']= $cooperative_id;


        Member::create($formfields);



        return redirect('/cooperatives/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
