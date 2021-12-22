<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        // $products= Product::all();
        //dd($products);
        // return view('website.pages.product',compact('products'));
        return view('website.pages.product');
    }

}
