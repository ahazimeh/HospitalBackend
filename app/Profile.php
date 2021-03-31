<?php

namespace App;
use App\User;
use App\BloodType;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public $timestamps = false;
    protected $table = "profiles";
    protected $fillable = [
        'lat','lon','first_name','last_name','phone_nb','age','user_id','blood_type_id',
    ];
    public function users()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function bloodType()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(BloodType::class, 'blood_type_id', 'id');
    }

}
