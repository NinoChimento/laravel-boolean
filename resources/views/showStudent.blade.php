{{-- @dd($student["img"]) --}}

@extends('layouts.layout')
@section('main')
<div class="wrap-students">
  
        <div class="studente">
            <div class="info">
                 <img src="{{$student["img"]}}" alt="">
                 <h2>{{$student["name"]}}</h2>
                 <h4>Anni: {{$student["age"]}}</h4>
            </div>
            <h4>{{$student["job"]}}</h4>
            <p>{{$student["description"]}}</p>
        </div>
 
    
</div>
@endsection