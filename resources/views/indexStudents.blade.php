@extends('layouts.layout')
@section('main')
<div class="wrap-students">
    @foreach ($students as $student)
        <div class="studente">
            <div class="info">
                 <img src="{{$student["img"]}}" alt="">
                 <h2>{{$student["name"]}}</h2>
                 <h4>Anni: {{$student["age"]}}</h4>
            </div>
            <h6>{{$student["job"]}}</h6>
            <p>{{$student["description"]}}</p>
    </div>
    @endforeach
    
</div>
@endsection