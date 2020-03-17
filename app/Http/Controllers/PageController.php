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

    // public $students = [
    //     ["img"=> "https://www.boolean.careers/images/students/biagini.png",
    //      "name"=> "Alessandro Biagini",
    //      "age"=> 25,
    //      "job"=> "web developer",
    //      "description" => "Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer."
    //     ],
    //     [
    //         "img" => "https://www.boolean.careers/images/students/patruno.png",
    //         "name" => "Davide Patruno",
    //         "age" => 29,
    //         "job" => "web developer",
    //         "description" => "Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-Dopo la laurea magistrale in scienze umanistiche e sociali, si concentra sullo sviluppo di strategie marketing. Decide di cambiare vita, questa volta puntando sullo sviluppo Front-End.in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer."
    //     ],
    //     [
    //         "img" => "https://www.boolean.careers/images/students/masetti.png",
    //         "name" => "Loana Masetti",
    //         "age" => 36,
    //         "job" => "web developer",
    //         "description" => "Ha scoperto la passione per l'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web."
    //     ],
    //     [
    //         "img" => "https://www.boolean.careers/images/students/castellani.png",
    //         "name" => "Tommaso Castellani",
    //         "age" => 30,
    //         "job" => "web developer",
    //         "description" => "Un passato da giocatore professionista di poker e una laurea in ingegneria gestionale alle spalle. Tommaso ha tramutato la sua passione per i numeri in un lavoro diventando data scientist a Dublino."
    //     ],
    // ];
    public function showStudents()
    {   $students = $this->students;
        return view("indexStudents",compact("students"));
    }
    public function home()
    {
        return view("home");
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

}