<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;


class ProductController extends Controller
{
    public function product()
    {
        // $products= Product::all();
        //dd($products);
        // return view('website.pages.product',compact('products'));
        return view('website.pages.product');
    }

    public function productCategory($id){
        // dd($id);
        $categories = ProductCategory::all();
        $products = Product::where('product_category_id',$id)->get();
        // dd($products);
        return view('website.pages.product',compact('products','categories'));
    }

}
