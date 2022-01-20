<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;


class ReportController extends Controller
{
   public function report(){

      $report=[];
       if(request()->has('from_date'))
       {
        $report=Distribution::whereDate('created_at','>=',request()->from_date)
        ->whereDate('created_at','<=',request()->to_date)->get();
        // dd($data);
       }
      
       return view('admin.pages.report.report',compact('report'));

   }
}