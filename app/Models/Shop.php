<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['item_category_id', 'item_name', 'photo', 'price', 'number', 'discount', 'new_price', 'description', 'classification','created_by'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('shop_items_categories.item', 'like', '%'.$val.'%')
        ->Orwhere('users.name', 'like', '%'.$val.'%')
        ->Orwhere('price', 'like', '%'.$val.'%')
        ->Orwhere('number', 'like', '%'.$val.'%')
        ->Orwhere('item_name', 'like', '%'.$val.'%')
        ->Orwhere('discount', 'like', '%'.$val.'%')
        ->Orwhere('new_price', 'like', '%'.$val.'%')
        ->Orwhere('classification', 'like', '%'.$val.'%')
        ->Orwhere('shops.status', 'like', '%'.$val.'%');
    }
}
