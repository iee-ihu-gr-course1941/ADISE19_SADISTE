@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <form method="POST" action="{{ url('update_password') }}">
            @csrf

            <div class="form-group row">
                <div class="col">
                    <input id="old_password" type="password" placeholder="Old Password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" required autocomplete="old-password">

                    @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <input id="password-confirm" type="password" placeholder="Comfirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <button type="submit" class="btn btn-lg btn-primary btn-block" style="font-weight:bold; font-style:italic; font-family:Georgia, 'Times New Roman', Times, serif">
                        Save
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
