<?php

namespace App\Http\Controllers;


use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades;


class AuthController extends Controller
{
    //


    public function register(Request $request){


        // validating  body request


        $fields = $request->validate([
         
            'name'  => 'required|string',
            'email'     => 'required|string|unique:users,email',
            'password'  => 'required|string|confirmed'
        ]);



// this create user

        $user = User::create([

           
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])

        ]);


        $user = User::first();
        $user->assignRole('Admin');

        
       // $user->assignRole('Admin');
// user taking key token
        $token = $user->createToken('myapptoken')->plainTextToken;
        
// user information in response        

        $response = [
            'user'=>$user,
            'token'=>$token
        ];
 
         return redirect('/login');
       

    }






    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials) && Auth()->user()->role=='Admin'){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        else if(Auth::attempt($credentials))
          {
           return redirect()->intended('/bins');
            }
      else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }
}


    
    //public function login(Request $request){


        // validating  body request


        // $fields = $request->validate([
            
        //     'email'     => 'required|string|',
        //     'password'  => 'required|string|'
        // ]);



// check email
    //    $user = User::where('email', $fields['email'])->first();
    

//check password

    //    if(!$user || !Hash::check($fields['password'], $user->password)){
    //        return response(['message' => 'Bad creds'], 401);
      //  }
// user taking key token
     //   $token = $user->createToken('myapptoken')->plainTextToken;
        
// user information in response        

    //     $response = [
    //         'user'=>$user,
    //         'token'=>$token
    //     ];
 
    //     // return response($response, 201);

    //     return view('Auth.login');
    // }




    // public function logout(Request $request){
    //      auth()->user()->tokens()->delete();

    //     return [
    //         'message' => 'Loged out'
    //     ];
    // }

    public function logout(Request $request){
        //Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

       return redirect('/');
   }
}
