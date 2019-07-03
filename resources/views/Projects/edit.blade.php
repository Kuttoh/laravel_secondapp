@extends('layout')

@section('title', 'Edit Project')

@section('content')

    <h1 class="title">Edit Project</h1>
    <form method="POST" action="/projects/{{$project->id}}/update" style="margin-bottom: 1em">
        @csrf

        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
                <input name="title" class="input" id="title" placeholder="e.g Project Finance" value="{{$project->title}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">
                <textarea class="textarea" name="description" id="description" placeholder="some long desc">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>

    </form>

    @endsection
