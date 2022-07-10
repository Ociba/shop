<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['user_id','amount'];
     //Tis function searches by any of this fields
     public function scopeSearch($query, $val){
        return $query
        ->where('payments.amount','like','%'.$val.'%') 
        ->Orwhere('users.name','like','%'.$val.'%');
    }
}
