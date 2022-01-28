<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\DealerStock;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class DealerstockController extends Controller
{
    public function dealerstocklist(){
        $categories = ProductCategory::all();
        $dealerstocks = DealerStock::with('product')->where('user_id',auth()->user()->id)->get();
        // dd($dealerstocks);
        return view('admin.pages.dealer stock.dstock-list',compact('dealerstocks', 'categories'));
    }

    public function dealerstockCreate(){
        $categories = ProductCategory::all();
        $products = Product::all();
        return view('admin.pages.dealer stock.dstock-create',compact('products','categories'));
    }
    public function dealerstockStore(Request $request){
        // dd($request->all());
        $checkIfExist=DealerStock::where('product_id',$request->product_id)->first();
  
        // dd($request->all());
        if($checkIfExist)
        {

            $checkIfExist->update([
                'dealerstock_quantity'=>$checkIfExist->dealerstock_quantity+$request->dealerstock_quantity,
            ]);
        }else{
            DealerStock::create([
                'product_id'=>$request->product_id,
                'dealerstock_quantity'=>$request->dealerstock_quantity,
            ]);
        }
        
        return redirect()->route('admin.dealerstock.list')->with('success','Stock Saved successfully.');
    }
  
}
