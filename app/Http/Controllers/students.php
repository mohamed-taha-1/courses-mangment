<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class students extends Controller
{
    function save(Request $req)
    {
          $Student = new student;
          $Student->course_name=$req->course_name;
          $Student->course_grade=$req->input('course_grade');
          $Student->student_id=$req->student_id;
        
         
    
         $Student->save();
         return  redirect('/welcome');
      

    }
}
