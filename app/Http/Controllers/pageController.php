<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use App\Models\User;
use App\Models\Bincondition;
use App\Models\Location;
use App\Models\Member;
use App\Models\Cooperative;
use Illuminate\Support\Facades\DB;
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

        $locations = Location::where('user_id', auth()->user()->id)->get();


        $auth_user=auth()->user()->id;
        $cooperative_id = DB::table('cooperative_user')
                         ->where('user_id',$auth_user)
                         ->value('cooperative_id');
         $status = 0;
         $verm_proccess= DB::table('plantings')
                         ->where('status',$status)
                         ->count();



        $statuss = 1;
        $no_verm_procces= DB::table('plantings')
                         ->where('status', $statuss )
                         ->count();



                      //dd(   $no_verm_procces);

        $cooperativeInfo=Cooperative::find($cooperative_id);

        $total_bins = Bin::where('cooperative_id', $cooperative_id)->count();
        $total_members = Member::where('cooperative_id', $cooperative_id)->count();
        $binis = Bin::where('cooperative_id', $cooperative_id)->get();
        // $bins_id = [];
        // foreach($bins as $b){
        //  $bins_id[] = $b->id;
        // }
        // dd( $bins_id);




        $currentMonth = date('m');
        $currentYear = date('Y');



        $previousMonth = $currentMonth - 1;
      $previousYear = $currentYear;

      $previous_month_member = DB::table('members')
      ->where('cooperative_id',$cooperative_id)
      ->select('id', DB::raw('COUNT(*) as previous_month_total'))
      ->whereMonth('created_at', $previousMonth)
      ->whereYear('created_at', $currentYear)
      ->groupBy('id')
      ->count();

      $current_month_member = DB::table('members')
      ->where('cooperative_id',$cooperative_id)
      ->select('id', DB::raw('COUNT(*) as previous_month_total'))
      ->whereMonth('created_at',$currentMonth)
      ->whereYear('created_at', $currentYear)
      ->groupBy('id')
      ->count();


    //   $new_members_per_month = DB::table('members')
    //     ->selectRaw(' MONTH(created_at) as month, COUNT(*) as new_members')
    //     ->where('cooperative_id', $cooperative_id)
    //     ->groupBy( 'month')
    //     ->count();


    //   $percentageIncrease = ($current_month_member -  $previous_month_member) / $previous_month_member * 100;
    //   dd( $previous_month_member);



















































































        foreach($locations as $location)
        {



            if ($location) {




                return view('Dashboard.adminlanding',['user'=>$user,'count'=>$count,'bins_number'=>$bins_number,'active_accounts'=>$active_accounts,'inactive_accounts'=>$inactive_accounts, 'cooperativeInfo'=>$cooperativeInfo, 'total_bins'=>$total_bins, 'total_members'=>$total_members,'verm_proccess'=>   $verm_proccess,
                'no_verm_procces'=>$no_verm_procces
            ]);



        }



                 }


                 return redirect('/location');


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









    public function databaseNoIndex(){

        $notifications = auth()->user()->Notifications;
        return view('notify.database_condition', compact('notifications'));
    }



    public function markNotification(Request $request)
    {
        auth()->user()
            ->Notifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
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
