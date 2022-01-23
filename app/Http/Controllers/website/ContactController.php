<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ContactController extends Controller
{
   public function contact(){
    $categories = ProductCategory::all();
       return view('website.pages.contact', compact('categories'));
   }
}
