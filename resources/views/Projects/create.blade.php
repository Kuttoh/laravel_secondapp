@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1 class="title">Create a New Project</h1>

    @if ($errors->any())

        <div class="notification is-danger">
            <ul>

                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach

            </ul>
        </div>

    @endif



    <form method="POST" action="/projects/store">
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
                <input name="title" class="input" id="title" placeholder="e.g Project Finance" value="{{old('title')}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">
                <textarea class="textarea" name="description" id="description" placeholder="some long desc">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

    </form>

    @endsection
