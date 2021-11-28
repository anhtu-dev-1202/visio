@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/news.css') }}">
@endsection


@section('content')
    <div id="banner-product" class="default">
        <img src="https://sudospaces.com/hoaphat-com-vn/2020/12/san-pham.jpg" alt="">
        <div class="wrap">
            <h3>Tin Tức</h3>
        </div>
    </div>
    <div id="news-category" class="default">
        <div class="wrap">
            <h1 class="title default">Tin tức tập đoàn</h1>
            <div class="top-content">
                <ul>
                    @foreach($first as $key => $obj)
                    <li>
                        <a href="{{ route('detailN', ['slug' => $obj->slug]) }}">
                            <div class="image">
                                <img src="{{ asset($obj->image) }}" alt="">
                            </div>
                            @if($key != 0)
                                <div class="infomation">
                                    <p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $obj->created_at->format('d-m-Y') }}  <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $obj->created_at->format('H:i') }}</p>
                                    <h3>{{ $obj->title }}</h3>
                                    <p class="info">{{ substr($obj->description, 0, 150) }}@if(strlen($obj->description) > 150)...@endif </p>
                                </div>
                            @else
                                <p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $obj->created_at->format('d-m-Y') }}  <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $obj->created_at->format('H:i') }}</p>
                                <h3>{{ $obj->title }}</h3>
                                <p class="info first-child">{{ substr($obj->description, 0, 350) }}@if(strlen($obj->description) > 350)...@endif</p>
                            @endif
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="bottom-content clear default">
                <div class="list-news">
                    <ul>
                        @foreach($data as $obj)
                        <li>
                            <a href="{{ route('detailN', ['slug' => $obj->slug]) }}">
                                <div class="image">
                                    <img src="{{ asset($obj->image) }}" alt="">
                                </div>
                                <div class="infomation">
                                    <p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $obj->created_at->format('d-m-Y') }}  <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $obj->created_at->format('H:i') }}</p>
                                    <h3>{{ $obj->title }}</h3>
                                    <p class="info">{!! (strlen($obj->description) > 300) ? mb_substr($obj->description, 0, 300, 'UTF-8') .'...' : $obj->description !!}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="pagination" role="navigation">
                        {{ $data->links() }}
                    </div>
                    <div class="clear">
                    </div>
                    <div class="post-video">
                        <hr>
                        <div class="post-heading">
                            <h3><a href="javascript:void()">Video tham khảo</a></h3>
                        </div>
                        <div class="video-container">
                            <iframe width="100%" height="480" src="https://www.youtube.com/embed/eb6NbVUAvLo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            <!-- <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
                            </iframe> -->
                        </div>
                        <p class="marginbot10 aligncenter">
                            Video mô phỏng quá trình thiết kế máy bay do các chuyên gia Kỹ thuật của VISI phối hợp cùng hãng thực hiện.                        </p>
                    </div>
                </div>
                <div class="sidebar-news">
                    <p class="title">Tin tức mới nhất</p>
                    <ul>
                        @foreach($new as $obj)
                            <li>
                                <a href="{{ route('detailN', ['slug' => $obj->slug]) }}">
                                    <div class="image" style="background-image: url({{ asset($obj->image) }}); background-size: cover">
                                    </div>
                                    <div class="infomation">
                                        <p class="clear time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ $obj->created_at->format('d-m-Y') }}
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $obj->created_at->format('H:i') }}
                                        </p>
                                        <h5>{{ $obj->title }}</h5>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <a style="float: right;" class="show-more" href="" title="">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(window).on('load', function () {
            $('#page').fadeOut().remove();
        });
    </script>
@endsection
