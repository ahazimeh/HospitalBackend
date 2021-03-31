<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    //
    public $timestamps = false;
    protected $table = "donations";
    protected $fillable = [
        'user_id','request_id',
    ];

    public function users()
    {
        // class,fk it has, it owner key ==primary key of the table
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
