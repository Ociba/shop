<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable =['image'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('created_at', 'like', '%'.$val.'%');
    }
}
