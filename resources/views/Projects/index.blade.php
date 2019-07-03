@extends('layout')

@section('title', 'Our Projects')

@section('content')

    <h1>Here are our projects</h1>

    @foreach($projects as $project)

        <li>{{$project->title}}</li>

{{--        <p>{{$project->description}}</p>--}}

    @endforeach

    <a href="/projects/create">Create New</a>

    @endsection


