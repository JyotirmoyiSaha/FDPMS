<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Models\Product;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stocklist(){
        $stocks = Stock::with('product')->get();
        // dd($stocks);
        return view('admin.pages.stock.stock-list',compact('stocks'));
    }

    public function stockcreate(){
        $products = Product::all();
        // dd($stocks);
            return view('admin.pages.stock.stock-create',compact('products'));
    }
 //stock table database connection start
    public function stockStore(Request $request)
    {
       
        // dd($request->all());
        // table field name -- input field name

        $checkIfExist=Stock::where('product_id',$request->product_id)->first();
  
        if($checkIfExist)
        {

            $checkIfExist->update([
                'stock_quantity'=>$checkIfExist->stock_quantity+$request->stock_quantity,
            ]);
        }else{
            Stock::create([
                'product_id'=>$request->product_id,
                'stock_quantity'=>$request->stock_quantity,
            ]);
        }
           
           return redirect()->route('admin.stock.list')->with('success','Stock Saved successfully.');
        }
           //Stock table database connection end
            //delete
    
      public function stockDelete($stock_id)
      {
         Stock::find($stock_id)->delete();
         return redirect()->back()->with('success','Stock Deleted.');
      }
  
     //delete end
  


}
