<?php

namespace App\Http\Controllers\website;

use App\Models\User;
use App\Models\Requisition;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\RequisitionDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class UserprofileController extends Controller
{
    public function userprofile(){
        $categories = ProductCategory::all();
        $profile= User::where('id',Auth::User()->id)->first();
        // dd($requsition);
        return view('website.pages.userprofile',compact('categories','profile'));
    }

    public function userprofileupdate(Request $request,$id)
    {
        // dd($request->all());
        $profile=User::find($id);
        $profile->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
           

        ]);
        return redirect()->back()->with('msg','Profile Updated');
    }
}
