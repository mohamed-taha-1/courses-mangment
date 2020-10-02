<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instructor;
class instructors extends Controller
{
    function save(Request $req)
    {
          $Instructor = new instructor;

          $Instructor->instructor_name=$req->instructor_name;
          $Instructor->courseOne_name=$req->courseOne_name;
          $Instructor->courseTow_name=$req->courseTow_name;
    
         echo   $Instructor->save();

    }
}
