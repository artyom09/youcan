<?php
    function activeMenu($uri = '') {
        $active = '';
        if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
            $active = 'active';
        }
        return $active;
    }
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>YouCan</title>
    <!-- Styles -->
    <link href="{{ asset('/youcan/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/meanmenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/odometer.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/magnific-popup.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/imagelightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/youcan/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/youcan/assets/img/apple-touch-icon.png">
    {{-- <link rel="icon" type="image/png" href="/youcan/assets/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/youcan/assets/img/favicon-16x16.png" sizes="16x16"> --}}
    <link rel="shortcut icon" href="/storage/settings/November2021/nv0SULHApSDZ7TNVqxfr.png" type="image/png">

</head>
<body class="header-type-in animated">
<?php
use App\Http\Controllers\UrlController;
$iso = UrlController::geturl();
$languages = UrlController::languages();
$set_lang = UrlController::set_language();
?>


    <div class="preloader" style="display: none;">
        <div class="loader">
            <div class="wrapper">
                <div class="circle circle-1"></div>
                <div class="circle circle-1a"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu mean-container">
                    <div class="mean-bar">
                        <a href="#nav" class="meanmenu-reveal" style="background:;color:;right:0;left:auto;">
                            <span><span><span></span></span></span>
                        </a>
                    </div>
                    <div class="logo">
                        <a href="/{{app()->getlocale()}}">
                            <img src="/youcan/assets/img/logo.png" style="width: 50px;" alt="image">
                        </a>
                        <a class="ml-20" title="Viber" href="viber://chat?number=+37493989916">
                            <img src="/youcan/assets/img/viber.png" style="width: 40px;">
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=+37493989916&amp;text=Hi%20There!">
                            <img src="/youcan/assets/img/whats.png" style="width: 30px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/{{app()->getlocale()}}">
                        <img class="header-logo" src="/youcan/assets/img/logo.png" alt="image">
                    </a>

                    <div class="mean-push"></div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: none;">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/{{app()->getlocale()}}" class="nav-link {{ activeMenu('/')}}">
                                    @lang('main.general')
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link {{ activeMenu('about') }}">
                                    @lang('main.about-us')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('service')}}" class="nav-link {{ activeMenu('service') }}">
                                    @lang('main.services')
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="{{route('gallery')}}" class="nav-link {{ activeMenu('gallery') }}">
                                    @lang('main.gallery')
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('staff')}}" class="nav-link {{ activeMenu('staff') }}">
                                    @lang('main.staff')
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('blog')}}" class="nav-link {{ activeMenu('blog') }}">
                                    @lang('main.blog')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link {{ activeMenu('contact') }}">@lang('main.contact-us')</a>
                            </li>

                        </ul>
                        <div class="others-options d-flex align-items-center">

                            <div class="option-item">
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>@lang('main.language') <i class="bx bx-chevron-down"></i></span>
                                    </button>

                                    <div class="dropdown-menu">
                                        @foreach($languages as $language)
                                        <a href="/{{$language->iso}}/{{$set_lang}}" @if (app()->getLocale() == $language->iso)  @endif" class="dropdown-item d-flex align-items-center">
                                            <img src="/youcan/assets/img/{{$language->iso}}.png" class="shadow-sm" alt="flag">
                                            <span>
                                                @if($language->iso == 'hy')
                                                 Հայերեն
                                                @elseif($language->iso == 'ru')
                                                 Русский
                                                @elseif($language->iso == 'en')
                                                 English
                                                @endif
                                            </span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="phone-main mob-size mr-15">
                                <a title="Viber" href="viber://chat?number=+37498098138">
                                    <img src="/youcan/assets/img/viber.png" style="width: 40px;">
                                </a>

                                <a href="https://api.whatsapp.com/send?phone=+37498098138&amp;text=Hi%20There!">
                                    <img src="/youcan/assets/img/whats.png" style="width: 30px;">
                                </a>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>@lang('main.language') <i class="bx bx-chevron-down"></i></span>
                                    </button>

                                    <div class="dropdown-menu">
                                        @foreach($languages as $language)
                                        <a href="/{{$language->iso}}/{{$set_lang}}" @if (app()->getLocale() == $language->iso)  @endif" class="dropdown-item d-flex align-items-center">
                                            <img src="/youcan/assets/img/{{$language->iso}}.png" class="shadow-sm" alt="flag">
                                            <span>
                                                @if($language->iso == 'hy')
                                                 Հայերեն
                                                @elseif($language->iso == 'ru')
                                                 Русский
                                                @elseif($language->iso == 'en')
                                                 English
                                                @endif
                                            </span>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="option-item">
                                <a href="{{route('contact')}}" class="default-btn">@lang('main.contact-us')</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('status'))
        <div class="alert-success info-alert">
            {{ session('status') }}
        </div>
    @endif
    <div>
        @yield('content')
    </div>

    <footer class="footer_area f_bg_color pt-100 pb-30">
        <img class="p_absolute leaf" src="/youcan/assets/img/v.svg" alt="">
        <img class="p_absolute f_man" src="/youcan/assets/img/f_man.png" alt="">
        <img class="p_absolute f_cloud" src="/youcan/assets/img/cloud.png" alt="">
        <img class="p_absolute f_email" src="/youcan/assets/img/email-icon.png" alt="">
        <img class="p_absolute f_man_two" src="/youcan/assets/img/man.png" alt="">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 offset-1">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <h2>
                                    <a href="/{{app()->getlocale()}}"><img class="footer-logo" src="/youcan/assets/img/logo.png"></a>
                                </h2>
                            </div>
                            <p>{{mb_substr($about_kids->getTranslatedAttribute('text',config('app.locale'),config('voyager.multilingual.default')),0,225)}}...</p>
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-pinterest-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 offset-1">
                        <div class="single-footer-widget">
                            {{-- <h3>@lang('main.contact-information')</h3> --}}

                            <ul class="footer-contact-info">
                                <li>
                                    <i class="bx bxs-phone"></i>
                                    <span>@lang('main.phone')</span>
                                    <a href="tel:{{$contact_us->phone}}">{{$contact_us->phone}}</a>
                                </li>
                                <li>
                                    <i class="bx bx-envelope"></i>
                                    <span> @lang('main.email')</span>
                                    <a href="mailto:{{$contact_us->email}}">{{$contact_us->email}}</a>
                                </li>
                                <li>
                                    <i class="bx bx-map"></i>
                                    <span>@lang('main.address')</span>
                                    {{$contact_us->address}}
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        ©2021 YouCan.am: @lang('main.reserved')
                        <a href="https://evasa.am/" target="_blank" class="footer-link">
                            Evasa.am
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="go-top">
        <i class="bx bx-up-arrow-alt"></i>
    </div>

        <!-- jQuery scripts -->
        <script src="{{asset('/youcan/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/imagelightbox.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('/youcan/assets/js/main.js')}}"></script>

</body>
</html>
