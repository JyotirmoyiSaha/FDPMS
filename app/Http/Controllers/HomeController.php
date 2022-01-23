<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }

    public function userList(){
        $key=null;
        if(request()->search)
        {
            $key=request()->search;
            $users = Home::where('name','LIKE','%'.$key.'%')
                ->get();
                // ->orWhere('type','LIKE','%'.$key.'%')
              
            return view('admin.pages.users.user-list',compact('users','key'));
        }
        $users = Home::all();
        // dd($users);
        return view('admin.pages.users.user-list',compact('users','key'));
    }


    //view details
   public function userDetails($user_id)
   {
     $users=Home::find($user_id);
       return view('admin.pages.users.user-details',compact('users'));
   }
     //view end

      //delete
      public function userDelete($user_id)
    {
       Home::find($user_id)->delete();
       return redirect()->back()->with('success','User Deleted.');
    }
   //delete end

}
