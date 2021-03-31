<?php

namespace App;
use App\Profile;
use App\Requests;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    //
    public $timestamps = false;
    protected $table = "blood_types";

    protected $fillable = [
        'type',
    ];
    public function profiles()
    {
        // class,fk of second ,localkey
        return $this->hasMany(Profile::class, 'blood_type_id', 'id');
    }
    public function requests()
    {
        // class,fk of second ,localkey
        return $this->hasMany(Requests::class, 'blood_type_id', 'id');
    }
}
