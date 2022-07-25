<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['produce_category', 'created_by'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('produce_category', 'like', '%'.$val.'%')
        ->OrWhere('users.name', 'like', '%'.$val.'%');
    }
}
