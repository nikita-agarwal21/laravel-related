<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    //
    function show()
    {

      return DB::table('employee')
      ->join('company','employee.id',"=",'company.emp_id')
      ->select('company.*')
      ->where('company.id',10)
      ->get() ;
    }
}
