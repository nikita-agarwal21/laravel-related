<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;//import contollerspart
use App\Http\Controllers\add;//import contollerspart
use App\Http\Controllers\search;//import contollerspart
use App\Http\Controllers\data;//import contollerspart
use App\Http\Controllers\datacontroller;//import contollerspart
use App\Http\Controllers\login;//import contollerspart
use App\Http\Controllers\UserAuth;//import contollerspart
use App\Http\Controllers\member;//import contollerspart
use App\Http\Controllers\upload;//import contollerspart
use App\Http\Controllers\MemberController;//import contollerspart
use App\Http\Controllers\membercontrollers;//import contollerspart
use App\Http\Controllers\members;//import contollerspart
use App\Http\Controllers\EmployeeController;//import contollerspart



//use App\Http\Controllers\Users;//import contollerspart
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/{name}', function ($name) {//display d name within the welcome page
   // echo $name;
    return view('welcome',['name'=>$name]);


});

*/


Route::get('/',function(){//url,function
    return view('welcome');//php name
});


Route::post("users",[UsersController::class,'getData']);
Route::view("login","users");

Route::get('xxx',[UsersController::class,'index']);//api

Route::post("add",[add::class,'sum']);//controller
Route::view("input","add");//blade.php


Route::view("login","login");//blade.php


Route::get("https://www.youtube.com/",[search::class,'song']);//controller
Route::view("user","youtube");//blade.php

Route::get("xyz",[data::class,'index']);//controller

Route::put("yyyy",[login::class,'testRequest']);
Route::view("xxxx","login");//blade.php

Route::post("yyyy",[UserAuth::class,'userLogin']);
//Route::view("xxxx","login");
Route::view("profile","profile");

Route::get('/login',function(){//url,function
  if(session()->has('yyyy'))
  {

  return redirect('profile');
  }
return   view('login ');
});
Route::get('/logout',function(){//url,function
  if(session()->has('yyyy'))
  {
    session()->pull('yyyy');
  //  return redirect('profile');
  }
return   redirect('login ');
});


Route::get("yyy",[datacontroller::class,'getData']);//url,controller::class,fn name

Route::post("addmember",[member::class,'addmember']);//controller
Route::view("add","addmember");//blade.php

Route::post("upload",[upload::class,'uploadfile']);//controller
Route::view("file","upload");//blade.php

//Route::view('local','profile1');
Route::get('/local/{lang}',function($lang){//url,function
  App::setlocale($lang);
    return view('profile1');//php name
});

Route::view('adds','addmembers');
Route::post('adds',[membercontrollers::class,'addData']);
Route::get('list',[membercontrollers::class,'list']);
Route::get('delete/{id}',[membercontrollers::class,'delete']);
Route::get('edit/{id}',[membercontrollers::class,'showData']);
Route::post('edit',[membercontrollers::class,'update']);

Route::get('lists',[members::class,'dbOperations']);

Route::get('emp',[EmployeeController::class,'show']);


//Route::get('list',[MemberController::class,'show']);







/*Route::get('/about', function () {
    return view('about');
});
*/

/*Route::get('/userr/{name}',function($name){//url,function,//variable name
    return view('users',['name'=>$name]);//php name
});
*/
/*Route::get('user',[Users::class,'loadview']);//url,controller file name,func name


Route::view('about','about');//url,page name
Route::view('xyz','contact');//url,page name

Route::view('users','users');//url,page name
Route::view('about','about');//url,page name


//route::get('path','controller file')

Route::get("users/{user}",[Users::class,'index']);
*/
