<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class membercontrollers extends Controller
{
   function addData(Request $req)
    {
      $member=new users;
      $member->name=$req->name;
      $member->address=$req->address;

      $member->save();

      return redirect('adds');

    }

    function list()
    {
      $data=users::all();
      return view('list',['users'=>$data]);
    }

    function delete($id)
    {
      $data=users::find($id);
      $data->delete();
      return redirect('list');

    }

    function showData($id)
    {
      $data=users::find($id);
      //$data->edit();
      return view('edit',['data'=>$data]);

    }

    function update(Request $req)
    {
      $data=users::find($req->id);
      $data->name=$req->name;
      $data->address=$req->address;
       $data->save();
      return redirect('list');

    }




}
