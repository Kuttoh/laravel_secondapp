@extends('layout')

@section('title', 'Project Details')

@section('content')

    <h1><b>{{$project->title}}</b></h1>

    <p>
        {{$project->description}}
    </p>

    <a href="/projects/{{$project->id}}/edit">Edit</a> | <a href="/projects/{{$project->id}}/delete" style="color: red;">Delete</a>

    @endsection
