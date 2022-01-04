<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\ProductCategory;

class AboutController extends Controller
{
    public function about()
    {
        // $abouts=About::all();
        // variable name= Model name;
        //dd($about);
        $categories = ProductCategory::all();
    
        return view('website.pages.about',compact('categories'));
    }

}
