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
use CanResetPassword;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Illuminate\Support\Arr;



class UserController extends Controller
{

// displaying all users in admin dashboard
    public function index()
    {
        if(auth()->user()->can('view-users-admin')){
            $users =User::all();
            $count = collect($users)->count();
            return view('Dashboard.users1',compact('users'))->with('i');
        }
    }

//Creating Role through admin dashboard

    public function create_Admin_User(Request $request, User $user){
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('Dashboard.Adimn_create_User',['roles'=>$roles,'userRole'=>$userRole]);
    }


// Assigning Role to user

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

 //Createing New user in Admin dashboard

    public function store(Request $request)
    {
        $this->validate($request,
        [
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

        return redirect('/vermusers')->with('success','user Created success full');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }


    public function showadmin($id)
    {
        //

        $user= User::find($id);


    }

// Edit user in Admin Dashboard

    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('Dashboard.edit_user',['user'=>$user,'roles'=>$roles,'userRole'=>$userRole]);
    }

    public function update(Request $request, $id)
    {
        

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,

            'roles' => 'required'
        ]);
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
//Deleting user 

    public function destroy($id)
    {
   
        User::destroy($id);
        return redirect('/vermusers');
    }


//Registering new user 
    public function register(Request $request){
       
        $formFields = $request->validate([

            'name'  => ['required','min:3'],
            'email'     => 'required|unique:users,email',
            'password'  => 'required|confirmed',
        ]);

        // this create user
        $formFields['password']=bcrypt($formFields['password']);
        $user = User::create($formFields);

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

//Login
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

//Logout
    public function logout(Request $request){
        session_start();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session_destroy();
    return redirect('/');
    }



//Users status update being enabled or desabled

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

            $user = User::find($user_id);
            $activityLogs = $user->activityLogs;
    }


//reseting pass word
    public function showResetForm(Request $request, $token = null)
    {
        return view('Auth.getmailform', [
            'token' => $token,
            'email' => $request->email,
        ]);

        }
    public function reset(Request $request)
        {
            // Validate the request data
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
            ]);

            // Call the Password::reset() method with the user's credentials
            $response = Password::reset([
                'email' => $request->email,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
                'token' => $request->token,
            ], function ($user, $password) {
                // Update the user's password
                $user->password = bcrypt($password);
                $user->save();
            });

            // Redirect the user to the login page with a success message
            if ($response === Password::PASSWORD_RESET) {
                return redirect()->route('login')->with('status', trans($response));
            }

            // Redirect the user back to the password reset form with an error message
            return back()->withErrors(['email' => trans($response)]);
        }




    }
