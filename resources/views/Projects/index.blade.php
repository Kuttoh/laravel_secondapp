@extends('layout')

@section('title', 'Our Projects')

@section('content')

    <h1 class="title" >Here are our projects</h1>

    <ol style="margin-bottom: 1em">
        @foreach($projects as $project)

            <li>{{$project->title}} |
                <a href="/projects/{{$project->id}}/details" style="color: #2a9055">View</a> |
                <a href="/projects/{{$project->id}}/edit">Edit</a> |
                <a href="/projects/{{$project->id}}/delete" style="color: red;">Delete</a>
            </li>

        @endforeach
    </ol>

    <a href="/projects/create"><button type="submit" class="button is-link">Create New</button></a>

@endsection


