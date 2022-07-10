<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable =['district','nin','contact','business_type','type'];

 //Tis function searches by any of this fields
 public function scopeSearch($query, $val){
    return $query
    ->where('district','like','%'.$val.'%') 
    ->Orwhere('nin','like','%'.$val.'%')
    ->Orwhere('contact','like','%'.$val.'%')
    ->Orwhere('business_type','like','%'.$val.'%')
    ->Orwhere('type','like','%'.$val.'%');
}
}
