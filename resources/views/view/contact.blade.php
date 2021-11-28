@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/lienhe.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slide.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>


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


    <!--!! Content Start -->
    <div class="body-content">
        <div class="container py-2">
            <div class="row">
                <div class="col-sm-12 content-first py-4">
                    <h2 class="p-3">VISI - Công Ty Cổ Phần Mô Phỏng và Tích hợp Việt Nam</h2>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-building"></i>Liên hệ văn phòng VISI hoặc gọi điện cho chúng tôi để nhận được tư vấn và hỗ trợ một cách nhanh nhất.
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>Tầng 18A, tòa nhà MHDI, số 68 Nguyễn Cơ Thạch, Nam Từ Liêm, Hà Nội.

                        </li>
                        <li>
                            <i class="fa fa-phone"></i>Số điện thoại liên hệ: 091.139.2019
                        </li>
                    </ul>
                </div>

                <div class=" col-lg-4 col-md-6 col-12">
                    <div class="hd-page-contact">Form liên hệ</div>
                    <div class="inner-frm ih shadow p-3 mb-5 bg-light rounded">
                        <form action="/index4.php?page=contact&amp;lang=" method="post" id="contactform" onsubmit="return check_contact('contactform');">
                            <input type="hidden" name="code" value="save" />
                            <input type="hidden" name="titlefrm" value="Thông tin liên hệ" />
                            <div class="frm-contact">
                                <div class="mes-frm text-danger mb-3">Các trường được đánh dấu * là bắt buộc</div>
                                <div class="">
                                    <div class="waiting"></div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Họ và tên (*)" name="yourname" required class="form-control notNull" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Địa chỉ (*)" name="yourname" required class="form-control notNull" />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email (*)" required class="form-control notNull" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="tel" name="phone" placeholder="Số điện thoại (*)" required class="form-control notNull" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="other_request" type="text" placeholder="Yêu cầu" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group input-group">
                                        <button type="submit" class="btn btn-frm btn-send text-center">Gửi Yêu Cầu</button>
                                    </div>
                                    <div id="msgbox_contactform" class="msgbox"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6 col-12">
                    <div class="hd-page-contact">Bản đồ liên hệ</div>
                    <div class="map ih shadow mb-5 bg-light rounded" style="overflow: hidden; height: 380px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d59583.39119883444!2d105.73019703725345!3d21.034208427443826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x313454b949b99a1f%3A0x41c030df71993011!2zVOG7lW5nIEPDtG5nIFR5IMSQ4bqndSBUxrAgUGjDoXQgVHJp4buDbiBOaMOgIFbDoCDEkMO0IFRo4buLIELhu5kgUXXhu5FjIFBow7JuZyAoTUhESSksIFThuqduZyAxIFRvw6AgbmjDoCBNRCBDT01QTEVYIFRPV0VSLCBz4buRIDY4IE5ndXnhu4VuIEPGoSBUaOG6oWNoIEvEkFQsIE3hu7kgxJDDrG5oIDEsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!3m2!1d21.0341319!2d105.7652165!4m5!1s0x313454b949b99a1f%3A0x41c030df71993011!2zVOG7lW5nIEPDtG5nIFR5IMSQ4bqndSBUxrAgUGjDoXQgVHJp4buDbiBOaMOgIFbDoCDEkMO0IFRo4buLIELhu5kgUXXhu5FjIFBow7JuZyAoTUhESSksIFThuqduZyAxIFRvw6AgbmjDoCBNRCBDT01QTEVYIFRPV0VSLCBz4buRIDY4IE5ndXnhu4VuIEPGoSBUaOG6oWNoIEvEkFQsIE3hu7kgxJDDrG5oIDEsIE5hbSBU4burIExpw6ptLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!3m2!1d21.0341319!2d105.7652165!5e0!3m2!1svi!2s!4v1636880071851!5m2!1svi!2s"
                            width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
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
