@extends('layout')

@section('title', 'Company Home')

@section('content')

    <h1>Home {{ $foo }}</h1>

    <p>
        Here is a list of things I'm going to do today:

        @foreach($tasks as $task)

            <li>{{$task}}</li>

        @endforeach

    </p>

    @endsection

