<?php

namespace App\Http\Controllers;
use App\Models\DealerStock;
use App\Models\Product;

use Illuminate\Http\Request;

class DealerstockController extends Controller
{
    public function dealerstocklist(){
        $dealerstocks = DealerStock::with('product')->get();
        // dd($dealerstocks);
        return view('admin.pages.dealer stock.dstock-list',compact('dealerstocks'));
    }

    public function dealerstockCreate(){
        $products = Product::all();
        return view('admin.pages.dealer stock.dstock-create',compact('products'));
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
