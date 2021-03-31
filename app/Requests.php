<?php

namespace App;
use App\User;
use App\Profile;
use App\BloodType;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    //
    protected $table = "requests";
    protected $fillable = [
        'first_name','last_name','phone_nb','age','user_id','reason','hospital','blood_type_id',
    ];
    public function users()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function profile()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(Profile::class, 'user_id', 'user_id');
    }
    public function blood_type()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(BloodType::class, 'blood_type_id', 'id');
    }
}