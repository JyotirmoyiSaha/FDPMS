<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\ProductCategory;


class HomeController extends Controller
{
    public function home()
    {
        $categories = ProductCategory::all();
        // dd($categories);
        return view('website.pages.home',compact('categories'));
    }
}
