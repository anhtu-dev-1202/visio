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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/sanpham.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
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
            <a href=""><img src="images/logo.png" alt=""></a>
        </div>
        <div class="search-nav">
            <div class="search-social default">
                <div class="social">
                    <ul>
                        <li>
                            <a href="https://www.hoaphat.com.vn/en">
                                <svg style="float: right" enable-background="new 0 0 512 512" width="28px" height="28px"
                                     viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="256" cy="256" fill="#f0f0f0" r="256"/>
                                    <g fill="#d80027">
                                        <path d="m244.87 256h267.13c0-23.106-3.08-45.49-8.819-66.783h-258.311z"/>
                                        <path d="m244.87 122.435h229.556c-15.671-25.572-35.708-48.175-59.07-66.783h-170.486z"/>
                                        <path d="m256 512c60.249 0 115.626-20.824 159.356-55.652h-318.712c43.73 34.828 99.107 55.652 159.356 55.652z"/>
                                        <path d="m37.574 389.565h436.852c12.581-20.529 22.338-42.969 28.755-66.783h-494.362c6.417 23.814 16.174 46.254 28.755 66.783z"/>
                                    </g>
                                    <path d="m118.584 39.978h23.329l-21.7 15.765 8.289 25.509-21.699-15.765-21.699 15.765 7.16-22.037c-19.106 15.915-35.852 34.561-49.652 55.337h7.475l-13.813 10.035c-2.152 3.59-4.216 7.237-6.194 10.938l6.596 20.301-12.306-8.941c-3.059 6.481-5.857 13.108-8.372 19.873l7.267 22.368h26.822l-21.7 15.765 8.289 25.509-21.699-15.765-12.998 9.444c-1.301 10.458-1.979 21.11-1.979 31.921h256c0-141.384 0-158.052 0-256-50.572 0-97.715 14.67-137.416 39.978zm9.918 190.422-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822l-21.7 15.765zm-8.289-100.083 8.289 25.509-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822zm100.115 100.083-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822l-21.7 15.765zm-8.289-100.083 8.289 25.509-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822zm0-74.574 8.289 25.509-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822z"
                                          fill="#0052b4"/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                    <g/>
                                </svg>
                            </a>
                        </li>
                        <li class="icon-fb">
                            <a target="_blank" href="">
                                <svg width="28px" height="28px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
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
                                <svg width="28px" height="28px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 2500 2372" style="enable-background:new 0 0 2500 2372;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FDFEFE;}
    .st1{fill:#0180C7;}
    .st2{fill:#0172B1;}
    .st3{fill:none;stroke:#0180C7;stroke-width:10.8658;stroke-miterlimit:54.3289;}
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
                                <svg viewBox="0 0 152 152" width="28px" height="28px" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2" data-name="Layer 2"><g id="Color"><g id="_02.YouTube" data-name="02.YouTube"><circle id="Background" cx="76" cy="76" fill="#f00" r="76"/><path id="Icon" d="m100.87 47.41h-49.74a15.13 15.13 0 0 0 -15.13 15.14v26.9a15.13 15.13 0 0 0 15.13 15.14h49.74a15.13 15.13 0 0 0 15.13-15.14v-26.9a15.13 15.13 0 0 0 -15.13-15.14zm-35.41 40.85v-24.52l21.08 12.26z" fill="#fff"/></g></g></g>
                                </svg>
                            </a>
                        </li>
                        <li class="icon-yt">
                            <a target="_blank" href="">
                                <svg viewBox="0 0 176 176" width="28px" height="28px" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2" data-name="Layer 2"><g id="_01.facebook" data-name="01.facebook"><circle id="background" cx="88" cy="88" fill="#3a559f" r="88"/><path id="icon" d="m115.88 77.58-1.77 15.33a2.87 2.87 0 0 1 -2.82 2.57h-16l-.08 45.45a2.05 2.05 0 0 1 -2 2.07h-16.21a2 2 0 0 1 -2-2.08v-45.44h-12a2.87 2.87 0 0 1 -2.84-2.9l-.06-15.33a2.88 2.88 0 0 1 2.84-2.92h12.06v-14.8c0-17.18 10.2-26.53 25.16-26.53h12.26a2.88 2.88 0 0 1 2.85 2.92v12.9a2.88 2.88 0 0 1 -2.85 2.92h-7.52c-8.13 0-9.71 4-9.71 9.78v12.81h17.87a2.88 2.88 0 0 1 2.82 3.25z" fill="#fff"/></g></g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <form action="" id="search-header">
                        <input type="text" name="keyword">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </form>
                </div>
            </div>
            <div class="navigation default">
                <ul>
                    <li>
                        <a href="index.html">Trang chủ</a>
                    </li>
                    <li>
                        <a href="gioithieu.html">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="sanpham.html">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="" target="_blank">Giải pháp thiết kế</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp gia công</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp mô phỏng 1D</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp mô phỏng 3D</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp và thiết bị kiểm nghiệm</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp nhà máy thông minh</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp giáo dục</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp mô phỏng dập</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="tintuc.html">Tin tức</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="chitiet.html">Chứng chỉ chất lượng</a>
                            </li>
                            <li>
                                <a href="chitiet.html">Công nghệ</a>
                            </li>
                            <li>
                                <a href="chitiet.html">Giải thưởng</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Video</a>
                    </li>
                    <li>
                        <a href="">Liên hệ</a>
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
                <img src="images/logo.png" alt="">
            </a>
        </div>
        <div class="search-nav">
            <div class="navigation default">
                <ul>
                    <li>
                        <a href="index.html">Trang chủ</a>
                    </li>
                    <li>
                        <a href="">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="sanpham.html">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="" target="_blank">Giải pháp thiết kế</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp gia công</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp mô phỏng 1D</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp mô phỏng 3D</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp và thiết bị kiểm nghiệm</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp nhà máy thông minh</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp giáo dục</a>
                            </li>
                            <li>
                                <a href="" target="_blank">Giải pháp mô phỏng dập</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="">Tin tức</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Chứng chỉ chất lượng</a>
                            </li>
                            <li>
                                <a href="index.html">Công nghệ</a>
                            </li>
                            <li>
                                <a href="index.html">Giải thưởng</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Video</a>
                    </li>
                    <li>
                        <a href="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="header-mobile" class="default">
    <div class="wrap">
        <div class="menu-mobile">
            <img src="images/mobile_btn_menu.png" alt="">
        </div>
        <div class="logo">
            <a href=""><img src="images/logo.png" alt=""></a>
        </div>
        <div class="search" id="icon-search">
            <img src="images/mobile_btn_search.png" alt="">
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
                    <i class="search_btn"><i></i></i>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="menu-container">
    <div class="menu-logo">
        <a href=""><img class="logo" src="images/logo.png" alt=""></a>
        <a href="javascript:;" data-menu_toggle="toggle"><img class="close" src="images/header_close.png" alt=""></a>
    </div>
    <div class="menu-top">
        <div class="menu-language">
            <ul>
                <li><a href="" class="active">vi</a></li>
                <li><a href="">en</a></li>
            </ul>
        </div>
    </div>
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
