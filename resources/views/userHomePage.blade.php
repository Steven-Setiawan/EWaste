@extends('layout.layout')

@section('content')
    <div class="container">
        <h1>Welcome to Your Home Page, {{ auth()->user()->name }}!</h1>
        <p>This is the user's dashboard.</p>
    </div>
@endsection
