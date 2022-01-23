<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\RequisitionDetails;

class RequisitionController extends Controller
{
   public function myrequisition($requisition_id){
      $categories = ProductCategory::all();

      $requisitions= Requisition::find($requisition_id);
      $requisitiondetails= RequisitionDetails::where('requisition_id', $requisition_id)->get();

      return view('website.pages.requisition',compact('categories','requisitiondetails'));

   }

   
}
