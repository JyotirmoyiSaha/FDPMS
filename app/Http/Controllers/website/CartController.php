<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;


class CartController extends Controller
{
    //cart
    public function requisitionList()
    {
         $products=Product::all();
      
         $categories = ProductCategory::all();
      // variable name= Model name;
    
        return view('website.pages.cartlist', compact('categories','products'));
     }
     
   public function addToCart(Request $request)
   {
      $product = Product::where('id',$request->product_id)->first();
      $cart=session()->has('cart')? session()->get('cart'):[];

      if(array_key_exists($product->id, $cart)){
         $cart[$product->id]['quantity']++;
         $cart[$product->id]['total_price']=$cart[$product->id]['quantity']* $cart[$product->id]['product_price'];
      
      }else{
         $cart[$product->id]=[
            'product_id'=>$product->id,
            'product_name'=>$product->product_name,
            'product_price'=>$product->product_price,
            'dealer_price'=>$product->dealer_price,
            'product_details'=>$product->product_details,
            'product_image'=>$product->product_image,
            'quantity'=>$request->quantity,
            'total_price'=>$product->product_price*$request->quantity,
            'date' => Carbon::now(),
          
         ];
      }
      // dd($cart);
      session()->put('cart',$cart);
      return redirect()->back();

   }

   //deny
   public function cartDelete($id){
      // dd($id);
      $cart = session()->get('cart');
      // dd($cart);
      unset($cart[$id]);
      session()->put('cart',$cart);
     return redirect()->back()->with('error','carted product havebeen deleted');
  }
  //deny end


}

