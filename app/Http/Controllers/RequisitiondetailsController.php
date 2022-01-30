<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequisitionDetails;
use App\Models\Stock;
use App\Models\DealerStock;
use App\Models\Requisition;

class RequisitiondetailsController extends Controller
{
    public function rdetails($id){
        $requisitiondetails = RequisitionDetails::where('requisition_id',$id)->get();
        $requisitionlist=Requisition::find($id);

        return view('admin.pages.requisition.details.rdetails',compact('requisitiondetails','requisitionlist'));
    }

    public function action($id)
    {
        // dd(request()->action);
        // dd($id);
        $data = RequisitionDetails::find($id);
    //    dd($data);
        $data->update([
            'status'=>request()->action,
        ]);


        //stock calculation

        $adminstock=Stock::where('product_id',$data->product_id)->first();
        // dd($adminstock);
        if ($adminstock->stock_quantity>=$data->product_quantity) {
            $adminstock->update([
                'stock_quantity'=>$adminstock->stock_quantity - $data->product_quantity,
    
            ]);

            $requisition=Requisition::find($data->requisition_id);
            $dealerStock=DealerStock::where('product_id',$data->product_id)->where('user_id',$requisition->user_id)->first();
            if($dealerStock)
            {
                $dealerStock->update([
                    'dealerstock_quantity'=>$dealerStock->dealerstock_quantity + $data->product_quantity,
    
            ]);
            }else{
                DealerStock::create([
                    'dealerstock_quantity'=>$data->product_quantity,
                    'product_id'=>$data->product_id,
                    'user_id'=>$requisition->user_id
    
            ]);
            }
           
            return redirect()->back();
        }
        else
        {
            return redirect()->back()->with('success','Product quantity not available.');
        }
       

        
        
    }
}
