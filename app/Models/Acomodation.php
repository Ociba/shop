<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acomodation extends Model
{
    use HasFactory;

    protected $table = 'acomodations';

    protected $guarded = ['id'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('categories.category', 'like', '%'.$val.'%')
        ->Orwhere('users.name', 'like', '%'.$val.'%')
        ->Orwhere('property_size', 'like', '%'.$val.'%')
        ->Orwhere('bedroom', 'like', '%'.$val.'%')
        ->Orwhere('bathroom', 'like', '%'.$val.'%')
        ->Orwhere('location', 'like', '%'.$val.'%')
        ->Orwhere('price', 'like', '%'.$val.'%')
        ->Orwhere('discount', 'like', '%'.$val.'%')
        ->Orwhere('discount_price', 'like', '%'.$val.'%')
        ->Orwhere('property_status', 'like', '%'.$val.'%');
    }
}
