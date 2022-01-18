<?php

namespace App\Http\Controllers;
use App\Models\Requisition;




use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class RequisitionController extends Controller
{
    public function rlist(){
        $requisitionlists = Requisition::orderBy('id','desc')->get();

        // dd($requisitionlists);
        return view('admin.pages.requisition.rlist',compact('requisitionlists'));
    }
       


}


   

    




  
   
    
