<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Requests;
use App\BloodType;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function blood_type()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(BloodType::class, 'blood_type_id', 'id');
    }
    public function requests()
    {
        // class,fk of second ,localkey
        return $this->hasMany(Requests::class, 'blood_type_id', 'id');
    }
}
