@extends('layout')

@section('title', 'Our Offices')

@section('content')

    <h1>Our Office Locations</h1>

    @foreach($offices as $office)

    <li>{{$office->name}}</li>

        @endforeach

    @endsection
