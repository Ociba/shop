<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    use HasFactory;
    protected $fillable =['produce_category_id','produce_name','quantity','price','phone_number','image',
                         'description','created_by','percentage_discount','new_amount','status','produce_type'];

     //Tis function searches by any of this fields
     public function scopeSearch($query, $val){
        return $query
        ->where('produce_categories.produce_category','like','%'.$val.'%') 
        ->Orwhere('users.name','like','%'.$val.'%')
        ->Orwhere('price','like','%'.$val.'%')
        ->Orwhere('quantity','like','%'.$val.'%')
        ->Orwhere('produce_name','like','%'.$val.'%')
        ->Orwhere('phone_number','like','%'.$val.'%')
        ->Orwhere('percentage_discount','like','%'.$val.'%')
        ->Orwhere('new_amount','like','%'.$val.'%')
        ->Orwhere('produce_type','like','%'.$val.'%')
        ->Orwhere('produces.status','like','%'.$val.'%');
    }
}
