@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
    />
@endsection

@section('content')
    <div id="banner">
        <div class="slider">
            <!-- slides -->
            <div class="slider__slides">
                <div class="slide s--active">
                    <div class="slide__inner">
                        <div class="slide__content">

                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="#">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Thép xây dựng
                                    </div>
                                    <p class="p1">Thị phần số 1 Việt Nam</p>
                                    <p>Thép Hòa Phát luyện từ quặng sắt, sử dụng công nghệ lò cao hiện đại nhất hiện nay.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="https://ongthep.hoaphat.com.vn/">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Ống thép</div>
                                    <p class="p1">Thị phần số 1 Việt Nam</p>
                                    <p>Ống thép Hòa Phát tự hào là nhà sản xuất lớn nhất Việt Nam với công suất lên tới
                                        800.000 tấn/năm, là sự lựa chọn hàng đầu của kiến trúc sư và nhà thầu</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="https://ton.hoaphat.com.vn/">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Tôn mạ</div>
                                    <p class="p1">Công nghệ châu Âu - Chất lượng hàng đầu</p>
                                    <p>Sản xuất trên dây chuyền tiên tiến nhất, đáp ứng mọi nhu cầu khắt khe của khách hàng
                                        trong nước và thị trường quốc tế</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="https://chetaokimloai.hoaphat.com.vn/">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Chế tạo kim
                                        loại
                                    </div>
                                    <p class="p1">Nhà sản xuất thép rút dây, thép dự ứng lực hàng đầu Việt Nam</p>
                                    <p>Sở hữu dây chuyền thiết bị công nghệ hiện đại cùng đội ngũ kỹ sư, công nhân lành nghề
                                        được đào tạo chuyên sâu, có nhiều kinh nghiệm trong việc chế tạo và lắp đặt thiết
                                        bị.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="https://dienlanh.hoaphat.com.vn/">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Điện máy gia
                                        dụng
                                    </div>
                                    <p class="p1">Niềm tự hào thương hiệu Việt</p>
                                    <p>Điện máy gia dụng Hòa Phát có tỷ lệ nội địa hóa cao nhất Việt Nam, chế độ bảo hành
                                        dài lâu, cung cấp các dịch vụ sau bán hàng tốt nhất</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Nông nghiệp
                                    </div>
                                    <p class="p1">Cung cấp các sản phẩm tươi, sạch, có giá trị dinh dưỡng cao</p>
                                    <p>Hoạt động trên các mảng sản xuất thức ăn chăn nuôi, chăn nuôi heo, chăn nuôi bò và
                                        chăn nuôi gia cầm.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide s--prev">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <div class="text wrap">
                                <a href="http://mandaringarden2.vn/">
                                    <div class="name"><i class="fa fa-chevron-right" aria-hidden="true"></i> Bất động sản
                                    </div>
                                    <p class="p1">Điểm đến hấp dẫn cho nhà đầu tư</p>
                                    <p>Đem đến cho khách hàng những dự án tiện nghi, chất lượng, đảm bảo đúng tiến độ cam
                                        kết với khách hàng</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slides end -->
            <div class="slider__control">
                <div class="slider__control-line"></div>
                <div class="slider__control-line"></div>
            </div>
            <div class="slider__control slider__control--right m--right">
                <div class="slider__control-line"></div>
                <div class="slider__control-line"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="slider-thumbnail default">
            <div class="wrap" style="position: relative;">
                <img style="width: 250px;position: absolute;bottom: 80px;z-index: 10;"
                     src="images/tu-hao-thuong-hieu-quoc-gia.png" alt="">
                <div id="home-slider-thumbnail" class="clearfix owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer autoHeight" style="height: 1px;">
                        <div class="owl-wrapper" style="width: 2080px; left: 0px; display: block;">
                            <div class="owl-item button2">
                                <div class="item"><a target="#" href="">Giới thiệu công ty</a>
                                </div>
                            </div>
                            <div class="owl-item button3">
                                <div class="item"><a target="#" href="">Tại sao chọn chúng tôi</a>
                                </div>
                            </div>
                            <div class="owl-item button4">
                                <div class="item"><a target="#" href="">Sản phẩm</a></div>
                            </div>
                            <div class="owl-item button5">
                                <div class="item"><a target="#" href="">Sự kiện</a></div>
                            </div>
                            <div class="owl-item button6">
                                <div class="item"><a target="#" href="">Tin tức công nghệ</a></div>
                            </div>
                            <div class="owl-item button7">
                                <div class="item"><a target="#" href="">Khách hàng</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="news-event" class="default">
        <div class="wrap">
            <div class="title-news-event"><a href="" title="">Tin tức sự kiện</a></div>
            <div class="clear"></div>
            <div class="left" data-aos="fade-right" data-aos-easing="ease-in-out">
                <div class="image">
                    <a href=""><img
                            src="https://sudospaces.com/hoaphat-com-vn/2021/10/z2878843733969-3297b4103446bf7aee112dbd99b43a1d.jpg"
                            alt=""></a>
                </div>
                <h3>
                    <a href="">Hòa Phát bán gần 1 triệu tấn thép trong tháng 10, lũy kế đã đạt 7,3 triệu tấn</a></h3>
                <p class="p1"><a href="">Tin tức tập đoàn</a></p>
                <ul>
                    <li><a href="">Chuyện 20 năm Hòa Phát bán thép</a></li>
                    <li>
                        <a href="">Đón đầu làn sóng chuyển dịch sản xuất từ Trung Quốc sang Việt Nam, Hòa Phát tăng tốc đầu
                            tư lớn vào sản xuất hàng điện lạnh – gia dụng</a></li>
                    <li>
                        <a href="">Hòa Phát được vinh danh Thương hiệu mạnh lần thứ 10 liên tiếp</a></li>
                    <li>
                        <a href="">Hòa Phát nộp ngân sách 8.100 tỷ trong 9 tháng, vượt xa số nộp cả năm 2020</a></li>
                </ul>
                <p class="p2"><a href="">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
            </div>
            <div class="right">
                <div class="top default">
                    <div class="top-left" data-aos="fade-up" data-aos-easing="ease-in-out">
                        <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/img-news-2.png" alt="">
                    </div>
                    <div class="top-right" data-aos="fade-down" data-aos-easing="ease-in-out">
                        <p class="title">Dành cho nhà đầu tư</p>
                        <ul>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Công bố
                                    thông tin</a></li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Văn bản
                                    pháp lý</a></li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Báo cáo
                                    tài chính</a></li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Bản cáo bạch</a>
                            </li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Báo cáo
                                    thường niên</a></li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Trợ giúp
                                    cổ đông</a></li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Đại hội cổ
                                    đông</a></li>
                            <li><a href=""><i class="icon-hoaphat icon-next"></i>Giới thiệu Tập đoàn</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="pdf-item">
                            <a target="_blank" href="">
                                <i class="icon-hoaphat icon-pdf"></i>
                                <p>Báo cáo tài chính 2020</p>
                            </a>
                        </div>
                        <div class="pdf-item">
                            <a target="_blank" href="">
                                <i class="icon-hoaphat icon-pdf"></i>
                                <p>Báo cáo tài chính 2019</p>
                            </a>
                        </div>
                        <div class="pdf-item">
                            <a target="_blank" href="">
                                <i class="icon-hoaphat icon-pdf"></i>
                                <p>Báo cáo tài chính 2018</p>
                            </a>
                        </div>
                        <div class="pdf-item">
                            <a target="_blank" href="">
                                <i class="icon-hoaphat icon-pdf"></i>
                                <p>Báo cáo tài chính 2017</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bottom default">
                    <div class="bottom-left">
                        <a href="" title="">
                            <div class="fb">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                            <div class="image">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/img-news-3.png" alt="">
                            </div>
                        </a>
                        <div class="text">
                            <a href="" title="">
                                <i class="icon-hoaphat icon-logo"></i>
                            </a>
                            <a href="https://www.facebook.com/tapdoanhoaphat1992/"></a>
                        </div>
                    </div>
                    <div class="bottom-right lightGallery-video" data-aos="fade-left" data-aos-easing="ease-in-out">
                        <a href="https://youtu.be/l4YVU1t-Mxo">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/112-1.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="" style="top: 88px;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=yX8eyLKmlHI&amp;feature=youtu.be" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/112-1.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="" style="top: 88px;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=pb1P4dMgN0I" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/112-1.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="" style="top: 88px;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=72vwCWQz2Zs" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/112-1.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="" style="top: 88px;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=D6o2WyraEIQ" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/112-1.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="" style="top: 88px;">
                        </a>
                        <a href="https://www.youtube.com/watch?v=L0c0goiNR3U" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/112-1.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="" style="top: 88px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about-cty" class="default">
        <div class="wrap">
            <div class="title-news-event"><a href="" title="">Về hòa phát</a></div>
            <div class="clear"></div>
            <div class="left">
                <div class="item" data-aos="fade-right" data-aos-easing="ease-in-out">
                    <p class="title">Doanh thu</p>
                    <div><i class="icon-hoaphat icon-next"></i>105.800 tỷ đồng <span>(9 tháng/2021)</span></div>
                </div>
                <div class="item" data-aos="fade-left" data-aos-easing="ease-in-out">
                    <p class="title">Lợi nhuận sau thuế</p>
                    <div>27.100 tỷ đồng<span>(9 tháng/2021)</span><i class="icon-hoaphat icon-prev"></i></div>
                </div>
                <div class="item" data-aos="fade-right" data-aos-easing="ease-in-out">
                    <p class="title">Số cán bộ công nhân viên</p>
                    <div><i class="icon-hoaphat icon-next"></i><strong>25.525</strong> người <span>(9 tháng/2021)</span>
                    </div>
                </div>
                <div class="item" data-aos="fade-left" data-aos-easing="ease-in-out">
                    <p class="title">Tổng tài sản</p>
                    <div><strong>174.643</strong> tỷ đồng <span>(9 tháng/2021)</span><i class="icon-hoaphat icon-prev"></i>
                    </div>
                </div>
                <div class="item" data-aos="fade-right" data-aos-easing="ease-in-out">
                    <p class="title">Thị phần số 1 về: </p>
                    <ul>
                        <li><i class="icon-hoaphat icon-next-small"></i>Thép xây dựng</li>
                        <li><i class="icon-hoaphat icon-next-small"></i>Ống thép</li>
                        <li><i class="icon-hoaphat icon-next-small"></i>Bò Úc</li>
                    </ul>
                </div>
                <div class="item" data-aos="fade-left" data-aos-easing="ease-in-out">
                    <p class="title">Số nộp ngân sách</p>
                    <div><strong>8.100</strong> tỷ đồng <span>(9 tháng/2021)</span><i class="icon-hoaphat icon-prev"></i>
                    </div>
                </div>
            </div>
            <div class="right">
                <p class="title">Hệ thống nhà máy</p>
                <ul>
                    <li>Hà Nội <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Hải Dương</li>
                    <li>Hưng Yên <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Phú Thọ</li>
                    <li>Hà Giang <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Bắc Giang</li>
                    <li>Thái Bình <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Quảng Bình</li>
                    <li>Đà Nẵng <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Quảng Ngãi</li>
                    <li>Bình Định <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Bình Dương</li>
                    <li>Bình Phước <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Long An</li>
                    <li>TP. Hồ Chí Minh <i class="fa fa-circle" aria-hidden="true"></i></li>
                    <li><i class="fa fa-circle" aria-hidden="true"></i> Đồng Nai</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="bottom-about">
        <img class="map" src="images/ban-do.png" alt="">
        <img class="dia-cau zoom" src="images/hinh-cau.png" alt="">
    </div>
    <div id="quality" class="default">
        <div class="wrap">
            <div class="title-news-event"><a href="" title="">Chất lượng hòa phát</a></div>
            <div class="left clear">
                <div class="chung-chi clear" data-aos="fade-right" data-aos-easing="ease-in-out">
                    <div class="title"><i class="icon-hoaphat icon-next"></i>Chứng chỉ chất lượng</div>
                    <div class="content default">
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/09/jis.png">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/09/jis-medium.png" alt="">
                            </a>
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/11/chung-nhan-tieu-chuan-gis-ton-hoa-phat-011.png"
                               style="display: none;">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/chung-nhan-tieu-chuan-gis-ton-hoa-phat-011-medium.png"
                                     alt="">
                            </a>
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/11/chung-nhan-tieu-chuan-gis-ton-hoa-phat-012.png"
                               style="display: none;">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/11/chung-nhan-tieu-chuan-gis-ton-hoa-phat-012-medium.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/09/astm.jpg">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/09/astm-medium.jpg" alt="">
                            </a>
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/ong-thep-astm.png"
                               style="display: none;">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/ong-thep-astm-medium.png" alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/logo-bsen.png">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/logo-bsen-medium.png" alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/09/iso-14001-2015.jpg">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/09/iso-14001-2015-medium.jpg" alt="">
                            </a>
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/iso-14001-2015-noi-that.jpg"
                               style="display: none;">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/iso-14001-2015-noi-that-medium.jpg"
                                     alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/logo-as-australian-standard-1.jpg">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/logo-as-australian-standard-1-medium.jpg"
                                     alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/09/iso-9001-2015.jpg">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/09/iso-9001-2015-medium.jpg" alt="">
                            </a>
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/iso-dien-lanh.jpg"
                               style="display: none;">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/iso-dien-lanh-medium.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <a class="show-more" href="" title="">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
                <div class="giai-thuong clear" data-aos="fade-right" data-aos-easing="ease-in-out">
                    <div class="title" id="manual2"><i class="icon-hoaphat icon-next"></i>Các giải thưởng</div>
                    <div class="content default">

                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/09/vnr-500.png">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/09/vnr-500-medium.png" alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/top-10-sao-vang-dat-viet.png">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/top-10-sao-vang-dat-viet-medium.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="item lightGallery-image">
                            <a href="https://sudospaces.com/hoaphat-com-vn/2019/10/top-10-doanh-nghiep-vat-lieu-xay-dung-uy-tin-nam-2019.jpg">
                                <img src="https://sudospaces.com/hoaphat-com-vn/2019/10/top-10-doanh-nghiep-vat-lieu-xay-dung-uy-tin-nam-2019-medium.jpg"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <a class="show-more" href="" title="">Xem thêm <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="right">
                <div class="box">
                    <i class="icon-hoaphat icon-logo"></i>
                    <p>Với tâm huyết dẫn đầu bằng chất lượng, Hòa Phát vươn cao tầm vóc mới</p>
                </div>
                <div class="tech default" data-aos="fade-down" data-aos-easing="ease-in-out">
                    <div class="title"><i class="icon-hoaphat icon-next"></i>Công nghệ</div>
                    <div class="video lightGallery-video">
                        <a href="https://www.youtube.com/watch?v=Rf-F6cBCBlw&amp;t=11s">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/watch?v=xahf-1dXmy8" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/watch?v=auMl7w043Dw&amp;t=1s" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/watch?v=dV5CtjZf5ss&amp;t=10s" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/watch?v=eRQfJrSX-GQ&amp;t=17s" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/watch?v=GiEmyLU8zS0&amp;t=17s" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/watch?v=kXLVsEKDT9U&amp;t=14s" style="display: none">
                            <img src="https://sudospaces.com/hoaphat-com-vn/2019/08/1-78-768x529.jpg" alt="">
                            <img class="play-video" src="images/play-video.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="news-home" class="default">
        <div class="wrap">
            <div class="title-news-event"><a href="" title="">Văn hóa doanh nghiệp</a></div>
            <div class="content default">
                <div class="col" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1200">
                    <div class="item-news">
                        <div class="image">
                            <a href=""><img
                                    src="https://sudospaces.com/hoaphat-com-vn/2021/10/z2878869682983-0c952ad987e9ba6a20345a800eb653e1.jpg"
                                    alt=""></a>
                        </div>
                        <p class="time">26/10/2021 16:00</p>
                        <h3><a href="">Chuyện 20 năm Hòa Phát bán thép</a></h3>
                        <p class="info">Anh Kiều Chí Công - Giám đốc Công ty TNHH Thép Hòa Phát Hưng Yên kể với chúng tôi,
                            năm 2002, Hòa Phát có dây chuyền cán thép đầu tiên 250.000 tấn/năm ...</p>
                        <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <ul>
                            <li><a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-said">
                        <a href="" title="">
                            <p class="content-said">"4 năm, 1 Khu Liên hợp công suất 5 triệu tấn trên năm và 11.000 CBCNV "
                            </p>
                            <p class="name">HPG News</p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="box-said web" data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-duration="1200">
                        <a href="" title="">
                            <p class="content-said">"Số nộp ngân sách của Hòa Phát tương đương với một tỉnh thứ 35-38 trên
                                tổng số 64 tỉnh, thành"</p>
                            <p class="name">-Ông Trần Đình Long-
                            </p>
                            <p class="name">Chủ tịch HĐQT Tập đoàn Hòa Phát</p>
                        </a>
                    </div>
                    <div class="item-news" data-aos="fade-up" data-aos-easing="ease-in-out">
                        <div class="image">
                            <a href=""><img src="https://sudospaces.com/hoaphat-com-vn/2021/01/nang-ly-1.jpg" alt=""></a>
                        </div>
                        <p class="time">19/01/2021 09:00</p>
                        <h3>
                            <a href="">
                                Ống thép và Tôn mạ màu Hòa Phát tổ chức hội nghị khách hàng chào Xuân 2021
                            </a>
                        </h3>
                        <p class="info">Ngày 15/1/2021, tại Trung tâm hội nghị Almaz Vinhome Riverside Long Biên, Tổng Công
                            ty Ống thép và Tôn mạ màu Hòa Phát (TCT) đã tổ chức “Hội nghị tri ...</p>
                        <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <ul>
                            <li><a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-said mobile" data-aos="fade-down" data-aos-easing="ease-in-out"
                         data-aos-duration="1200">
                        <a href="" title="">
                            <p class="content-said">"Số nộp ngân sách của Hòa Phát tương đương với một tỉnh thứ 35-38 trên
                                tổng số 64 tỉnh, thành"</p>
                            <p class="name">-Ông Trần Đình Long-
                            </p>
                            <p class="name">Chủ tịch HĐQT Tập đoàn Hòa Phát</p>
                        </a>
                    </div>
                </div>
                <div class="col" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1200">
                    <div class="item-news">
                        <div class="image">
                            <a href=""><img
                                    src="https://sudospaces.com/hoaphat-com-vn/2021/05/186108630-902108383983181-3714304099046071372-n.jpg"
                                    alt=""></a>
                        </div>
                        <p class="time">25/05/2021 10:00</p>
                        <h3>
                            <a href="">
                                Tập đoàn Hòa Phát ủng hộ 50 tỷ đồng vào Quỹ mua vắc xin phòng Covid-19
                            </a>
                        </h3>
                        <p class="info">Thực hiện lời kêu gọi của Thủ tướng, ngày 25/5/2021, ông Nguyễn Việt Thắng- Tổng
                            Giám đốc Tập đoàn Hòa Phát đã trao tặng 50 tỷ đồng vào Quỹ mua vắc ...</p>
                        <a href=""><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <ul>
                            <li><a target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href=""><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="box-said">
                        <a href="" title="">
                            <p class="content-said">“4 triệu tấn thép – Có gì đâu!”</p>
                            <p class="name">-Ông Kiều Chí Công-
                            </p>
                            <p class="name">Giám đốc Công ty TNHH Thép Hòa Phát Hưng Yên</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="partner" class="default">
        <div class="wrap">
            <div class="title-news-event"><a href="" title="">Đối tác phát triển</a></div>
            <div class="clear"></div>
            <div class="intro-cat-home">
                <div style="text-align: center;">
                    <h3>
                        VISI hiện đang là đại diện độc quyền của hơn 100&nbsp;hãng phần mềm &amp; thiết bị&nbsp;hàng đầu
                        trên thế giới, cung cấp các giải pháp phần mềm cấp cao CAD/CAM/CAE/PLM/CNC, thiết bị công nghiệp,
                        dịch vụ đào tạo và chuyển giao công nghệ, dịch vụ chạy mô
                        phỏng,...
                    </h3>
                </div>
            </div>
            <div class="c10"></div>
            <div class="news-home pos-re">
                <div class="partner owl-carousel owl-theme">
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <a href="#"><img src="images/partner/logo viettel vector-01.png" width="100%" alt="Logo-Viettel"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <img src="images/partner/1577330526741-1560761930178-1.png" width="100%"
                                     alt="Logo Viettel Aerospace Institute">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <img src="images/partner/Logo_MTA_new.png" width="100%" alt="Logo MTA">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <img src="images/partner/logo.png" width="100%" alt="Logo Elentec">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <img src="images/partner/logo@2x.png" width="100%" alt="Logo FOMECO">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <img src="images/partner/M1.png" width="100%" alt="Logo M1">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-partner item-hvr">
                            <div class="img-hvr">
                                <img src="images/partner/m3.jpg" width="100%" alt="Logo M3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal " class="modal close-full ">
        <!-- Modal content -->
        <div class="modal-content ">
            <span class="close close-full ">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>
    <style>
        .slider {
            width: 100%;
            float: left;
            box-shadow: 0 3px 5px #ddd;
            position: relative;
            height: 80vh;
            overflow: hidden;
        }

        .slider__slides {
            display: block;
        }

        .slider__control {
            z-index: 2;
            position: absolute;
            top: 50%;
            left: 5%;
            width: 60px;
            height: 60px;
            margin-left: -30px;
            margin-top: -30px;
            border-radius: 50%;
            background: #fff;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .slider__control--right {
            left: 95%;
        }

        .slider__control:hover {
            background-color: #2da6ff;
        }

        .slider__control-line {
            position: absolute;
            left: 23px;
            top: 50%;
            width: 3px;
            height: 14px;
            transform-origin: 50% 0;
            transform: rotate(-45deg);
        }

        .slider__control-line:nth-child(2) {
            transform: translateY(1px) rotate(-135deg);
        }

        .slider__control--right .slider__control-line {
            left: 37px;
            transform-origin: 1px 0;
            transform: rotate(45deg);
        }

        .slider__control--right .slider__control-line:nth-child(2) {
            transform: translateY(1px) rotate(135deg);
        }

        .slider__control-line:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #e2e2e2;
            transition: background-color 0.3s;
        }

        .slider__control:hover .slider__control-line:after {
            background-color: #fff;
        }

        .slider__control.a--rotation .slider__control-line:after {
            animation: arrowLineRotation 0.49s;
        }

        .slider__control.a--rotation .slider__control-line:nth-child(1):after {
            animation: arrowLineRotationRev 0.49s;
        }

        @keyframes arrowLineRotation {
            to {
                transform: rotate(180deg);
            }
        }

        @keyframes arrowLineRotationRev {
            to {
                transform: rotate(-180deg);
            }
        }

        .slide {
            overflow: hidden;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 150vmax;
            height: 150vmax;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            transition: clip-path 0s 0.91s;
            clip-path: circle(30px at 120vw 50%);
        }

        .slide.s--prev {
            clip-path: circle(30px at 30vw 50%);
        }

        .slide.s--active {
            z-index: 1;
            transition: clip-path 1.3s;
            clip-path: circle(120vmax at 120vw 50%);
        }

        .slide.s--active.s--active-prev {
            clip-path: circle(120vmax at 30vw 50%);
        }

        .slide:nth-child(1) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2020/05/kv-tap-doan-trang-chu.jpg");
        }

        .slide:nth-child(2) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/11/thep-xay-dung-1.jpg");
        }

        .slide:nth-child(3) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/11/ong-thep.jpg");
        }

        .slide:nth-child(4) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/12/ton-ma-mau-2.jpg");
        }

        .slide:nth-child(5) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/11/che-tao-kim-loai.jpg");
        }

        .slide:nth-child(6) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/11/dien-lanh.jpg");
        }

        .slide:nth-child(7) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/11/nong-nghiep.jpg");
        }

        .slide:nth-child(8) .slide__inner {
            background-image: url("https://sudospaces.com/hoaphat-com-vn/2019/11/bat-dong-san.jpg");
        }

        .slide__inner {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 115vw;
            height: 100vh;
            margin-left: -50vw;
            margin-top: -50vh;
            background-size: 100% 100%;
            background-position: center center;
        }

        .slide__inner:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        .slide__content {
            position: relative;
        }

        .slide__inner .text {
            position: absolute;
            color: #fff;
            margin-left: calc((100% - 1450px) / 2);
            z-index: 10;
            top: 150px;
        }

        .slide__inner div.name {
            color: #fff;
            font-size: 22px;
            text-transform: uppercase;
            padding-bottom: 10px;
        }

        .slide__inner .text p.p1 {
            font-size: 35px;
            font-weight: bold;
            width: 500px;
            padding-bottom: 10px;
            position: relative;
        }

        .slide__inner .text p {
            color: #fff;
            font-size: 18px;
            width: 700px;
        }

        .anima {
            animation-name: margin;
            animation-duration: 3s;
        }

        @keyframes margin {
            from {
                margin-left: calc((100% - 1900px) / 2);
            }
            to {
                margin-left: calc((100% - 1450px) / 2);
            }
        }

    </style>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
            integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(window).on('load', function () {
            $('#page').fadeOut().remove();
            // setTimeout(function () {
            //     $('#myModal').slideToggle();
            // }, 10000);
        });

        $('.close-full').click(function () {
            $('#myModal').fadeOut();
            clearTimeout();
        });

        $(document).ready(function () {
            $('.partner').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3400,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });

            $(window).scroll(function () {
                var aTop = $('.header-fix').height();
                if ($(this).scrollTop() >= aTop) {
                    $('.header-fix').css({
                        "opacity ": 1,
                        "visibility ": "visible "
                    });
                } else {
                    $('.header-fix').css({
                        "opacity ": 0,
                        "visibility ": "hidden "
                    });
                }
            });

            //Css menu mobile
            $('.menu-mobile').click(function () {
                $('.menu-container').toggleClass('open');
            });

            $('.close').click(function () {
                $('.menu-container').toggleClass('open');
            });

            $('.has-child span').click(function () {
                $('.has-child.active').removeClass('active');
                $('.has-child.active .menu-child .block').removeClass('block').slideToggle('fast');
                $(this).parent().toggleClass('active');
                $('.has-child.active .menu-child').addClass('block').slideToggle('fast');
                $('.has-child.active span').toggleClass('rorate');
            });

            $('#icon-search').click(function () {
                $('.mb-search-box').fadeIn();
            });

            $('#close-box-search').click(function () {
                $('.mb-search-box').fadeOut();
            });

            var $slides = document.querySelectorAll('.slide');
            var $controls = document.querySelectorAll('.slider__control');
            var numOfSlides = $slides.length;
            var slidingAT = 1300; // sync this with scss variable
            var slidingBlocked = false;

            [].slice.call($slides).forEach(function ($el, index) {
                var i = index + 1;
                $el.classList.add('slide-' + i);
                $el.dataset.slide = i;
            });

            [].slice.call($controls).forEach(function ($el) {
                $el.addEventListener('click', controlClickHandler);
            });

            function controlClickHandler() {
                if (slidingBlocked) return;
                slidingBlocked = true;

                var $control = this;
                var isRight = $control.classList.contains('m--right');
                var $curActive = document.querySelector('.slide.s--active');
                var index = +$curActive.dataset.slide;
                (isRight) ? index++ : index--;
                if (index < 1) index = numOfSlides;
                if (index > numOfSlides) index = 1;
                var $newActive = document.querySelector('.slide-' + index);

                $control.classList.add('a--rotation');
                $curActive.classList.remove('s--active', 's--active-prev');
                document.querySelector('.slide.s--prev').classList.remove('s--prev');

                $newActive.classList.add('s--active');
                if (!isRight) $newActive.classList.add('s--active-prev');


                var prevIndex = index - 1;
                if (prevIndex < 1) prevIndex = numOfSlides;

                document.querySelector('.slide-' + prevIndex).classList.add('s--prev');

                setTimeout(function () {
                    $control.classList.remove('a--rotation');
                    slidingBlocked = false;
                }, slidingAT * 0.75);

                $('.slide__inner .text').removeClass('anima');
                $('.slide-' + index + ' .slide__inner .text').addClass('anima');
            };

            // $('#home-slider-thumbnail .owl-item').hover(function () {
            //     $('#home-slider-thumbnail .owl-item.active').removeClass('active');
            //     $(this).addClass('active');
            //     controlClickHandler($(this).index());
            // });
        });
    </script>
@endsection
