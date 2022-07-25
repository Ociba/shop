<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nin', 'phone_number'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name', 'like', '%'.$val.'%')
        ->Orwhere('nin', 'like', '%'.$val.'%')
        ->Orwhere('phone_number', 'like', '%'.$val.'%');
    }
}
