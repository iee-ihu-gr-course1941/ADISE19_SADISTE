@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card hovercard">
                <img src="{{Storage::url('profiles/profile_1.jpg')}}" height="100%" width="100%"/>
            </div>
        </div>

        <div class="col-8">
            <table class="table table-striped table-hover">
                <tr>
                    <td>Games</td>
                    <td>Wins</td>
                    <td>Loses</td>
                </tr>
                <tr>
                    <td>{{ Auth::user()->games }}</td>
                    <td>{{ Auth::user()->wins }}</td>
                    <td>{{ Auth::user()->loses }}</td>
                </tr>
            </table>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <tr>
            <td>Username</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr style="font-size: 115%; padding-top: 15px;">
            <td>{{ Auth::user()->username }}</td>
            <td>{{ Auth::user()->name }}</td>
            <td>{{ Auth::user()->email }}</td>
        </tr>
    </table>
</div>
@endsection
