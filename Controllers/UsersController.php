<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UsersController extends Controller
{
    //
  /*  function getData(Request $req){
       // return 'form data will be gere';
       $req->validate([
           'username'=>'required | max:20',
           'password'=>'required | min:8'

       ]);
       return $req->input();

    }
    */

    function index()
    {
      //echo 'api folder here';
    //  return Http::get("https://reqres.in/api/users?page=1");
    $collection=Http::get("https://reqres.in/api/users?page=1");
    return view('usersapi',['collection'=>$collection['data']]);
    }
}
