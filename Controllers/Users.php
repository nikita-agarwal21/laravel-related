<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user)
    {
        echo $user;
        echo ' hello from controller';
        //to return as api
        return ['name'=>$user,'age'=>'20'];
    }

    public function loadview()
    {
        return view("users");
    }
}
