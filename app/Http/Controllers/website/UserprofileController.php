<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class UserprofileController extends Controller
{
    public function userprofile(){
        $categories = ProductCategory::all();
        $profile= User::where('id',Auth::User()->id)->first();

        return view('website.pages.userprofile',compact('categories','profile'));
    }
}
