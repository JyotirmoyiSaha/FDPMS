<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function productlist(){
    $products = Product::with('product_category')->get();
    $prodlist=ProductCategory::all();
    //    return view('admin.pages.product.product-list');
       return view('admin.pages.product.product-list',compact('products','prodlist'));
       $request->validate([
           
       ]);
      
   }
   public function productcreate(){
  
    $products = Product::with('product_category')->get();
    // dd($products);
    return view('admin.pages.product.product-create',compact('products'));
}
     //Product table database connection

   public function productStore(Request $request){
    //    dd($request->all());
    // table field or collume name -- input field name
    //Image
     //    dd($request->all());
        // dd(date('Ymdhms'));
        $filename='';
        if ($request->hasfile('product_image')) {
            // dd('true');
            $file=$request->file('product_image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
            // dd($filename);
            
        }
       Product::create([
           'product_image'=>$filename,
           'product_name'=>$request->product_name,
           'product_price'=>$request->product_price,
           'product_details'=>$request->product_details,
           'product_category_id'=>$request->product_category,
       ]);
       return redirect()->back()->with('success','Product created successfully.');
   }
   //Product table database connection end


   //Productcreate table database connection
   public function prodList(){
       $prodlist=ProductCategory::all();
       return view('admin.pages.products_category.list',compact('prodlist'));
   }
   public function prodcreate(){
       return view ('admin.pages.products_category.create');
   }

   //Product create table database connection

   public function procreateStore(Request $request){
    // dd($request->all());
    $filename='';
        if ($request->hasfile('image')) {
            // dd('true');
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
            // dd($filename);
   }
   ProductCategory::create([
    'image'=>$filename,
    'category_name'=>$request->category_name,
    'details'=>$request->details,
  
]);
return redirect()->back()->with('success','Product created successfully.');

 } 
}
