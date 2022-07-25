<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoomeNews extends Model
{
    use HasFactory;

    protected $fillable = ['heading', 'body', 'photo'];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('heading', 'like', '%'.$val.'%')
        ->Orwhere('body', 'like', '%'.$val.'%');
    }
}
