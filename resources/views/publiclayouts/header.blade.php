<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.js' )}}"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

{{--<!-- Preloader -->--}}
{{--<div class="preloader"></div>--}}

<!-- Main Header-->
    <header class="main-header">

        <div class="main-box">
            <div class="outer-container clearfix">

                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="/" title="Ukeandcs"><img width="140" height="80" src="{{ asset('images/logo.png')}}"
                                                                        alt="Ukeandcs" title="Ukeandcs"></a></div>
                </div>

                <!--Other Links-->
                <div class="other-links clearfix">
                    <div class="link-box"><a class="add-property-btn theme-btn" href="{{ url('/contactus') }}">Contact
                            Us</a></div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/properties') }}">Properties</a></li>
                                <li><a href="{{ url('/businessrates') }}">Business Rates</a></li>
                                <li><a href="{{ url('/testimonials') }}">Testimonials</a></li>
                                <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                </div>
                <!--Nav Outer End-->

            </div>
        </div>

    </header>
    <!--End Main Header -->