<?php

namespace App\Http\Controllers\website;

use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Http\User;
use App\Models\ProductCategory;
use App\Models\RequisitionDetails;
use App\Http\Controllers\Controller;

class RequisitionController extends Controller
{
   public function myrequisition(){

      $categories = ProductCategory::all();
      $requisitions = Requisition::where('user_id',auth()->user()->id)->get();
      // dd($requisitions);
      return view('website.pages.requisition',compact('requisitions','categories'));
   }

  
   // public function myrequisition($requisition_id){
   //    $categories = ProductCategory::all();

   //    $requisitions= Requisition::find($requisition_id);
   //    // dd($requisitions);
   //    $requisitiondetails= RequisitionDetails::where('requisition_id', $requisition_id)->get();

   //    return view('website.pages.requisition',compact('categories','requisitiondetails', 'requisitions'));

   // }



}
