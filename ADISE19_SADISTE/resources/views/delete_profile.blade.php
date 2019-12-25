@extends('layouts.app')

@section('title', 'Delete Profile')

@section('content')
<div class="container">
    <br><br><br><br>
    <div class="row justify-content-center">
        <form method="POST" action="{{ url('delete_account') }}">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <button type="submit" class="btn btn-lg btn-danger btn-block" style="font-weight:bold; font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif">
                        Delete Account
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
