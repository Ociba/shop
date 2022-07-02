<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
     protected $fillable =['equipment','quantity','price','description','discount_amount','equipment_discount','photo','created_by'];
      //This function searches by any of this fields
      public function scopeSearch($query, $val){
        return $query
        ->where('equipment','like','%'.$val.'%') 
        ->Orwhere('quantity','like','%'.$val.'%')
        ->Orwhere('price','like','%'.$val.'%')
        ->Orwhere('description','like','%'.$val.'%')
        ->Orwhere('discount_amount','like','%'.$val.'%')
        ->Orwhere('equipment_discount','like','%'.$val.'%')
        ->Orwhere('photo','like','%'.$val.'%')
        ->Orwhere('users.name','like','%'.$val.'%');
    }
}
