@extends('layout')

@section('content')

    @if (empty($people))

        <p>There are no people</p>
    @else
        <p>The people are:</p>

    @endif

    @foreach ($people as $person)


        <li> {{ $person }} </li>


    @endforeach

@stop
