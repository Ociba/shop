<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopItemsCategory extends Model
{
    use HasFactory;
    protected $fillable =['item'];

     //Tis function searches by any of this fields
     public function scopeSearch($query, $val){
        return $query
        ->where('item','like','%'.$val.'%'); 
    }
}
