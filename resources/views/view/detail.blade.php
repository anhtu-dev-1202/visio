@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"
    />
@endsection

@section('content')
{{--    <div id="banner-product" class="default">--}}
{{--        <img src="https://sudospaces.com/hoaphat-com-vn/2020/12/san-pham.jpg" onerror="this.src='https://sudospaces.com/hoaphat-com-vn/2019/08/banner-2-1.png'" alt="">--}}
{{--        <div class="wrap">--}}
{{--            <h3>Sản phẩm</h3>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div id="news-detail" class="default">
        <div class="wrap">
            <div class="content-detail default">
                <h1>{{ $data->title }}</h1>
                <p class="clear time"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $data->created_at->format('d-m-Y') }}  <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $data->created_at->format('H:i') }}
                </p>
                <div class="detail css-content default">
                   {!! $data->content !!}
                </div>
{{--                <div class="social default">--}}
{{--                    <div style="float: right;padding-top: 20px; display: inline-block" class="addthis_inline_share_toolbox_d0v4" data-url="https://www.hoaphat.com.vn/tin-tuc/100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html" data-title="100% CBCNV Thép Hòa Phát Dung Quất đã được tiêm vắc xin phòng Covid-19"--}}
{{--                         data-description="  Song song với rất nhiều biện pháp phòng dịch, Thép Hòa Phát Dung Quất đang tích cực triển khai công tác tiêm vắc xin phòng ngừa Covid-19. Tính đến 15/9/2021, 100% CBCNV Công ...">--}}
{{--                        <div id="atstbx" class="at-share-tbx-element at-share-tbx-native addthis_default_style addthis_20x20_style addthis-smartlayers addthis-animated at4-show">--}}
{{--                            <a class="addthis_button_facebook_like at_native_button at300b" fb:like:layout="button_count">--}}
{{--                                <div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false" data-share="false" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="https://www.hoaphat.com.vn/tin-tuc/100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html"--}}
{{--                                     data-send="false" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90">--}}
{{--                                    <span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe--}}
{{--                                            name="f1358e82bd092" width="90px" height="25px"--}}
{{--                                            data-testid="fb:like Facebook Social Plugin"--}}
{{--                                            title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true"--}}
{{--                                            allowfullscreen="true" scrolling="no" allow="encrypted-media"--}}
{{--                                            src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=172525162793917&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfe0799ac657098%26domain%3Dwww.hoaphat.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.hoaphat.com.vn%252Ff8b73bdceb515c%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"--}}
{{--                                            style="border: none; visibility: visible; width: 90px; height: 28px;"--}}
{{--                                            class=""></iframe></span></div>--}}
{{--                            </a>--}}
{{--                            <a class="addthis_button_facebook_share at_native_button at300b" fb:share:layout="button_count">--}}
{{--                                <div class="fb-share-button fb_iframe_widget" data-layout="button_count" data-href="https://www.hoaphat.com.vn/tin-tuc/100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=172525162793917&amp;container_width=0&amp;href=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey">--}}
{{--                                    <span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe--}}
{{--                                            name="f1a69c67b2febe" width="1000px" height="1000px"--}}
{{--                                            data-testid="fb:share_button Facebook Social Plugin"--}}
{{--                                            title="fb:share_button Facebook Social Plugin" frameborder="0"--}}
{{--                                            allowtransparency="true" allowfullscreen="true" scrolling="no"--}}
{{--                                            allow="encrypted-media"--}}
{{--                                            src="https://www.facebook.com/v2.6/plugins/share_button.php?app_id=172525162793917&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df34a6c853f36efc%26domain%3Dwww.hoaphat.com.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.hoaphat.com.vn%252Ff8b73bdceb515c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey"--}}
{{--                                            style="border: none; visibility: visible; width: 86px; height: 20px;"--}}
{{--                                            class=""></iframe></span></div>--}}
{{--                            </a>--}}
{{--                            <a class="addthis_button_tweet at_native_button at300b">--}}
{{--                                <div class="tweet_iframe_widget" style="width: 62px; height: 25px;"><span><iframe--}}
{{--                                            id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"--}}
{{--                                            allowfullscreen="true"--}}
{{--                                            class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"--}}
{{--                                            style="position: static; visibility: visible; width: 73px; height: 20px;"--}}
{{--                                            title="Twitter Tweet Button"--}}
{{--                                            src="https://platform.twitter.com/widgets/tweet_button.a53eecb4584348a2ad32ec2ae21f6eae.vi.html#dnt=false&amp;id=twitter-widget-0&amp;lang=vi&amp;original_referer=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html&amp;size=m&amp;text=100%25%20CBCNV%20Th%C3%A9p%20H%C3%B2a%20Ph%C3%A1t%20Dung%20Qu%E1%BA%A5t%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ti%C3%AAm%20v%E1%BA%AFc%20xin%20ph%C3%B2ng%20Covid-19%3A&amp;time=1636557926476&amp;type=share&amp;url=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html%23.YYvkZMFSsqk.twitter"--}}
{{--                                            data-url="https://www.hoaphat.com.vn/tin-tuc/100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html#.YYvkZMFSsqk.twitter"></iframe></span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="addthis_button_linkedin_counter at_native_button at300b">--}}
{{--                                <div class="linkedin_counter_iframe_widget" style="width: 57px; height: 25px;"><span><iframe--}}
{{--                                            title="AddThis | LinkedIn Button" frameborder="0" role="presentation" scrolling="no"--}}
{{--                                            allowtransparency="true" scrollbars="no" style="width:57px; height:25px;"--}}
{{--                                            src="https://s7.addthis.com/static/linkedin.html#href=https%3A%2F%2Fwww.hoaphat.com.vn%2Ftin-tuc%2F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html&amp;dr=http%3A%2F%2Flocalhost%3A63342%2F&amp;conf=username%3Dra-5a7aa5c25243057c%26services_exclude%3D%26services_exclude_natural%3D%26services_compact%3Dfacebook%252Ctwitter%252Cprint%252Cemail%252Cpinterest_share%252Cgmail%252Clinkedin%252Cmailto%252Ctumblr%252Cmessenger%252Cmore%26product%3Dscopl-300%26pubid%3Dra-5a7aa5c25243057c&amp;share=imp_url%3D0%26url%3Dhttps%253A%252F%252Fwww.hoaphat.com.vn%252Ftin-tuc%252F100-cbcnv-thep-hoa-phat-dung-quat-da-duoc-tiem-vac-xin-covid-19.html%26title%3D100%252525%252520CBCNV%252520Th%2525C3%2525A9p%252520H%2525C3%2525B2a%252520Ph%2525C3%2525A1t%252520Dung%252520Qu%2525E1%2525BA%2525A5t%252520%2525C4%252591%2525C3%2525A3%252520%2525C4%252591%2525C6%2525B0%2525E1%2525BB%2525A3c%252520ti%2525C3%2525AAm%252520v%2525E1%2525BA%2525AFc%252520xin%252520ph%2525C3%2525B2ng%252520Covid-19%26description%3DSong%2520song%2520v%25E1%25BB%259Bi%2520r%25E1%25BA%25A5t%2520nhi%25E1%25BB%2581u%2520bi%25E1%25BB%2587n%2520ph%25C3%25A1p%2520ph%25C3%25B2ng%2520d%25E1%25BB%258Bch%252C%2520Th%25C3%25A9p%2520H%25C3%25B2a%2520Ph%25C3%25A1t%2520Dung%2520Qu%25E1%25BA%25A5t%2520%25C4%2591ang%2520t%25C3%25ADch%2520c%25E1%25BB%25B1c%2520tri%25E1%25BB%2583n%2520khai%2520c%25C3%25B4ng%2520t%25C3%25A1c%2520ti%25C3%25AAm%2520v%25E1%25BA%25AFc%2520xin%2520ph%25C3%25B2ng%2520ng%25E1%25BB%25ABa%2520Covid-19.%2520T%25C3%25ADnh%2520%25C4%2591%25E1%25BA%25BFn%252015%252F9%252F2021%252C%2520100%2525%2520CBCNV%2520C%25C3%25B4ng%2520...%26smd%3Drsi%253D%2526gen%253D0%2526rsc%253D%2526dr%253Dhttp%25253A%25252F%25252Flocalhost%25253A63342%25252F%2526sta%253DAT-ra-5a7aa5c25243057c%25252F-%25252F-%25252F618be4640b9c45ea%25252F1%26media%3Dundefined%26hideEmailSharingConfirmation%3Dfalse%26passthrough%3Dlinkedin%253D&amp;li="></iframe></span>--}}
{{--                                </div>--}}
{{--                            </a><a class="addthis_counter addthis_pill_style at_native_button" href="#" style="display: inline-block;"><a class="atc_s addthis_button_compact">Chia--}}
{{--                                    sẻ<span></span></a>--}}
{{--                                <a class="addthis_button_expanded" target="_blank" title="Thêm..." href="#"></a>--}}
{{--                            </a>--}}
{{--                            <div class="atclear"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="relate-news default">
                    <hr>
                    <p class="title">{{ $key == 1 ? 'Sản phẩm' : 'Tin' }} liên quan</p>
                    <div class="content-relate default">
                        <ul class="content-relate-owl owl-carousel owl-loaded">
                            @foreach($lq as $obj)
                            <li>
                                <div class="item">
                                    <a href="{{ route('detailP', ['slug' => $obj->slug]) }}">
                                        <div class="image" style="background-image: url({{ asset($obj->image) }})">
                                        </div>
                                        <p class="clear time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ $data->created_at->format('d-m-Y') }}
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $data->created_at->format('H:i') }}
                                        </p>
                                        <h5>{{ $obj->title }}</h5>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sidebar-news-detail">
                <div class="news-new default">
                    <p class="title">Tin mới nhất</p>
                    <ul>
                        @foreach($new as $obj)
                            <li>
                                <a href="{{ route('detailN', ['slug' => $obj->slug]) }}">
                                    <div class="image">
                                        <img src="{{ asset($obj->image) }}" alt="">
                                    </div>
                                    <div class="infomation">
                                        <p class="clear time">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ $data->created_at->format('d-m-Y') }}
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $data->created_at->format('H:i') }}
                                        </p>
                                        <h3>{{ $obj->title }}</h3>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="news-new default">
                    <p class="title">Tin đọc nhiều</p>
                    <ul>
                        @foreach($view as $obj)
                        <li>
                            <a href="{{ route('detailN', ['slug' => $obj->slug]) }}">
                                <div class="image">
                                    <img src="{{ asset($obj->image) }}" alt="">
                                </div>
                                <div class="infomation">
                                    <p class="clear time">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ $data->created_at->format('d-m-Y') }}
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $data->created_at->format('H:i') }}
                                    </p>
                                    <h3>{{ $obj->title }}</h3>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
            integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $(window).on('load', function () {
                $('#page').fadeOut().remove();
            });

            $('.content-relate-owl').owlCarousel({
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
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>
@endsection
