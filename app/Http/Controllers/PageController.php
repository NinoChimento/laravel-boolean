<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    private $students;

    public function __construct()
    {
        $this->students = config("students.students");
    }

    
    public function showStudents()
    {   $students = $this->students;
        return view("indexStudents",compact("students"));
    }
    public function home()
    {
        return view("home");
    }
    public function corso()
    {
        return view("corso");
    }
    public function postCorso(){
        return view("postCorso");
    }
    public function showStudent($id)
    {
        $students = $this->students;
        if (!array_key_exists($id,  $students)) {
            echo "The  element is bot in the array";
        }
        else {
            $student = $students[$id];
            return view("showStudent", compact("student"));
        }
        
    }
    public function db(){
        
    }

}