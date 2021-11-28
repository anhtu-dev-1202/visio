@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/dichvu.css') }}">
@endsection


@section('content')
    <div id="banner-product">
        <img src="{{ asset('/images/banner.jpg') }}" alt="">
    </div>
    <div class="page-one">
        <div class="container">
            <h1 class="title-page text-center" style="text-transform:uppercase">Dịch vụ</h1>
            <div class="intro-cat"></div>
            <div class="c20"></div>
            <div class="container">
                <ul class="subtab">
                    <li><a class="" href="#">Đào tạo &amp; Chuyển giao công nghệ</a></li>
                    <li><a class="" href="#">Tư vấn &amp; Phát triển sản phẩm</a></li>
                </ul>
            </div>
            <div class="c20"></div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item-service item-hvr">
                        <div class="img-dv"><a href="#"><img src="http://upviet.com.vn/temp/-uploaded-Khoa dao tao-Dao tao thiet ke-thiet ke tren NX_NX_for_design_cr_480x312.jpg" width="100%" alt="Chương trình đào tạo thiết kế sản phẩm trên phần mềm NX" style="display:block"></a></div>
                        <h2 class="name-item-service"><a href="#">Chương trình đào tạo thiết kế sản phẩm trên phần mềm NX</a></h2>
                        <div class="intro-item-service"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item-service item-hvr">
                        <div class="img-dv"><a href="#"><img src="http://upviet.com.vn/temp/-uploaded-Khoa dao tao-Dao tao mo phong-mo phong CFD_dao-tao-mo-phong-CFD_cr_480x312.png" width="100%" alt="Chương trình đào tạo mô phỏng dòng chảy chất lưu CFD" style="display:block"></a></div>
                        <h2 class="name-item-service"><a href="#">Chương trình đào tạo mô phỏng dòng chảy chất lưu CFD</a></h2>
                        <div class="intro-item-service"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item-service item-hvr">
                        <div class="img-dv"><a href="#"><img src="http://upviet.com.vn/temp/-uploaded-Khoa dao tao-Dao tao mo phong-mo-phong-hypermesh_1_cr_480x312.jpg" width="100%" alt="Chương trình đào tạo chia lưới phần tử hữu hạn và phân tích tuyến tính tĩnh" style="display:block"></a></div>
                        <h2 class="name-item-service"><a href="#">Chương trình đào tạo chia lưới phần tử hữu hạn và phân tích tuyến tính tĩnh</a></h2>
                        <div class="intro-item-service"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item-service item-hvr">
                        <div class="img-dv"><a href="/mo-phong/chuong-trinh-dao-tao-mo-phong-duc-kim-loai.html"><img src="http://upviet.com.vn/temp/-uploaded-Khoa dao tao-Dao tao mo phong-mo-phong-duc-kim-loai_mo-phong-duc-kim-loai_cr_480x312.jpg" width="100%" alt="Chương trình đào tạo mô phỏng đúc kim loại" style="display:block"></a></div>
                        <h2 class="name-item-service"><a href="/mo-phong/chuong-trinh-dao-tao-mo-phong-duc-kim-loai.html">Chương trình đào tạo mô phỏng đúc kim loại</a></h2>
                        <div class="intro-item-service"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item-service item-hvr">
                        <div class="img-dv"><a href="/mo-phong/chuong-trinh-dao-tao-mo-phong-trao-doi-nhiet.html"><img src="http://upviet.com.vn/temp/-uploaded-Khoa dao tao-Dao tao mo phong-mo phong trao doi nhet_dao-tao-mo-phong-trao-doi-nhiet_cr_480x312.png" width="100%" alt="Chương trình đào tạo mô phỏng trao đổi nhiệt" style="display:block"></a></div>
                        <h2 class="name-item-service"><a href="/mo-phong/chuong-trinh-dao-tao-mo-phong-trao-doi-nhiet.html">Chương trình đào tạo mô phỏng trao đổi nhiệt</a></h2>
                        <div class="intro-item-service"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item-service item-hvr">
                        <div class="img-dv"><a href="/thiet-ke/thiet-ke-khuon-mau-tren-phan-mem-nx.html"><img src="http://upviet.com.vn/temp/-uploaded-_thumbs-Đào tạo_thiet-ke-khuon-nhua_cr_480x312.jpeg" width="100%" alt="Thiết kế khuôn mẫu trên phần mềm NX" style="display:block"></a></div>
                        <h2 class="name-item-service"><a href="/thiet-ke/thiet-ke-khuon-mau-tren-phan-mem-nx.html">Thiết kế khuôn mẫu trên phần mềm NX</a></h2>
                        <div class="intro-item-service"></div>
                    </div>
                </div>
            </div>
            <div class="c20"></div>
            <div class="paging"></div>
        </div>
        <div class="c"></div>
    </div>
@endsection

@section('script')
    <script>
        $(window).on('load', function () {
            $('#page').fadeOut().remove();
        });
    </script>
@endsection
