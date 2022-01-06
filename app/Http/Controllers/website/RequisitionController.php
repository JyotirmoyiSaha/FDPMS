<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requisition;
use App\Models\ProductCategory;

class RequisitionController extends Controller
{
    public function webrequisition()
    {
        
        $categories = ProductCategory::all();
        // variable name= Model name;
        //dd($requisitions);
    
        return view('website.pages.requisition', compact('categories'));
    }
}
