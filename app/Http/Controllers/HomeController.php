<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }

    public function userList(){
        $users = User::all();
        // dd($users);
        return view('admin.pages.users.user-list',compact('users'));
    }

}
