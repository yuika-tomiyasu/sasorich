@extends('layouts.app')

@section('content')
    <h1>My Page</h1>
    Name: {{ Auth::user()->name }} 
        <br>
        Events that you're going to join
        <br>
        <br>
    
@endsection

