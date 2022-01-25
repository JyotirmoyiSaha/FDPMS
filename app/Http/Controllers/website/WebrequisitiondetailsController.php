<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\RequisitionDetails;
use App\Http\Controllers\Controller;

class WebrequisitiondetailsController extends Controller
{
    public function viewrequisitiondetails($id){

        $categories = ProductCategory::all();
        $requisitiondetails = RequisitionDetails::where('requisition_id',$id)->get();
        // dd($requisitiondetails);
        // dd($requisitions);
        return view('website.pages.requisitiondetails',compact('requisitiondetails','categories','id'));
     }
}
