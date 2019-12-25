@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card hovercard">
                <img src="/storage/profiles/{{ Auth::user()->image }}" height="100%" width="100%"/>
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
            <br>
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
    </div>
    <br><br>
    <div class="row">
        <div class="col-4">
            <button onclick="location.href='{{ route('edit_profile.edit',['username' => Auth::user()->username]) }}'" class="btn btn-lg btn-primary btn-block">Edit Profile</button>
        </div>
        <div class="col-4">
            <button onclick="location.href='{{ route('reset_password.reset_password',['username' => Auth::user()->username]) }}'" class="btn btn-lg btn-primary btn-block">Reset Password</button>
        </div>
        <div class="col-4">
            <button onclick="location.href='{{ route('delete_profile.delete_profile',['username' => Auth::user()->username]) }}'" class="btn btn-lg btn-danger btn-block">Delete Profile</button>
        </div>
    </div>
</div>
@endsection
