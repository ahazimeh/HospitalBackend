<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show()
    {
        //
        return User::with("blood_type")->first();
    }
}
