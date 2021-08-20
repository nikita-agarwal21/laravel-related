<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    //
    function testRequest(Request $req)
    {
    //  return 'hello from controller';
    return $req->input();
    }
}
