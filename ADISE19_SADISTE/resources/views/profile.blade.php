@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
        <h1>{{ Auth::user()->name }}</h1>
        <br>
        <h3>This is a user profile.</h3>
</div>
@endsection
