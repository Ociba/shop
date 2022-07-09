<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;
    protected $fillable =['user_id','item_id','price','quantity'];


    public function scopeSearch($query, $val){
        return $query
        ->where('users.name','like','%'.$val.'%')  
        ->Orwhere('customer_orders.quantity','like','%'.$val.'%')
        ->Orwhere('customer_orders.created_at','like','%'.$val.'%');
    }
}
