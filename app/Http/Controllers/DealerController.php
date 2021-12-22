<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function dealerlist(){
        return view('admin.pages.dealers.dealer-list');
    }

    public function dealercreate(){
        return view('admin.pages.dealers.dealer-create');
    }
}
