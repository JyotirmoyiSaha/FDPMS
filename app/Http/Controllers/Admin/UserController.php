<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
       return view('admin.login');
    }
    public function doLogin(Request $request)
    {
        // dd($request->all());

        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');

// dd($userInfo);
// dd(Auth::attempt($userInfo));
        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.master')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }
}
