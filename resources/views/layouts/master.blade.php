<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
          integrity="sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
</head>
<body>
<div id="page">
    <div class="preloader-1">
        <div>Loading</div>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
        <span class="line line-4"></span>
        <span class="line line-5"></span>
        <span class="line line-6"></span>
        <span class="line line-7"></span>
        <span class="line line-8"></span>
        <span class="line line-9"></span>
    </div>
</div>
<div id="header" class="default header-bor">
    <div class="wrap">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('/images/logo.png') }}" alt=""></a>
        </div>
        <div class="search-nav">
            <div class="search-social default">
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <div id="google_translate_element"></div>
                            </a>
                        </li>
                        <li class="icon-fb">
                            <a target="_blank" href="">
                                <svg width="28px" height="28px" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;"
                                     xml:space="preserve">
<g>
    <circle style="fill:#007AB9;" cx="56.098" cy="56.097" r="56.098"/>
    <g>
        <path style="fill:#F1F2F2;" d="M89.616,60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118
			c-3.705,0-5.906,2.491-6.878,4.903c-0.353,0.862-0.444,2.059-0.444,3.268v22.524H48.684c0,0,0.18-36.546,0-40.329h13.411v5.715
			c-0.027,0.045-0.065,0.089-0.089,0.132h0.089v-0.132c1.782-2.742,4.96-6.662,12.085-6.662
			C83.002,42.462,89.616,48.226,89.616,60.611L89.616,60.611z M34.656,23.969c-4.587,0-7.588,3.011-7.588,6.967
			c0,3.872,2.914,6.97,7.412,6.97h0.087c4.677,0,7.585-3.098,7.585-6.97C42.063,26.98,39.244,23.969,34.656,23.969L34.656,23.969z
			 M27.865,83.739H41.27V43.409H27.865V83.739z"/>
    </g>
</g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
</svg>
                            </a>
                        </li>
                        <li class="icon-fb">
                            <a target="_blank" href="">
                                <svg width="28px" height="28px" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 2500 2372" style="enable-background:new 0 0 2500 2372;"
                                     xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #FDFEFE;
    }

    .st1 {
        fill: #0180C7;
    }

    .st2 {
        fill: #0172B1;
    }

    .st3 {
        fill: none;
        stroke: #0180C7;
        stroke-width: 10.8658;
        stroke-miterlimit: 54.3289;
    }
</style>
                                    <path class="st0" d="M566.4,1939.8c-8.3-3.7-14.4-7.9-4.6-16.2c6-4.6,12.5-8.8,19-13c60.7-39.4,117.7-82.5,155.3-146
	c31.5-52.8,26.4-83.9-13-122.8C503.3,1422,406.9,1159.2,455.1,848.7c27.3-175.2,107.5-326.8,224.3-458.4
	c70.5-79.7,154.3-144.2,246.1-197.9c5.6-3.2,13.4-4.2,14.4-12.5c-1.9-4.6-5.1-3.2-7.9-3.2c-156.2,0-312.4-3.2-468.1,0.9
	c-149.3,4.6-278.1,120-277.6,285.5c0.9,483.4,0,966.9,0,1450.8c0,150.2,114.5,275.8,264.2,281.4c126.5,5.1,253.1,0.9,380.1,0.5
	c9.3,0.5,18.5,0.9,27.8,0.9h669.3c166.9,0,333.7,0.9,500.6,0c154.8,0,280.4-125.1,280.4-279.5v-2.8v-271.2c0-6.5,2.3-13.4-1.9-20.4
	c-8.3,0.5-11.6,7.4-16.2,12.1c-89.9,90.4-196.1,163.2-312.4,214.6c-285.1,125.6-575.2,134.4-869.5,33.4
	c-25.5-9.3-53.3-10.2-79.7-3.7c-38.9,9.7-77.4,21.3-115.9,32.9C800,1947.2,684.5,1962.9,566.4,1939.8L566.4,1939.8z M902.4,1158.7
	c7.9-10.2,12.1-16.2,16.7-22.2c60.7-76.9,121.4-153.9,182.2-231.3c17.6-22.2,35.2-45,46.4-71.8c13-30.6-0.9-59.3-32.4-70.5
	c-13.9-4.2-28.7-6-43.6-5.1c-82.5-0.5-165.5-0.5-248,0c-11.6,0-23.2,1.4-34.3,4.2c-26,6.5-41.7,32.9-35.2,59.3
	c4.6,17.6,18.5,31.5,36.2,35.7c11.1,2.8,22.7,4.2,34.3,3.7c50.1,0.5,100.6,0,150.6,0.5c5.6,0,12.5-3.7,16.7,4.6
	c-4.2,5.6-8.3,11.1-12.5,16.2c-71.8,90.8-143.2,182.2-215.1,273c-17.6,22.7-26.9,47.7-13.9,75.6s39.4,32.9,66.3,34.8
	c21.3,1.4,43.1,0.5,64.9,0.5c75.1,0,149.7,0.5,224.8-0.5c39.9-0.5,61.2-24.6,57-61.6c-3.2-29.2-23.2-44.5-60.3-45
	C1037.7,1158.3,972.4,1158.7,902.4,1158.7L902.4,1158.7z M1440.1,914.9c-57.9-50.5-121.9-53.8-184.5-16.7
	c-76,44.5-103.8,117.3-94.6,201.6c8.8,78.8,43.1,143.2,125.6,169.6c51.4,16.7,99.2,10.7,141.4-23.6c11.1-8.8,14.4-7,22.2,2.8
	c15.3,19.5,41.7,26.9,64.9,18.1c23.2-7,38.5-28.3,38.5-52.4c0.5-92.7,0.9-185.4,0-278.1c-0.5-37.1-35.2-60.7-71.4-53.3
	C1462.3,887.1,1451.2,900.6,1440.1,914.9L1440.1,914.9z M1761.3,1086.9c-1.9,115.9,94.1,203.5,214.6,191.4
	c110.8-11.1,182.6-94.1,178.9-211.4c-3.7-115.9-89.9-195.1-208.1-191.4C1835.9,878.8,1757.6,967.8,1761.3,1086.9z M1720.5,994.7
	c0-72.8,0.5-145.1,0-217.9c0-37.1-23.6-60.3-58.9-59.8c-34.3,0.5-57,23.6-57.5,59.3c-0.5,21.8,0,43.1,0,64.9v368.5
	c0,28.7,17.6,53.8,40.8,59.8c32,8.8,64.9-10.2,73.2-42.2c1.4-5.6,2.3-11.1,1.9-17.1C1721,1138.3,1720.5,1066.5,1720.5,994.7
	L1720.5,994.7z"/>
                                    <path class="st1" d="M830.1,2196.1c-126.5,0-253.5,4.2-380.1-0.5c-149.7-6-264.2-131.6-264.2-281.4c0-483.4,0.9-966.9,0-1450.8
	c0-165.5,129.3-280.9,278.1-285.1c155.7-4.2,311.9-0.9,468.1-0.9c2.8,0,6.5-1.4,7.9,3.2c-0.9,8.3-9.3,9.3-14.4,12.5
	C833.8,247,749.9,311.4,679.4,391.2c-116.3,131.6-197,282.7-224.3,458.4c-48.2,310.1,48.7,573.4,267.9,793.1
	c38.9,39.4,44,70,13,122.8c-37.5,63.5-94.6,106.6-155.3,146c-6.5,3.7-13,8.3-19.5,12.5c-9.7,8.3-3.7,12.5,4.6,16.2
	c1.9,4.2,4.2,7.9,7,11.6c53.3,47.3,103.8,97.8,156.2,146c24.6,22.7,49.1,46.4,72.8,70C811.5,2176.6,827.8,2179.4,830.1,2196.1z"/>
                                    <path class="st2" d="M830.1,2196.1c-2.3-16.2-18.5-19-28.3-28.7c-23.6-24.1-48.2-47.3-72.8-70c-52.4-48.2-102.9-98.7-156.2-146
	c-2.8-3.7-5.1-7.4-7-11.6c118.2,23.2,233.6,7.4,347.2-27.3c38.5-11.6,76.9-23.2,115.9-32.9c26.4-7,54.2-5.6,79.7,3.7
	c293.9,101,584,91.8,869.5-33.4c116.3-51.4,222.5-123.8,312.4-214.1c4.6-4.6,7.9-11.6,16.2-12.1c4.2,6.5,1.9,13.4,1.9,20.4v271.2
	c0.9,154.8-123.3,280.9-278.1,282.3h-2.3c-166.9,0.9-333.7,0-500.6,0H857.9C848.6,2196.5,839.4,2196.1,830.1,2196.1L830.1,2196.1z"
                                    />
                                    <path class="st1" d="M902.4,1158.7c70,0,135.8-0.5,201.2,0c36.6,0.5,56.5,15.8,60.3,45c4.2,36.6-17.1,61.2-57,61.6
	c-75.1,0.9-149.7,0.5-224.8,0.5c-21.8,0-43.1,0.9-64.9-0.5c-26.9-1.4-53.3-7-66.3-34.8c-13-27.8-3.7-52.8,13.9-75.6
	c71.4-90.8,143.2-182.2,215.1-273c4.2-5.6,8.3-11.1,12.5-16.2c-4.6-7.9-11.1-4.2-16.7-4.6c-50.1-0.5-100.6,0-150.6-0.5
	c-11.6,0-23.2-1.4-34.3-3.7c-26.4-6-42.6-32.4-36.6-58.4c4.2-17.6,18.1-32,35.7-36.2c11.1-2.8,22.7-4.2,34.3-4.2
	c82.5-0.5,165.5-0.5,248,0c14.8-0.5,29.2,1.4,43.6,5.1c31.5,10.7,45,39.9,32.4,70.5c-11.1,26.4-28.7,49.1-46.4,71.8
	c-60.7,77.4-121.4,154.3-182.2,230.8C914.4,1142.5,909.8,1148.5,902.4,1158.7L902.4,1158.7z"/>
                                    <path class="st1" d="M1440.1,914.9c11.1-14.4,22.7-27.8,41.7-31.5c36.6-7.4,70.9,16.2,71.4,53.3c1.4,92.7,0.9,185.4,0,278.1
	c0,24.1-15.8,45.4-38.5,52.4c-23.2,8.8-49.6,1.9-64.9-18.1c-7.9-9.7-11.1-11.6-22.2-2.8c-42.2,34.3-89.9,40.3-141.4,23.6
	c-82.5-26.9-116.3-91.3-125.6-169.6c-9.7-84.8,18.5-157.1,94.6-201.6C1318.2,861.2,1382.1,864.4,1440.1,914.9L1440.1,914.9z
	 M1276,1084.1c0.9,20.4,7.4,39.9,19.5,56.1c25,33.4,72.8,40.3,106.6,15.3c5.6-4.2,10.7-9.3,15.3-15.3c26-35.2,26-93.2,0-128.4
	c-13-18.1-33.4-28.7-55.2-29.2C1311.2,979.4,1275.5,1018.8,1276,1084.1z M1761.3,1086.9c-3.7-119.1,74.6-208.1,185.9-211.4
	c118.2-3.7,204.4,75.6,208.1,191.4c3.7,117.3-68.1,200.2-178.9,211.4C1855.4,1290.4,1759.4,1202.8,1761.3,1086.9L1761.3,1086.9z
	 M1877.6,1075.8c-0.9,23.2,6,45.9,19.9,64.9c25.5,33.4,73.2,39.9,106.6,13.9c5.1-3.7,9.3-8.3,13.4-13c26.9-35.2,26.9-94.6,0.5-129.8
	c-13-17.6-33.4-28.7-55.2-29.2C1912.9,979.8,1877.6,1017.8,1877.6,1075.8z M1720.5,994.7c0,71.8,0.5,143.7,0,215.5
	c0.5,32.9-25.5,60.3-58.4,61.2c-5.6,0-11.6-0.5-17.2-1.9c-23.2-6-40.8-30.6-40.8-59.8V841.2c0-21.8-0.5-43.1,0-64.9
	c0.5-35.7,23.2-58.9,57.5-58.9c35.2-0.5,58.9,22.7,58.9,59.8C1721,849.6,1720.5,922.4,1720.5,994.7z"/>
                                    <path class="st0" d="M1276,1084.1c-0.5-65.4,35.2-104.8,85.7-102c21.8,0.9,42.2,11.6,55.2,29.7c26,34.8,26,93.2,0,128.4
	c-25,33.4-72.8,40.3-106.6,15.3c-5.6-4.2-10.7-9.3-15.3-15.3C1283.4,1124,1276.9,1104.5,1276,1084.1L1276,1084.1z M1877.6,1075.8
	c0-57.5,35.2-95.9,85.3-93.2c21.8,0.5,42.2,11.6,55.2,29.2c26.4,35.2,26.4,95-0.5,129.8c-26,32.9-74.2,38.5-107.1,12.5
	c-5.1-3.7-9.3-8.3-13-13.4C1883.7,1121.7,1877.2,1099,1877.6,1075.8z"/>
                                    <path class="st3" d="M489.4,178.9h1520.8c166.4,0,301.3,134.9,301.3,301.3v1404.4c0,166.4-134.9,301.3-301.3,301.3H489.4
	c-166.4,0-301.3-134.9-301.3-301.3V480.2C188.1,313.8,323,178.9,489.4,178.9z"/>
</svg>
                            </a>
                        </li>
                        <li class="icon-yt">
                            <a target="_blank" href="">
                                <svg viewBox="0 0 152 152" width="28px" height="28px"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Color">
                                            <g id="_02.YouTube" data-name="02.YouTube">
                                                <circle id="Background" cx="76" cy="76" fill="#f00" r="76"/>
                                                <path id="Icon"
                                                      d="m100.87 47.41h-49.74a15.13 15.13 0 0 0 -15.13 15.14v26.9a15.13 15.13 0 0 0 15.13 15.14h49.74a15.13 15.13 0 0 0 15.13-15.14v-26.9a15.13 15.13 0 0 0 -15.13-15.14zm-35.41 40.85v-24.52l21.08 12.26z"
                                                      fill="#fff"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="icon-yt">
                            <a target="_blank" href="">
                                <svg viewBox="0 0 176 176" width="28px" height="28px"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="_01.facebook" data-name="01.facebook">
                                            <circle id="background" cx="88" cy="88" fill="#3a559f" r="88"/>
                                            <path id="icon"
                                                  d="m115.88 77.58-1.77 15.33a2.87 2.87 0 0 1 -2.82 2.57h-16l-.08 45.45a2.05 2.05 0 0 1 -2 2.07h-16.21a2 2 0 0 1 -2-2.08v-45.44h-12a2.87 2.87 0 0 1 -2.84-2.9l-.06-15.33a2.88 2.88 0 0 1 2.84-2.92h12.06v-14.8c0-17.18 10.2-26.53 25.16-26.53h12.26a2.88 2.88 0 0 1 2.85 2.92v12.9a2.88 2.88 0 0 1 -2.85 2.92h-7.52c-8.13 0-9.71 4-9.71 9.78v12.81h17.87a2.88 2.88 0 0 1 2.82 3.25z"
                                                  fill="#fff"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <form action="{{ route('products') }}" id="search-header">
                        <input type="text" name="keyword">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="navigation default">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach($category as $obj)
                                <li>
                                    <a href="{{ route('product', ['slug' => $obj->slug]) }}">{{ $obj->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('service') }}">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">Tin tức</a>
                    </li>
                    <li>
                        <a href="{{ route('video') }}">Video</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="header" class="header-fix default">
    <div class="wrap">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('/images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="search-nav">
            <div class="navigation default">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach($category as $obj)
                                <li>
                                    <a href="{{ route('product', ['slug' => $obj->slug]) }}">{{ $obj->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('service') }}">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">Tin tức</a>
                    </li>
                    <li>
                        <a href="{{ route('video') }}">Video</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="header-mobile" class="default">
    <div class="wrap">
        <div class="menu-mobile">
            <img src="{{ asset('/images/mobile_btn_menu.png') }}" alt="">
        </div>
        <div class="logo">
            <a href=""><img src="{{ asset('/images/logo.png') }}" alt=""></a>
        </div>
        <div class="search" id="icon-search">
            <img src="{{ asset('/images/mobile_btn_search.png') }}" alt="">
        </div>
    </div>
</div>
<div class="mb-search-box">
    <div class="header_text">
        <div class="fl"><em id="close-box-search"></em></div>
        <div class="search_warp">
            <div class="search">
                <form id="form-search" method="GET" action="https://www.hoaphat.com.vn/tim-kiem">
                    <em style="display: none">x</em>
                    <input type="text" name="keyword" placeholder="Bạn cần tìm gì ?" autocomplete="off" value="">
                    <button type="submit"><i class="search_btn"><i></i></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="menu-container">
    <div class="menu-logo">
        <a href=""><img class="logo" src="{{ asset('/images/logo.png') }}" alt=""></a>
        <a href="javascript:;" data-menu_toggle="toggle"><img class="close"
                                                              src="{{ asset('/images/header_close.png') }}" alt=""></a>
    </div>
{{--    <div class="menu-top">--}}
{{--        <div class="menu-language">--}}
{{--            <ul>--}}
{{--                <li><a href="" class="active">--}}
{{--                        <div id="google_translate_element"></div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="menu-content">
        <ul>
            <li class="has-child">
                <a href="" title="">Giới thiệu</a>
                <span>►</span>
                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="" title="">Giới thiệu chung</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Sứ mệnh tầm nhìn</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Lịch sử hình thành</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Sơ đồ tổ chức</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Công ty thành viên</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Văn hóa doanh nghiệp</a>
                    </div>
                </div>
            </li>
            <li class="has-child">
                <a href="" title="">Sản phẩm</a>
                <span>►</span>
                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Thép xây dựng</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Ống thép</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Tôn mạ màu - mạ kẽm</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Điện máy gia dụng</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Chế tạo kim loại</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Bất động sản</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="" target="_blank">Nông nghiệp</a>
                    </div>
                </div>
            </li>
            <li class="has-child">
                <a href="" title="">Chất lượng hòa phát</a>
                <span>►</span>
                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="" title="">Chứng chỉ chất lượng</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Công nghệ</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Giải thưởng</a>
                    </div>
                </div>
            </li>
            <li class="has-child">
                <a href="" title="">Quan hệ cổ đông</a>
                <span>►</span>
                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="" title="">Công bố thông tin</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Báo cáo tài chính</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Báo cáo thường niên</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Đại hội cổ đông</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Văn bản pháp lý</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Văn bản cáo bạch</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Trợ giúp cổ đông</a>
                    </div>
                </div>
            </li>
            <li class="has-child">
                <a href="" title="">Tin tức</a>
                <span>►</span>
                <div class="menu-child">
                    <div class="menu-child__item ">
                        <a href="" title="">Tin tức tập đoàn</a>
                    </div>
                    <div class="menu-child__item ">
                        <a href="" title="">Báo chí viết về Hòa Phát</a>
                    </div>
                </div>
            </li>
            <li>
                <a href="" title=""> Tuyển dụng</a>
            </li>
            <li>
                <a href="" title="">Liên hệ</a>
            </li>
        </ul>
    </div>
</div>

@yield('content')

<div id="footer">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h6>THÔNG TIN LIÊN HỆ</h6>
                <ul class="list-unstyled">
                    <li>
                        <span>
                        <i class="fa fa-building"></i> Liên hệ văn phòng VISI hoặc gọi điện cho chúng tôi để nhận được tư vấn và hỗ trợ một cách nhanh nhất.
                        </span>
                    </li>
                    <li>
                        <span>
                       <i class="fa fa-map-marker"></i> Tầng 18A, tòa nhà MHDI, số 68 Nguyễn Cơ Thạch, Nam Từ Liêm, Hà Nội
                        </span>
                    </li>
                    <li>
                        <span>
                       <i class="fa fa-fax"></i> support@visi.com.vn/
                        <br><a class="email" href="linhnt@visi.com.vn">linhnt@visi.com.vn</a>
                        </span>
                    </li>
                    <li>
                        <span>
                        <i class="fa fa-phone"></i> 0911.392.019
                        </span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12  col-md-6 col-lg-3">
                <h6>GIỚI THIỆU</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Giới thiệu chung</a>
                    </li>
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Sứ mệnh và tầm nhìn</a>
                    </li>
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Văn hóa doanh nghiệp</a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-12  col-md-6 col-lg-3">
                <h6>SẢN PHẨM</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Giải pháp mô phỏng hệ thống 1D</a>
                    </li>
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Giải pháp mô phỏng 3D</a>
                    </li>
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Giải pháp và thiết bị</a>
                    </li>
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Giải pháp thiết kế</a>
                    </li>
                    <li>
                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Giải pháp gia công</a>
                    </li>
                    <li>

                        <a href=""><span><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                              viewBox="0 0 480.026 480.026"  xml:space="preserve">
<g>
	<g>
		<path d="M475.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312l-134.368,149.28c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C481.394,244.653,481.394,235.373,475.922,229.325z"/>
	</g>
</g>
<g>
	<g>
		<path d="M267.922,229.325l-144-160c-3.072-3.392-7.36-5.312-11.904-5.312h-96c-6.304,0-12.032,3.712-14.624,9.472
			c-2.56,5.792-1.504,12.544,2.72,17.216l134.368,149.312L4.114,389.293c-4.224,4.704-5.312,11.456-2.72,17.216
			c2.592,5.792,8.32,9.504,14.624,9.504h96c4.544,0,8.832-1.952,11.904-5.28l144-160
			C273.394,244.653,273.394,235.373,267.922,229.325z"/>
	</g>
</g>
</svg></span> Solid Edge Academic</a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-12  col-md-6 col-lg-3">
                <h6>ĐĂNG KÝ NHẬN TIN</h6>
                <div class="frm-newsl">
                    <form action="" method="post" id="frmnewsl">
                        <input type="hidden" name="code" value="save">
                        <input type="text" placeholder="Email *" name="txtemail" class="notNull">
                        <a class="btn-frm-newsl" href="javascript:void(0)" onclick="$('#frmnewsl').submit()">
                            <svg fill="#ffffff" height="20" width="20" viewBox="0 0 512.005 512.005" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="m511.658 51.675c2.496-11.619-8.895-21.416-20.007-17.176l-482 184c-5.801 2.215-9.638 7.775-9.65 13.984-.012 6.21 3.803 11.785 9.596 14.022l135.403 52.295v164.713c0 6.948 4.771 12.986 11.531 14.593 6.715 1.597 13.717-1.598 16.865-7.843l56.001-111.128 136.664 101.423c8.313 6.17 20.262 2.246 23.287-7.669 127.599-418.357 122.083-400.163 122.31-401.214zm-118.981 52.718-234.803 167.219-101.028-39.018zm-217.677 191.852 204.668-145.757c-176.114 185.79-166.916 176.011-167.684 177.045-1.141 1.535 1.985-4.448-36.984 72.882zm191.858 127.546-120.296-89.276 217.511-229.462z"/>
                                </g>
                            </svg>
                        </a>
                    </form>
                </div>
                <div id="msgbox_frmnewsl" class="msgbox"></div>
                <div class="linksmo">
                    <span class="">Liên kết mạng xã hội:</span>
                    <a href="https://www.facebook.com/upviet.com.vn/" target="_blank" class="hvr-float">
                        <svg fill="#ffffff" viewBox="-110 1 511 511.99996" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                            <path d="m180 512h-81.992188c-13.695312 0-24.835937-11.140625-24.835937-24.835938v-184.9375h-47.835937c-13.695313 0-24.835938-11.144531-24.835938-24.835937v-79.246094c0-13.695312 11.140625-24.835937 24.835938-24.835937h47.835937v-39.683594c0-39.347656 12.355469-72.824219 35.726563-96.804688 23.476562-24.089843 56.285156-36.820312 94.878906-36.820312l62.53125.101562c13.671875.023438 24.792968 11.164063 24.792968 24.835938v73.578125c0 13.695313-11.136718 24.835937-24.828124 24.835937l-42.101563.015626c-12.839844 0-16.109375 2.574218-16.808594 3.363281-1.152343 1.308593-2.523437 5.007812-2.523437 15.222656v31.351563h58.269531c4.386719 0 8.636719 1.082031 12.289063 3.121093 7.878906 4.402344 12.777343 12.726563 12.777343 21.722657l-.03125 79.246093c0 13.6875-11.140625 24.828125-24.835937 24.828125h-58.46875v184.941406c0 13.695313-11.144532 24.835938-24.839844 24.835938zm-76.8125-30.015625h71.632812v-193.195313c0-9.144531 7.441407-16.582031 16.582032-16.582031h66.726562l.027344-68.882812h-66.757812c-9.140626 0-16.578126-7.4375-16.578126-16.582031v-44.789063c0-11.726563 1.191407-25.0625 10.042969-35.085937 10.695313-12.117188 27.550781-13.515626 39.300781-13.515626l36.921876-.015624v-63.226563l-57.332032-.09375c-62.023437 0-100.566406 39.703125-100.566406 103.609375v53.117188c0 9.140624-7.4375 16.582031-16.578125 16.582031h-56.09375v68.882812h56.09375c9.140625 0 16.578125 7.4375 16.578125 16.582031zm163.0625-451.867187h.003906zm0 0"/>
                        </svg>
                    </a>
                    <a href="" target="_blank" class="hvr-float">
                        <svg fill="#ffffff" height="25" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
<g>
    <g>
        <path d="M371.643,0H140.357C62.964,0,0,62.964,0,140.358v231.285C0,449.037,62.964,512,140.357,512h231.286
			C449.037,512,512,449.037,512,371.643V140.358C512,62.964,449.037,0,371.643,0z M481.764,371.643
			c0,60.721-49.399,110.121-110.121,110.121H140.357c-60.721,0-110.121-49.399-110.121-110.121V140.358
			c0-60.722,49.4-110.122,110.121-110.122h231.286c60.722,0,110.121,49.4,110.121,110.122V371.643z"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path d="M256,115.57c-77.434,0-140.431,62.997-140.431,140.431S178.565,396.432,256,396.432
			c77.434,0,140.432-62.998,140.432-140.432S333.434,115.57,256,115.57z M256,366.197c-60.762,0-110.196-49.435-110.196-110.197
			c0-60.762,49.434-110.196,110.196-110.196c60.763,0,110.197,49.435,110.197,110.197C366.197,316.763,316.763,366.197,256,366.197z
			"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M404.831,64.503c-23.526,0-42.666,19.141-42.666,42.667c0,23.526,19.14,42.666,42.666,42.666
			c23.526,0,42.666-19.141,42.666-42.667S428.357,64.503,404.831,64.503z M404.831,119.599c-6.853,0-12.43-5.576-12.43-12.43
			s5.577-12.43,12.43-12.43c6.854,0,12.43,5.577,12.43,12.43S411.685,119.599,404.831,119.599z"/>
                                </g>
                            </g>
</svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UCGYGPEKaJV_xAOorBEBoZ7g" target="_blank" class="hvr-float">
                        <svg fill="#ffffff" height="25" width="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90.677 90.677" xml:space="preserve">
<g>
    <g>
        <path d="M82.287,45.907c-0.937-4.071-4.267-7.074-8.275-7.521c-9.489-1.06-19.098-1.065-28.66-1.06
			c-9.566-0.005-19.173,0-28.665,1.06c-4.006,0.448-7.334,3.451-8.27,7.521c-1.334,5.797-1.35,12.125-1.35,18.094
			c0,5.969,0,12.296,1.334,18.093c0.936,4.07,4.264,7.073,8.272,7.521c9.49,1.061,19.097,1.065,28.662,1.061
			c9.566,0.005,19.171,0,28.664-1.061c4.006-0.448,7.336-3.451,8.272-7.521c1.333-5.797,1.34-12.124,1.34-18.093
			C83.61,58.031,83.62,51.704,82.287,45.907z M28.9,50.4h-5.54v29.438h-5.146V50.4h-5.439v-4.822H28.9V50.4z M42.877,79.839h-4.629
			v-2.785c-1.839,2.108-3.585,3.136-5.286,3.136c-1.491,0-2.517-0.604-2.98-1.897c-0.252-0.772-0.408-1.994-0.408-3.796V54.311
			h4.625v18.795c0,1.084,0,1.647,0.042,1.799c0.111,0.718,0.462,1.082,1.082,1.082c0.928,0,1.898-0.715,2.924-2.166v-19.51h4.629
			L42.877,79.839L42.877,79.839z M60.45,72.177c0,2.361-0.159,4.062-0.468,5.144c-0.618,1.899-1.855,2.869-3.695,2.869
			c-1.646,0-3.234-0.914-4.781-2.824v2.474h-4.625V45.578h4.625v11.189c1.494-1.839,3.08-2.769,4.781-2.769
			c1.84,0,3.078,0.969,3.695,2.88c0.311,1.027,0.468,2.715,0.468,5.132V72.177z M77.907,67.918h-9.251v4.525
			c0,2.363,0.773,3.543,2.363,3.543c1.139,0,1.802-0.619,2.066-1.855c0.043-0.251,0.104-1.279,0.104-3.134h4.719v0.675
			c0,1.491-0.057,2.518-0.099,2.98c-0.155,1.024-0.519,1.953-1.08,2.771c-1.281,1.854-3.179,2.768-5.595,2.768
			c-2.42,0-4.262-0.871-5.599-2.614c-0.981-1.278-1.485-3.29-1.485-6.003v-8.941c0-2.729,0.447-4.725,1.43-6.015
			c1.336-1.747,3.177-2.617,5.54-2.617c2.321,0,4.161,0.87,5.457,2.617c0.969,1.29,1.432,3.286,1.432,6.015v5.285H77.907z"/>
        <path d="M70.978,58.163c-1.546,0-2.321,1.181-2.321,3.541v2.362h4.625v-2.362C73.281,59.344,72.508,58.163,70.978,58.163z"/>
        <path d="M53.812,58.163c-0.762,0-1.534,0.36-2.307,1.125v15.559c0.772,0.774,1.545,1.14,2.307,1.14
			c1.334,0,2.012-1.14,2.012-3.445V61.646C55.824,59.344,55.146,58.163,53.812,58.163z"/>
        <path d="M56.396,34.973c1.705,0,3.479-1.036,5.34-3.168v2.814h4.675V8.82h-4.675v19.718c-1.036,1.464-2.018,2.188-2.953,2.188
			c-0.626,0-0.994-0.37-1.096-1.095c-0.057-0.153-0.057-0.722-0.057-1.817V8.82h-4.66v20.4c0,1.822,0.156,3.055,0.414,3.836
			C53.854,34.363,54.891,34.973,56.396,34.973z"/>
        <path d="M23.851,20.598v14.021h5.184V20.598L35.271,0h-5.242l-3.537,13.595L22.812,0h-5.455c1.093,3.209,2.23,6.434,3.323,9.646
			C22.343,14.474,23.381,18.114,23.851,20.598z"/>
        <path d="M42.219,34.973c2.342,0,4.162-0.881,5.453-2.641c0.981-1.291,1.451-3.325,1.451-6.067v-9.034
			c0-2.758-0.469-4.774-1.451-6.077c-1.291-1.765-3.11-2.646-5.453-2.646c-2.33,0-4.149,0.881-5.443,2.646
			c-0.993,1.303-1.463,3.319-1.463,6.077v9.034c0,2.742,0.47,4.776,1.463,6.067C38.069,34.092,39.889,34.973,42.219,34.973z
			 M39.988,16.294c0-2.387,0.724-3.577,2.231-3.577c1.507,0,2.229,1.189,2.229,3.577v10.852c0,2.387-0.722,3.581-2.229,3.581
			c-1.507,0-2.231-1.194-2.231-3.581V16.294z"/>
    </g>
</g>
</svg>

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer-bottom">
    <div class="container pt-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            Copyright ©2021. All rights reserved <a href="https://www.facebook.com/visi.com.vn" target="_blank"><span>Visi Company</span></a>. Designed by <a href="https://temis.vn/"><span>Temis.vn</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- !! Footer End -->

<div>
    <ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
        <li class="mfb-component__wrap">
            <a href="#header" class="mfb-component__button--main">
                <img width="100%" src="{{ asset('/images/logo.png') }}" alt="">
                <i class="mfb-component__main-icon--resting ion-plus-round"></i>
                <i class="mfb-component__main-icon--active ion-close-round"></i>
            </a>
            <ul class="mfb-component__list">
                <li>
                    <a href="javascript:void(0)" class="mfb-component__button--child">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="mfb-component__button--child">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0)" class="mfb-component__button--child">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>
<script>

    var menu = document.getElementById('menu'),
        // demo defaults
        effect = 'mfb-zoomin',
        pos = 'mfb-component--br';

    function renderMenu() {
        menu.style.display = 'none';
        // ?:-)
        setTimeout(function () {
            menu.style.display = 'block';
            menu.className = pos + effect;
        }, 1);
    }

    var clickOpt = 'click',
        hoverOpt = 'hover',
        toggleMethod = 'data-mfb-toggle',
        menuState = 'data-mfb-state',
        isOpen = 'open',
        isClosed = 'closed',
        mainButtonClass = 'mfb-component__button--main';

    /**
     * Internal references
     */
    var elemsToClick,
        elemsToHover,
        mainButton,
        target,
        currentState;

    /**
     * For every menu we need to get the main button and attach the appropriate evt.
     */
    function attachEvt(elems, evt) {
        for (var i = 0, len = elems.length; i < len; i++) {
            mainButton = elems[i].querySelector('.' + mainButtonClass);
            mainButton.addEventListener(evt, toggleButton, false);
        }
    }

    /**
     * Remove the hover option, set a click toggle and a default,
     * initial state of 'closed' to menu that's been targeted.
     */
    function replaceAttrs(elems) {
        for (var i = 0, len = elems.length; i < len; i++) {
            elems[i].setAttribute(toggleMethod, clickOpt);
            elems[i].setAttribute(menuState, isClosed);
        }
    }

    function getElemsByToggleMethod(selector) {
        return document.querySelectorAll('[' + toggleMethod + '="' + selector + '"]');
    }

    /**
     * The open/close action is performed by toggling an attribute
     * on the menu main element.
     *
     * First, check if the target is the menu itself. If it's a child
     * keep walking up the tree until we found the main element
     * where we can toggle the state.
     */
    function toggleButton(evt) {

        target = evt.target;
        while (target && !target.getAttribute(toggleMethod)) {
            target = target.parentNode;
            if (!target) {
                return;
            }
        }

        currentState = target.getAttribute(menuState) === isOpen ? isClosed : isOpen;

        target.setAttribute(menuState, currentState);

    }

    /**
     * On touch enabled devices we assume that no hover state is possible.
     * So, we get the menu with hover action configured and we set it up
     * in order to make it usable with tap/click.
     **/
    if (window.Modernizr && Modernizr.touch) {
        elemsToHover = getElemsByToggleMethod(hoverOpt);
        replaceAttrs(elemsToHover);
    }

    elemsToClick = getElemsByToggleMethod(clickOpt);

    attachEvt(elemsToClick, 'click');

    $(document).ready(function () {
        $(window).scroll(function () {
            var aTop = $('.header-fix').height();
            if ($(this).scrollTop() >= aTop) {
                $('.header-fix').css({"opacity": 1, "visibility": "visible"});
            } else {
                $('.header-fix').css({"opacity": 0, "visibility": "hidden"});
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
    });
</script>
@yield('script')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<style>
    /*<![CDATA[*/
    #google_translate_element {
        float: right
    }

    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-simple img, img.goog-te-gadget-icon, .goog-te-menu-value span {
        display: none !important
    }

    .goog-te-menu-frame {
        box-shadow: none !important
    }

    .goog-te-gadget-simple {
        background-color: #000000 !important;
        background: url("/images/language.svg") center / 12px no-repeat;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        background-size: 22px 22px;
        width: 28px;
        height: 28px;
        display: inline-block;
        font-weight: 400;
        line-height: 1.8;
        padding: 0 6px;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-left: none !important;
        border-top: none !important;
        border-bottom: none !important;
        border-right: none !important;
        border-radius: 100%;
    }

    /*]]>*/
</style>

<script src="{{ asset('/js/translate.js') }}"></script>
