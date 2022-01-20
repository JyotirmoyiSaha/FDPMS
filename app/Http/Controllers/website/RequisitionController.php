<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
   public function  myrequisition(){
       return view('website.pages.requisition');
   }
}
