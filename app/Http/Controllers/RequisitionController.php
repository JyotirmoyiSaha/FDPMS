<?php

namespace App\Http\Controllers;
use App\Models\Requisition;
use App\Models\Requisitiondetails;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function rlist(){
        $requisitionlists = Requisitiondetails::where('status','Approve')->get();
        // dd($requisitionlists);
        return view('admin.pages.requisition.rlist',compact('requisitionlists'));
    }
    public function rdetails(){
        $requisitiondetails = Requisitiondetails::where('status','=','Pending')->get();
        return view('admin.pages.requisition.details.rdetails',compact('requisitiondetails'));
    }

    public function action($id)
    {
        // dd($id, request()->all());
        $data = Requisitiondetails::where('id',$id)->first();
        $data->update([
            'status'=>request()->action,
        ]);
        return redirect()->back();
    }
   
}
