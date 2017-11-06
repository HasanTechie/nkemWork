@extends('publiclayouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two"
             style="background-image:url({{asset('images/background/bg-page-title-old.jpg')}});">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2 style="color:white">Contact Us</h2>
                <div class="text">Helping you make the right Move</div>
            </div>
        </div>
    </section>

    <!--Contact Section-->
    <div class="contact-section">
        <div class="auto-container">
            <div class="outer-box clearfix">

                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="title"><h2>Send Us Message</h2></div>
                        <!-- Contact Form -->
                        <div class="contact-form">
                            @if($flash = session('message'))
                                <div id="flash-message" class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong>Success!</strong> {{$flash}}
                                </div>
                            @endif
                            <form method="post" id="contact-form" action="{{ url('/contactus') }}">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send
                                            Message
                                        </button>
                                    </div>

                                </div>
                            </form>

                        </div>
                        <!--End Contact Form -->
                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="title"><h2>Contact Information</h2></div>
                        <ul class="contact-info">
                            <li>
                                <div class="icon-box"><span class="fa fa-map-marker"></span></div>
                                UK Estate & Consultancy Services Ltd <br>
                                167 Cannon Street Road (1st Floor) <br>
                                London E1 2LX
                            </li>
                            <li>
                                <div class="icon-box"><span class="fa fa-phone"></span></div>
                                020 7481 9777 <br>
                            </li>
                            <li>
                                <div class="icon-box"><span class="fa fa-envelope"></span></div>
                                info@ukeandcs.com
                            </li>
                        </ul>

                        <!--Social Links-->
                        @include('publiclayouts/social-section')
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Map Section-->
    <section class="map-section">
        <!--Map Box-->
        <div class="map-box">
            <!--Map Canvas-->
            <div class="map-canvas"
                 data-zoom="16"
                 data-lat="51.51396503"
                 data-lng="-0.06197137"
                 data-type="roadmap"
                 data-hue="#ffc400"
                 data-title="ukeandcs.com"
                 data-content="167 Cannon St Rd, Whitechapel, London, E1 2LX, UK<br><a href='mailto:info@ukeandcs.com'>info@ukeandcs.com</a>">
            </div>
        </div>
    </section>

@endsection