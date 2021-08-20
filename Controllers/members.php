<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class members extends Controller
{
  // dbOperations

    function dbOperations()
    {
      /*return DB::table('users')//can use return ............ ->find('id=6')or ->count(),->get()
      ->where('id',9)
      ->delete();
*/
      return DB::table('users')->avg('id');//sum,count(),avg('id'),max('id'),min('id')
//max('name')


/*->where('id',9)
->update(
[
'name'=>'liza',
'address'=>'anil@gmail.com'
]
);
*/


    /*  ->insert(
[
  'name'=>'anil',
  'address'=>'anil@gmail.com'
]
);

*/
      //return view('view',['data'=>$data]);//view name,key=>value
    }

}
