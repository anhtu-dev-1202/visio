@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/video.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slide.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css'>
@endsection


@section('content')

    <!--!! carrousel Begin-->
    <div id='owlCarousel' class='owl-carousel container-fluid d-none d-md-block px-0'>
        <div class='slide'>
            <img class='owl-item-bg' src='https://github.com/Duc-Nguyen98/Visi_Company/blob/main/assets/images/slide-images/slide-company.jpg?raw=true'>
            <div class="carousel-caption d-none d-md-block slide-content">
                <h3>VISI COMPANY</h3>
                <h2>Chào mừng bạn đến với chúng tôi</h2>
                <p>Bring the real values - Visi Mang lại những giá trị đích thực</p>
            </div>
        </div>
        <div class='slide'>
            <img class='owl-item-bg' src='https://github.com/Duc-Nguyen98/Visi_Company/blob/main/assets/images/slide-images/slide-company2.jpg?raw=true'>
            <div class="carousel-caption d-none d-md-block slide-content">
                <h3>VISI COMPANY</h3>
                <h2>Chào mừng bạn đến với chúng tôi</h2>
                <p>Bring the real values - Visi Mang lại những giá trị đích thực</p>
            </div>
        </div>
        <div class='slide'>
            <img class='owl-item-bg' src='https://github.com/Duc-Nguyen98/Visi_Company/blob/main/assets/images/slide-images/slide-company3.jpg?raw=true'>
            <div class="carousel-caption d-none d-md-block slide-content">
                <h3>VISI COMPANY</h3>
                <h2>Chào mừng bạn đến với chúng tôi</h2>
                <p>Bring the real values - Visi Mang lại những giá trị đích thực</p>
            </div>
        </div>
        <div class='slide'>
            <img class='owl-item-bg' src='https://github.com/Duc-Nguyen98/Visi_Company/blob/main/assets/images/slide-images/slide-company4.jpg?raw=true'>
            <div class="carousel-caption d-none d-md-block slide-content">
                <h3>VISI COMPANY</h3>
                <h2>Chào mừng bạn đến với chúng tôi</h2>
                <p>Bring the real values - Visi Mang lại những giá trị đích thực</p>
            </div>
        </div>
    </div>
    <!--!! carrousel End-->


    <!--!! Title Body Begin-->
    <div class="title-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pt-5 pb-2 text-center">
                    <h3>Danh Sách Video & Đào Tạo Của Chúng Tôi</h3>
                </div>
                <div class="col-sm-12 pt-4 pb-5  ">
                    <form action="" method="GET">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12 col-md-6 col-lg-7 py-3">
                                <select name="playlist" id="" class="custom-select">
                                    @foreach($playlists as $obj)
                                        <option @if($obj['id'] == $id) selected @endif value="{{ $obj['id'] }}">{{ $obj['snippet']['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12  col-md-6 col-lg-2 py-3">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-danger btn-block">Chọn channels</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--!! Title Body End-->
    <div class="page-one pt-3 pb-5">
        <div class="container">
            <div class="video-block">
                <div>
                        <div class="video-tab clearfix">

                            <div class="row">
                                <div class="col-md-7">
                                   <h2 class="video-tab-title">{{ $title }}</h2>
                                    <div class="tab-content">
                                        @foreach($data as $key => $obj)
                                        <div class="tab-pane fade @if($key == 0) active show @endif" id="{{ 'videoTab'.$key }}">
                                            <a class="play-icon" data-video="{{ 'https://www.youtube.com/embed/'.$obj['snippet']['resourceId']['videoId'].'?autoplay=1&mute=1' }}">
                                                <img class="play-button" src="https://user-images.githubusercontent.com/16266381/60864229-d403b780-a244-11e9-909a-a8a01b6e1d50.png" alt="play-button">
                                                <div class="post-thumbnail">
                                                    <img class="img-responsive" width="100%" height="376" src="{{ $obj['snippet']['thumbnails']['high']['url'] }}" alt="post-thumbnail"/>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-md-5">
                                 <h2 class="video-tab-title">Danh sách phát</h2>
                                    <ul class="nav nav-tabs">
                                        @foreach($data as $key => $obj)
                                        <li class="@if($key == 0) active @endif">
                                            <a href="{{ '#videoTab'.$key }}" data-toggle="tab">
                                                <div class="post-thumbnail">
                                                    <img class="img-responsive" src="{{ $obj['snippet']['thumbnails']['high']['url'] }}" alt="post-thumbnail"/>
                                                </div>
                                                <h3>{!! (strlen($obj->description) > 100) ? mb_substr($obj->description, 0, 100, 'UTF-8') .'...' : $obj->description !!}</h3>
                                                <p>Date: {{ date("d-m-Y", strtotime($obj['snippet']['publishedAt'])) }} | View: {{ $obj['snippet']['viewCount'] }}</p>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(window).on('load', function () {
            $('#page').fadeOut().remove();
            var video = `<iframe width="100%" height="376" class="yvideo" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="` + $('.active .play-icon').attr('data-video') + `"></iframe>`;
            $('.active .play-icon').replaceWith(video);
        });

        $(document).ready(function () {

            $('.nav-tabs li').click(function(){
                $('.yvideo').each(function(){
                    let src = $(this).attr('src');
                    $(this).attr('src', '');
                    $(this).attr('src', src);
                });
            });

            $('.play-icon').click(function () {
                var video = `<iframe class="yvideo" width="100%" height="376" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="` + $(this).attr('data-video') + `"></iframe>`;
                $(this).replaceWith(video);
            });

            $('.play-icon').mousemove(function (e) {
                var parentOffset = $(this).offset();
                var relX = e.pageX - parentOffset.left;
                var relY = e.pageY - parentOffset.top;
                $(".play-button").css({ left: relX, top: relY});
            });
            $('.play-icon').mouseout(function() {
                $(".play-button").css({ left: '50%', top: '50%'});
            });
        });

    </script>
       <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js'></script>
    <script src="{{ asset('/js/slide.js') }}"></script>
@endsection
