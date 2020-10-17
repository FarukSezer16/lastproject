<!DOCTYPE html>
<html lang="en">

<head>
    <title>GameNews</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link href="{{asset('css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 d-flex">
                    <a href="/anasayfa" class="site-logo">
                        <img src="{{asset('dist/images/icon/game-news-yeni.png')}}" alt="Cool Admin" />
                    </a>

                    <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>

                </div>

                <div class="col-12 col-lg-6 ml-auto d-flex" style="marjin-right:20px;width: 330px;height: 50px;padding-left: 350px;">

                    <form action="#" class="search-form d-inline-block">
                        <div class="d-flex">
                        <a href="/login" class="reply" style="margin-right: 15px;margin-left: 15px;">GİRİŞ YAP</a>
                            <a href="/register" class="reply">KAYIT OL</a>
                        </div>
                        <div class="d-flex">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>

                        </div>
                    </form>

                </div>

                <div class="col-6 d-block d-lg-none text-right">

                </div>
            </div>
        </div>




        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li class="active">
                                    <a href="/anasayfa" class="nav-link text-left">Ana Sayfa</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/news/pc-oyun') }}" class="nav-link text-left">PC Oyun</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/news/konsol-oyun') }}" class="nav-link text-left">Konsol Oyun</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="site-section py-0">
        <div class="owl-carousel hero-slide owl-style">

            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg"  style="background-image: url('{{asset('images/GoWRagnarok.jpg')}}')"></div>
                        <div class="contents">
                            <span class="caption">Oyun Haberleri</span>

                            <h2><a>God of War Ragnarök,PS5 için duyuruldu</a></h2>
                            <p class="mb-3">Sony'nin PlayStation 5 sunumunda duyurulan oyunlardan biri de God of War Ragnarök oldu. Sunumu God of War: Ragnarök ile bitiren Sony, logo dışında pek bir detay göstermese de nihayet Kratos'un sesini duymuş olduk. Oyunun çıkış tarihi henüz açıklanmadı. Ancak Kratos'un Santa Monica Studio ile birlikte geri döneceğini artık biliyoruz. Oyunun İskandinav mitolojisinde geçmesi bekleniyor. Yayınlanan video “Zaman yaklaşıyor. Kendinizi hazırlamalısınız." ifadesiyle sona eriyor.</p>

                            <div class="post-meta">
                                <span class="d-block"><a href="#">Faruk Sezer</a> in <a href="#">Oyun</a></span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url('{{asset('images/Cyberpunk-2077.jpg')}}')"></div>
                        <div class="contents">
                            <span class="caption">Oyun Haberleri</span>
                            <h2><a>Cyberpunk 2077 Çıkış Tarihi Belli Oldu</a></h2>
                            <p class="mb-3">CD Projekt Red tarafından geliştirilen Cyberpunk 2077 19 Kasım 2020 tarihinde oyuncularla buluşacak. İlk açıklamada 16 Nisan 2020 olarak duyurulan çıkış tarihi, konsol tarafında yaşandığı iddia edilen bazı verimlilik sorunları nedeni ile ertelenmişti. Yaşanan salgının ardından çıkış tarihinde yeni bir ertelemenin söz konusu olup olmayacağı ise şu aşamada bilinmiyor.

                            </p>

                            <div class="post-meta">
                                <span class="d-block"><a href="#">Faruk Sezer</a> in <a href="#">Oyun</a></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <!-- END section -->

    <div class="site-section">
      @yield('content')
    </div>

</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>




<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
