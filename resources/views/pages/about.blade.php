@extends('layout')

@section('content')

<h1>About page</h1>

@stop

@section('footer')
    <p>I am a footer in the about page only</p>

    <script>
        alert('I am the footer');
    </script>

@stop
