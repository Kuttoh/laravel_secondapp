@extends('layout')

@section('title', 'Project Details')

@section('content')


        <h1><b>{{$project->title}}</b></h1>

        <p>
            {{$project->description}}
        </p>

    @endsection
