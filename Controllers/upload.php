<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upload extends Controller
{
    //
    function uploadfile(Request $req)
    {
      return  $req->file('name')->store('docs');
    }
}
