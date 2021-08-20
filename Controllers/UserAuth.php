<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //

    function userLogin(Request $req)
    {
      $data=$req->input();
      $req->session()->put('yyyy',$data['username']);
      //echo session('yyyy');
return redirect ('profile');
    }
}
