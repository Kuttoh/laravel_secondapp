@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1>Create a New Project</h1>

    <form method="POST" action="/projects/store">
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
                <input name="title" class="input" id="title" placeholder="e.g Project Finance">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">
                <textarea class="textarea" name="description" id="description" placeholder="some long desc"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

    </form>

    @endsection
