<?php

namespace App\Http\Controllers;
use App\Models\Distribution;
use App\Models\Product;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function distributionlist(){
        $distributions = Distribution::all();
      
        return view('admin.pages.distributions.distribution-list',compact('distributions'));
    }

    public function distributioncreate(){
        $products = Product::all();
         return view('admin.pages.distributions.distribution-create',compact('products'));
    }
    public function distributionStore(Request $request)
    {
        // dd($request->all());
        // table field name -- input field name

        
            Distribution::create([
                'item_name'=>$request->item_name,
                'location'=>$request->location,
                'quantity'=>$request->quantity,
            ]);
           
           return redirect()->route('admin.distribution.list')->with('success',' Distribute successfully.');
        }
}
