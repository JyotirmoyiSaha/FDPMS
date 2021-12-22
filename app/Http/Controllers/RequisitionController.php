<?php

namespace App\Http\Controllers;
use App\Models\Requisition;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function rlist(){
        return view('admin.pages.requisition.rlist');
    }
    public function rdetails(){
        return view('admin.pages.requisition.details.rdetails');
    }
}
