@extends('layouts.master')


@section('css')
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
            <div class="container text-center p-3">
                <div class="col-sm-12 ">
                    <h3>Danh Sách Sản Phẩm Của Chúng Tôi</h3>
                </div>
            </div>
        </div>
        <!--!! Title Body End-->

        <!--!! Content Begin -->
        <div class="body-content">
            <div class="container py-4">

                <div class="row">
                    @foreach($data as $obj)
                    <div class="col-sm-12 col-md-6 col-lg-4 py-2">
                        <figure class="image-block">
                            <h1>{{ $obj->title }}</h1>
                            <img src="{{ asset($obj->image) }}" alt="" />
                            <figcaption>
                                <h3>
                                    Mô tả
                                </h3>
                                <p>{!! (strlen($obj->description) > 450) ? mb_substr($obj->description, 0, 450, 'UTF-8') .'...' : $obj->description !!}</p>
                                <a href="#" class="btn-view-more">
                                    Xem thêm
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--!! Content End -->
@endsection

@section('script')
    <script>
        $(window).on('load', function () {
            $('#page').fadeOut().remove();
        });
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js'></script>
    <script src="{{ asset('/js/slide.js') }}"></script>
@endsection
