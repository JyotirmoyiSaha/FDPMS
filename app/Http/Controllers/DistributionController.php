<?php

namespace App\Http\Controllers;
use App\Models\Distribution;
use App\Models\Product;
use App\Models\RequisitionDetails;
use App\Models\User;


use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function distributionlist(){
        
        $distributions = RequisitionDetails::where('status', 'Approve')->get();
    //   dd($distributions);
        return view('admin.pages.distributions.distribution-list',compact('distributions'));
    }
    // public function distributioncreate(){
    //     $products = Product::all();
    //      return view('admin.pages.distributions.distribution-create',compact('products'));
    // }
    public function distributionStore(Request $request)
    {
        // dd($request->all());
        // table field name -- input field name

        
            Distribution::create([
                'requisition_id'=>$request->requisition_id,
                'product_id'=>$request->product_id,
                'product_quantity'=>$request->product_quantity,
                'product_price'=>$request->product_price,
                'subtotal'=>$request->subtotal,
                'location'=>$request->location,
            ]);
           
           return redirect()->back();
        }
}
