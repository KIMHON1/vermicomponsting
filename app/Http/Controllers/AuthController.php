<?php

namespace App\Http\Controllers;


use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades;
use Notification;
use App\Notifications\EmailNotification;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;


class AuthController extends Controller
{

    public function passwordEmail(Request $request)
    {
        return view('Auth.getmailform');

}

}
