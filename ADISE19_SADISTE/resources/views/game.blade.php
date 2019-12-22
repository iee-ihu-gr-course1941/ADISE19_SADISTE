@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header"><h4>UNO Game</h4></div>

                <div class="card-body">
                    <img src="{{Storage::url('images/uno_image_2.jpg')}}" height="100%" width="100%"/>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header"><h4>Live Chat</h4></div>

                <div class="card-body">
                    Chat
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
