<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'created_by'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('category', 'like', '%'.$val.'%')
        ->Orwhere('users.name', 'like', '%'.$val.'%');
    }
}
