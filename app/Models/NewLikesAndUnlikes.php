<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewLikesAndUnlikes extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'likes_and_unlikes'];
}
