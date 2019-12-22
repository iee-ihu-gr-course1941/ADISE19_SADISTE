@extends('layouts.app')

@section('title', 'About')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <!-- 1st Member Card -->
        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader"></div>
                <div class="avatar">
                    <img src="{{Storage::url('about/george.jpg')}}"  height="100%" width="100%"/>
                </div>
                <div class="info">
                    <div class="title">
                        <h4 style="color: darkblue;">George Karanikolas</h4>
                    </div>
                    <div class="desc">Passionate about software</div>
                    <div class="desc">Junior Developer</div>
                    <div class="desc">Member</div>
                </div>
                <div class="bottom">
                    <a href="https://github.com/SeijinD">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- 2nd Card Member -->
        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader"></div>
                <div class="avatar">
                    <img src="{{Storage::url('about/dimitris.jpg')}}"  height="100%" width="100%"/>
                </div>
                <div class="info">
                    <div class="title">
                        <h4 style="color: darkblue;">Dimitris Tzikas</h4>
                    </div>
                    <div class="desc">Passionate about software</div>
                    <div class="desc">Junior Developer</div>
                    <div class="desc">Member</div>
                </div>
                <div class="bottom">
                    <a href="https://github.com/dimitristzikas">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- 3rd Member Card -->
        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img src="{{Storage::url('about/thodoris.jpg')}}"  height="100%" width="100%"/>
                </div>
                <div class="info">
                    <div class="title">
                        <h4 style="color: darkblue;">Theodoros Balasis</h4>
                    </div>
                    <div class="desc">Passionate about software</div>
                    <div class="desc">Junior Developer</div>
                    <div class="desc">Member</div>
                </div>
                <div class="bottom">
                    <a href="https://github.com/TheodorosBalasis">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- 4th Member Card -->
        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img src="{{Storage::url('about/.jpg')}}" height="100%" width="100%" />
                </div>
                <div class="info">
                    <div class="title">
                        <h4 style="color: darkblue;">Oddyseas Karastergiou</h4>
                    </div>
                    <div class="desc">Passionate about software</div>
                    <div class="desc">Junior Developer</div>
                    <div class="desc">Member</div>
                </div>
                <div class="bottom">
                    <a href="https://github.com/OdysseasKarastergiou">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-square-o fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
