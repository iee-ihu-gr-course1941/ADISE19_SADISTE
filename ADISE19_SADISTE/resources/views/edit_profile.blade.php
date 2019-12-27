@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <form method="POST" enctype="multipart/form-data" action="{{ url('update_profile') }}">
            @csrf

            <div class="form-group row">
                <div class="col">
                    <input id="name" type="text" placeholder="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <input id="email" type="email" placeholder="{{ Auth::user()->email }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <input id="username" type="text" placeholder="{{ Auth::user()->username }}" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col">
                    <input id="image" type="file" class="form-control" name="image"  class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
