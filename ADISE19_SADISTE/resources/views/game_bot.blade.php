@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header"><h4>UNO Game</h4></div>

                <div class="card-body">
                    <center>
                        <table>
                            <tr id="opponent-cards">
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr id="deck-card">
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr id="user-cards">
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                                <td><img src="{{Storage::url('cards/back-back.png')}}"/></td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection