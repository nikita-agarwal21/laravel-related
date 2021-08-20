<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class search extends Controller
{
    //
    function song(Request $req)
    {
  //  $url = "https://www.youtube.com/ '%".$name."%'";

        return $req->input();
    }
}
