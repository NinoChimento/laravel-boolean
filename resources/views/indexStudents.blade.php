@extends('layouts.layout')
@section('main')
<div class="wrap-students">
    @foreach ($students as $student)
        <div class="studente">
        <h2>{{$student["name"]}}</h2>
    </div>
    @endforeach
    
</div>
@endsection