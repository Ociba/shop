<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['senders_name', 'contact', 'enquiry'];

     //Tis function searches by any of this fields
     public function scopeSearch($query, $val)
     {
         return $query
     ->where('senders_name', 'like', '%'.$val.'%')
     ->Orwhere('contact', 'like', '%'.$val.'%')
     ->Orwhere('enquiry', 'like', '%'.$val.'%');
     }
}
