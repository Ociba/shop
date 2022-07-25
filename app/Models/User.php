<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'address',
        'division',
        'street',
        'plot_number',
        'town',
        'newsletter',
        'amount',
        'payment_date',
        'payment_status',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Tis function searches by any of this fields
    public function scopeSearch($query, $val)
    {
        return $query
        ->where('name', 'like', '%'.$val.'%')
        ->Orwhere('user_types.type', 'like', '%'.$val.'%')
        ->Orwhere('email', 'like', '%'.$val.'%')
        ->Orwhere('telephone', 'like', '%'.$val.'%')
        ->Orwhere('amount', 'like', '%'.$val.'%')
        ->Orwhere('payment_date', 'like', '%'.$val.'%')
        ->Orwhere('payment_status', 'like', '%'.$val.'%')
        ->Orwhere('address', 'like', '%'.$val.'%');
    }
}
