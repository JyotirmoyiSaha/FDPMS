<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitionDetails extends Model
{
    use HasFactory;
    protected $table="requit_details";
    protected $guarded=[];
    public function rlist(){
        return $this->belongsTo(Requisition::class);

    }
    //stock
    public function product(){
        return $this->belongsTo(Product::class);

    }
}
