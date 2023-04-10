<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades;
use Notification;
use App\Notifications\Vermicomposting;


use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;

use Illuminate\Support\Arr;



class UserController extends Controller
{




    // function __construct()
    // {
    //  $this->middleware('permission:view-users-admin|view-roles-admin', ['only' => ['index','store']]);
    // // $this->middleware('permission:create-roles', ['only' => ['create','store']]);
    // //       $this->middleware('permission:update-roles', ['only' => ['edit','update']]);
    // //  $this->middleware('permission:delete-roles', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return User::all();
        if(auth()->user()->can('view-users-admin')){
            $users =User::all();
            $count = collect($users)->count();


            return view('Dashboard.users1',compact('users'))->with('i');
        }

    }


    public function create_Admin_User(Request $request, User $user){
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        // $roles=Role::all();

        return view('Dashboard.Adimn_create_User',['roles'=>$roles,'userRole'=>$userRole]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'  => ['required','min:3'],
            'email'     => 'required|unique:users,email',
            'password'  => 'required|confirmed',
            'roles' => 'required'
        ],
    [
        'name.required'=>'Name is required',
        'email.required'=>'email is required',
        'password.required'=>'password is required',

    ]
);

$user=new User;
$user->name=$request->name;
$user->email=$request->email;
$user->password=Hash::make($request->password);


$user->Roles=implode(', ',$request->roles);

if($user->save()){

    $user->assignRole($request->input('roles'));
}




// this create user
// $input = $request->all();
// $input['password'] = Hash::make($input['password']);

// $user = User::create($input);
// $user->assignRole($request->input('roles'));




       // $user->assignRole('Admin');
// user taking key token
        // $token = $user->createToken('myapptoken')->plainTextToken;

// user information in response

        // $response = [
        //     'user'=>$user,
        //     'token'=>$token
        // ];
return redirect('/vermusers')->with('success','user Created success full');




        // $user=User::create($request->all());
        // return view('Auth.login');
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

        return User::find($id);
    }


    public function showadmin($id)
    {
        //

        $user= User::find($id);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('Dashboard.edit_user',['user'=>$user,'roles'=>$roles,'userRole'=>$userRole]);
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

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,

            'roles' => 'required'
        ]);
//$formFields['password']=bcrypt($formFields['password']);

        // $input = $request->all();
        // $user = User::find($id);
        // DB::table('model_has_roles')->where('model_id',$id)->delete();


        // $user->update($input);
        // $user->assignRole($request->input('roles'));
        // $rol=$request->input('roles');

        // dd($user);
        $input = User::find($id);
        $input->name=$request->input('name');
        $input->email=$request->input('email');
        $input->Roles=implode(', ',$request->roles);;

        if($input->update()){
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $input->assignRole($input->Roles);

        }




        return redirect('/vermusers')->with('success','User updated successfully');




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
        User::destroy($id);
        return redirect('/vermusers');
    }


      /**
     * search the specified resource from storage.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        //

    return User::where('name','like','%'.$name.'%')->get();
    }







    public function register(Request $request){


        // validating  body request


        $formFields = $request->validate([

            'name'  => ['required','min:3'],
            'email'     => 'required|unique:users,email',
            'password'  => 'required|confirmed',


        ]);



// this create user
        $formFields['password']=bcrypt($formFields['password']);

        $user = User::create($formFields);









       // $user->assignRole('Admin');
// user taking key token
        $token = $user->createToken('myapptoken')->plainTextToken;

// user information in response

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        $user->notify(new Vermicomposting($user));
         return redirect('/login');


    }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)){

            $request->session()->regenerate();


                return redirect()->intended('/dashboard');

        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }


    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
    //     if (Auth::attempt($credentials)){
    //         if(auth()->user()->hasRole('Admin')){
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard');
    //     } else {

    //             return redirect()->intended('/dashboard');

    //     }

    // }
        // else if(Auth::attempt($credentials))
        //   {
        //    return redirect()->intended('/bins');
        //     }
//       else{
//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ])->onlyInput('email');

//     }
// }

public function logout(Request $request){
    // auth()->logout();

   // Auth::logout();
    session_start();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    session_destroy();

   return redirect('/');
}




public function updateStatus($user_id,$status_code){
    try{
        $update_user = User::whereId($user_id)->update(['status'=>$status_code]);

        if($update_user){
            return redirect('/vermusers')->with('success','User Updated success full');
        }

        return redirect('/vermusers')->with('error','failed to  Updated the status');

    }
     catch(\Throwable $th){
         throw $th;
     }

}
}
