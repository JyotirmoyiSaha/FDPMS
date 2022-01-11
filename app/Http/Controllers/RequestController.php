<?php

// namespace App\Http\Controllers;
// use App\Models\Product;
// use App\Models\ProductCategory;
// use App\Models\Requisitiondetails;

// use Illuminate\Http\Request;

// class RequestController extends Controller
// {
   //request
//    public function request($request_id)
//    {
       
    //    $categories = ProductCategory::all();
       // variable name= Model name;
       //dd($requisitions);
    //    $products =Product::find($request_id);
       // $requests=Requisition::find($request_id);
   
//        return view('website.pages.request', compact('categories', 'products'));
//    }

//    public function requestStore(Request $request,$request_id)
//    {
//        // dd($request->all());
       // table field name -- input field name
//        $products =Product::find($request_id);
       
//        Requisitiondetails::create([
//                'item_id'=>$products->id,
//                'item_name'=>$products->product_name,
//                'item_price'=>$products->product_price,
//                'item_quantity'=>$request->quantity,
//                'item_subtotal'=>$products->product_price*$request->quantity
//            ]);
          
//           return redirect()->back()->with('success',' Requit successfully.');
//        }
// }
