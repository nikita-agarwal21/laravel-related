<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class member extends Controller
{
    //
    function addmember(Request $req)
    {
    $data=   $req->input('user');
    $req->session()->flash('user',$data);
    return redirect("add");
    }
}
?>
