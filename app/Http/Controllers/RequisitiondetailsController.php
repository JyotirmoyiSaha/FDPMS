<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequisitionDetails;
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
        // dd($id, request()->all());
        $data = RequisitionDetails::where('id',$id)->first();
        $data->update([
            'status'=>request()->action,
        ]);

        //stock calculation

        $adminstock=Stock::where('product_id',$data->product_id)->first();
        $adminstock->update([
            'stock_quantity'=>$adminstock->stock_quantity - $data->product_quantity,

        ]);

        
        $dealerStock=DealerStock::where('product_id',$data->product_id)->first();
        $dealerStock->update([
            'dealerstock_quantity'=>$dealerStock->dealerstock_quantity - $data->product_quantity,

        ]);
        return redirect()->back();
    }
}
