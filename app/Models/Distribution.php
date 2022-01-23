<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function rdetails(){
        return $this->belongsTo(RequisitionDetails::class,'requisition_id','id');
        }

        public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
