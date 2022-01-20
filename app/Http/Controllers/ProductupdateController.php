<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;

use Illuminate\Http\Request;

class ProductupdateController extends Controller
{
    public function productEdit($id){
        //category finding
        $products = Product::with('product_category')->get();
        $prodlist=ProductCategory::all();
        //    return view('admin.pages.product.product-list');
//category finding
           //updated
        // dd($id);
        $product = Product::findOrFail($id);
        return view ('admin.pages.product.product-update',compact('product','products','prodlist'));
    }

    
        
    
       
    public function productUpdate(Request $request, $id){
            
        $pro = product::find($id);

            $filename=$pro->product_image;
         if ($request->hasfile('product_image')) {
                // dd('true');
                $file=$request->file('product_image');
                $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads',$filename);
                // dd($filename);
                
            }
            $pro->update([
                'product_name'=>$request->product_name,
                'product_price'=>$request->product_price,
                'dealer_price'=>$request->dealer_price,
                'product_details'=>$request->product_details,
                'product_category_id'=>$request->product_category,
            ]);
           
           return redirect()->route('admin.product.create')->with('success','Product created successfully.');
       }
}
