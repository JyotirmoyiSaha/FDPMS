<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Home;

use App\Models\User;
use App\Models\Requisition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        // $date=Carbon::now();
        $count=Requisition::whereDate('created_at', Carbon::today())->count();
        //  dd($count);
        // dd($date);
        return view('admin.pages.home',compact('count'));
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
