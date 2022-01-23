<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequisitionDetails;
use App\Models\Report;
use App\Models\Product;


class ReportController extends Controller
{
   public function report(){

    $report=[];
     
       if(request()->has('from_date'))
       {
        $fromDate=request()->from_date;
        $toDate=request()->to_date;
    
 
        $report=RequisitionDetails::where('status','Approve')
        ->whereDate('created_at','>=',$fromDate)
        ->whereDate('created_at','<=',$toDate)
        ->get();
        // dd($report->all());
           
       }
    
       return view('admin.pages.report.report',compact('report'));

   }

   public function reportStore(Request $request)
   {
    //    dd($request->all());
       // table field name -- input field name

       
        Report::create([
               'requisition_id'=>$request->requisition_id,
               'product_name'=>$request->product_id,
               'product_quantity'=>$request->product_quantity,
               'product_price'=>$request->product_price,
               'subtotal'=>$request->subtotal,
               'location'=>$request->location,
           ]);
          
          return redirect()->back();
       }
   
}