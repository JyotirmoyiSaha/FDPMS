<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requisition;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Requisitiondetails;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class RequisitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function webrequisition()
    {
        $requisitions = Requisition::all();
        $categories = ProductCategory::all();
        $products = Product::all();
        // variable name= Model name;
        //dd($requisitions);
    
        return view('website.pages.requisition', compact('categories','products'));
    }
    public function requisitioncreate(){
        $categories = ProductCategory::all();
        $products = Product::all();
        // dd($stocks);
            return view('website.pages.requisition',compact('categories','products'));
    }



//for cart
    public function webrequisitionStore(Request $request)
    {
        // dd($request->all());
        // table field name -- input field name
        $products =Product::find($request->product_name);
        // dd($products);
       
            Cart::create([
                'user_id'=>auth::user()->id,
                'product_id'=>$request->product_name,
                'product_name'=>$products->product_name,
                'product_quantity'=>$request->quantity,
                'product_price'=>$products->product_price,
                
            ]);
           
           return redirect()->back()->with('success',' Requit successfully.');
        }

        public function cartlist(){
            $categories = ProductCategory::all();
            $cartlists= Cart::where('user_id',auth::user()->id)->get();
            return view('website.pages.cartlist',compact('categories','cartlists'));

        }

        public function cartconfirm($id){
            // dd($id);
            $categories = ProductCategory::all();
            $cartlists = Cart::where('user_id',$id)->get();
            // dd($cartlists);
            foreach ($cartlists as $key => $value) {
                Requisitiondetails::create([
                    'user_id'=>$id,
                    'item_id'=>$value->product_id,
                    'item_name'=>$value->product_name,
                    'item_price'=>$value->product_price,
                    'item_quantity'=>$value->product_quantity,
                    'item_subtotal'=>$value->product_quantity*$value->product_quantity,
            ]);
            }
            foreach ($cartlists as $key => $value)
            {
                $value->delete();
            }
            return redirect()->back();
            
        }
    
}
