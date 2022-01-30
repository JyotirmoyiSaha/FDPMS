<?php

namespace App\Http\Controllers\website;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function registration(){
        return view('website.fixed.header');
    }

    public function registrationstore(Request $request)
    {

        //    dd($request->all());
        // table field or collume name -- input field name
        //Image
          //      dd($request->all());
        // dd(date('Ymdhms'));
        $filename='';
        if ($request->hasfile('user_image')) {
            // dd('true');
            $file=$request->file('user_image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
            // dd($filename);
        }
        // $request->validate([
        //    'user_name'=>'require',
        //    'user_email'=>'require',
        // //    |unique:users',
        //    'user_password'=>'require',
        //    'user_mobile'=>'require',
        //    'user_address'=>'require',
          
        // ]);
        //    dd($request->all());
        User::create([
           'image'=>$filename,
           'name'=>$request->user_name,
           'email'=>$request->user_email,
           'password'=>bcrypt($request->user_password),
           'mobile'=>$request->user_mobile,
           'address'=>$request->user_address,
           'role'=>$request->type,
        ]);

        return redirect()->back()->with('message','Registration successful.');


    }
    

    public function login(Request $request)
    {
        // dd($request->all());

        $userInfo=$request->except(['_token']);

        // dd(Auth::attempt($userInfo));
        if(Auth::attempt($userInfo)){
            return redirect()->back()->with('sucess','Login successfully');
        }
        return redirect()->back()->with('error','Invalid user credentials');

       
       
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        


    }



    public function logout()
    {
        Session::flush();
        Auth::logout();
     return redirect()->back()->with('message','Logging out.');
    }

}
