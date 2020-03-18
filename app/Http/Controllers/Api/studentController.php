<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function age(Request $request){
        $data = $request->input('age');

        $nino = ["nino"];
        return response()->json($data);
       
    }
}
