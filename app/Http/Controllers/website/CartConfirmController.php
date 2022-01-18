<?php

namespace App\Http\Controllers\website;

use Carbon\Carbon;
use App\Models\Requisition;
use Illuminate\Http\Request;
use App\Models\RequisitionDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CartConfirmController extends Controller
{
      
   public function orderConfirm(Request $request){
    // dd($request->all());
    $carts = session('cart');
// dd($carts);
$total = array_sum(array_column($carts,'total_price'));
// dd($total);
DB::beginTransaction();
try{
    $requisitionlist=Requisition::create([
        //field name from DB || field name from form 
        'user_id'=>auth()->user()->id,
        // 'status'=>'pending',
        'total_price'=>$total,
        'date'=>Carbon::now(),
    ]);

    // $carts = session('get');

    foreach ($carts as $key =>$cart) {
        RequisitionDetails::create([
            'requisition_id' => $requisitionlist->id,
            'product_id' =>$cart['product_id'],
            'product_quantity' =>$cart['quantity'],
            'product_price' =>$cart['product_price'],
            'subtotal' =>$cart['total_price'],
            // 'status'=>'pending',
        ]); 
    }
    if($requisitionlist){
        session()->forget('cart');
    }


    DB::commit();

    return redirect()->back();

}
catch(Throwable $throw){
    DB::rollback();
    return redirect()->back();
      }
   }
}
