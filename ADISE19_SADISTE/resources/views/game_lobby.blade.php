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
                        <h1>Choose your opponent</h1>
                        <button onclick="window.location.href = 'game_bot'">Bot</button>
                        <button action="">Player</button>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h4>Live Chat</h4></div>

                <div class="card-body">
                    
                </div>
           </div>
        </div>
    </div>
</div>
@endsection