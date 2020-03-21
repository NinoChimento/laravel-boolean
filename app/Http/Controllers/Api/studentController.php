<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function age(Request $request){
        $data = $request->input("age");
        $students = config("students.students");
        // $result = $students;
       foreach ($students as $key => $student) {
           if($data >= $student["age"]){
              
               $result[] = $student;
           }
       }
        
            
            
        
        return response()->json($result);
        }
        
}
