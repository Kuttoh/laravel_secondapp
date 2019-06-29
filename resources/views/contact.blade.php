@extends('layout')

@section('title', 'Contact Us')

@section('content')

    <h1>Contact Us</h1>

    @foreach($offices as $office)

        <li>{{$office}}</li>

    @endforeach

@endsection
