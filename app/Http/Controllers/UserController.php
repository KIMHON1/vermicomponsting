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
use App\Notifications\EmailNotification;


use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;

use Illuminate\Support\Arr;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return User::all();  
        $users =User::all();
        $count = collect($users)->count();
      
        return view('Dashboard.users1',compact('users'))->with('i');
    }




    public function create_Admin_User(){

        return view('Dashboard.Adimn_create_User');

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
        //

        $user=User::create($request->all());
        return view('Auth.login');
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
    public function update(Request $request,User $user )
    {
        //

       
        $formFields = $request->validate([
         
            'name'  => ['required','min:3'],
            'email'     => 'required,email',
            'password'  => 'required|confirmed',
            'Role' => 'nullable'
        ]);
        $formFields['password']=bcrypt($formFields['password']);
        $user = $user->create($formFields);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

       

        return redirect();
    

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
            'Role' => 'nullable'
        ]);



// this create user
        $formFields['password']=bcrypt($formFields['password']);

        $user = User::create($formFields);
        $user->assignRole($request->input('roles'));
    

        
        
        
       // $user->assignRole('Admin');
// user taking key token
        $token = $user->createToken('myapptoken')->plainTextToken;
        
// user information in response        
        
        $response = [
            'user'=>$user,
            'token'=>$token
        ];
       
        $user->notify(new EmailNotification($user));
         return redirect('/login');
       

    }






    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)){
            if(auth()->user()->hasRole('Admin')){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            
                return redirect()->intended('/dashboard');
            
        }
    
    }
        // else if(Auth::attempt($credentials))
        //   {
        //    return redirect()->intended('/bins');
        //     }
      else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
}

public function logout(Request $request){
    // auth()->logout();

   // Auth::logout();
    session_start();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    session_destroy();

   return redirect('/');
}


}
