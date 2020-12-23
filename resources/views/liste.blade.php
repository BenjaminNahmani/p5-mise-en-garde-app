@extends('layout')

@section('content')
    @foreach ($students as $student)
    <p>{{$student->firstname}}</p>
    <p>{{$student->lastename}}</p>
    <p>{{$student->classe}}</p>

    @endforeach 
@endsection