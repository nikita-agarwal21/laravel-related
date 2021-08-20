<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add extends Controller
{
    //
    function sum(Requset $req)
    {
        return $req->input();
    }
}
