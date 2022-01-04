<?php

namespace App\Http\Controllers;
use App\Models\DealerStock;

use Illuminate\Http\Request;

class DealerstockController extends Controller
{
    public function dealerstocklist(){
        return view('admin.pages.dealer stock.dstock-list');
    }

    public function dealerstockCreate(){
            return view('admin.pages.dealer stock.dstock-create');
    }
    public function dealerstockStore(Request $request){
        dd($request->all());
        DealerStock::create([
            'dealerstock_item'=>$request->dealerstock_item,
            'dealerstock_quantity'=>$request->dealerstock_quantity,
        ]);
        return redirect()->route('admin.dealerstock.list')->with('success','Stock Saved successfully.');
    }
  
}
