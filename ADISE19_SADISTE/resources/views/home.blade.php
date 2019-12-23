@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container-fluid" style="padding:0; margin:0; padding-top:-25px; margin-top:-25px">
    <div id="myCarousel" class="carousel slide container-fluid " style="padding:0; margin:0;" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{Storage::url('images/uno_image_1.png')}}" alt="First slide" width="800" height="800">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{Storage::url('images/uno_image_2.jpg')}}" alt="Second slide" width="800" height="800">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{Storage::url('images/uno_image_3.jpg')}}" alt="Third slide" width="800" height="800">
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        $(document).foundation();

        $('.carousel').carousel({interval:2000})
    </script>
</div>
@endsection
