<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable =['user_id','food_type','ingredients','amount','discount_percentage','new_amount','photo'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val){
        return $query
        ->where('ingredients','like','%'.$val.'%') 
        ->Orwhere('food_type','like','%'.$val.'%')
        ->Orwhere('food.amount','like','%'.$val.'%')
        ->Orwhere('discount_percentage','like','%'.$val.'%')
        ->Orwhere('new_amount','like','%'.$val.'%')
        ->Orwhere('users.name','like','%'.$val.'%');
    }
}
