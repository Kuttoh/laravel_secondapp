@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1>Create a New Project</h1>

    <form method="post" action="/projects">
        {{csrf_field()}}
        
        <div>
            <label for="inp">Project Title</label> <br>
            <input type="text" placeholder="project title" id="inp" name="title">
        </div>
        
        <div>
            <label for="desc">Project Description</label> <br>
            <textarea name="description" id="" cols="30" rows="10" id="desc" placeholder="project description max 200words"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
        
    </form>

    @endsection
