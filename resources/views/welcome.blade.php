@extends('layout')

@section('title', 'Home')

@section('content')

    <h1>Home {{ $foo }}</h1>

    @foreach($tasks as $task)

        <li>{{$task}}</li>

    @endforeach

@endsection

