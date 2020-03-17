<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    public $students = [
        ["img"=> "https://www.boolean.careers/images/students/biagini.png",
         "name"=> "Alessandro Biagini",
         "age"=> 25,
         "job"=> "web developer",
         "description" => "Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer."
        ],
        [
            "img" => "https://www.boolean.careers/images/students/patruno.png",
            "name" => "Davide Patruno",
            "age" => 29,
            "job" => "web developer",
            "description" => "Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer."
        ],
    ];
    public function showStudents()
    {   $students = $this->students;
        return view("indexStudents",compact("students"));
    }
    public function home()
    {
        return view("home");
    }
}
