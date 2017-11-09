@extends('publiclayouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two"
             style="background-image:url({{asset('images/background/bg-page-title-business.jpg')}});">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="text"><b>Have You Been Paying More Business Rates Than You Should Be?</b></div>
                <h2 style="color:white">“No Win No Fee”</h2>
            </div>
        </div>
    </section>

    <div class="sidebar-page-container" style="padding-bottom: 0; margin-bottom: 0;">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <section class="blog blog-details">

                        <!--News Block-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <div class="text">
                                        <h2>About Us</h2>
                                        <p>Welcome to UK Estate & Consultancy Services. We provide Residential &
                                            Commercial sales, letting & management. Furthermore, we challenge and
                                            represent landlords and tenants with their business rates matters.</p>
                                        <h2>2017 Revaluation</h2>
                                        <p>The UK Valuation Office Agency completed last valuation on 2010 and supposed
                                            to complete current revaluation on 2015, however, it was delayed two years
                                            and revaluation completed in 2017 and it came into force on 1 April 2017.
                                            Business properties will be valued as at from 1 April 2015 and believed to
                                            be reflecting changes in the market since 2010. Additionally, according to
                                            many sources and current dealing with our clients particularly in London and
                                            the South East the rate bill has been increased substantially. As a result
                                            businesses are facing exceptionally hardship to maintain with their rates
                                            payment. However, although an appeal still can be lodged, however, the
                                            government introduced a new system that makes more difficult in procedure
                                            and prolong time consuming in dealing with appeal cases.</p>
                                        <p>The new introduced system known as; “Check, Challenge, Appeal. The new
                                            system, procedure and complexity of the changes it has become necessary to
                                            seek professional’s advice from Chartered Surveyor who can deal and
                                            represent with your business rates appeal. Furthermore, business rates bill
                                            for next year expected to increase, however, we can calculate this now and
                                            determine as to what would be rises.</p>
                                        <h2>Our Services</h2>
                                        <p>Our experienced Chartered Surveyor shall advise and deal with Business Rates
                                            Refunds & / Reductions. We will make an Application for Refunds and
                                            Overpayment, Rates Relief & File an Appeal Application. In addition, our
                                            Surveyor also deal and challenges rent review and lease terms.
                                        <p>
                                            The 2017 revaluation reflected substantial rises and planned to even
                                            increases further. Due to the procedural changes dealing with business rates
                                            matters are becoming more complex and its implications affected many
                                            businesses seriously and additionally puts more financial burden on almost
                                            all businesses.
                                        </p>
                                        <p>
                                            However, on receipt of basic information from you as listed below, our
                                            experienced Chartered Surveyor can advise landlords and business and
                                            immediately can give an opinion on the case, have you been paying more
                                            business rates than you should be?. Subsequently, we can lodge an appeal to
                                            the rates authority and reduced in some cases by up to 100%. In order to
                                            proceed with an appeal, in some cases we will need to visit you business
                                            property. It all depends on the balance of probability whether an appeal is
                                            likely to be worthwhile.
                                        </p>
                                        <h2>Fees</h2>
                                        <p>Our primary advice is free of charge basis and we do not take an upfront
                                            fees, this is our promise. We will only take our fees on success of the
                                            case.
                                            We deal with, No Win No Fee(s) basis Means; we shall not charge any fee(s)
                                            should the case be unsuccessful. Our fee charges are comparably less than
                                            other competitors. However, we do not compromise to continue to provide
                                            quality services to our prospective clients. Our fees charge are based on a
                                            percentage of the saving made. Every individual case will require different
                                            level of services, accordingly we shall discuss and determine the fee
                                            charge. We shall provide a contract when both parties are satisfied to
                                            proceed with the casework.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--Content Side-->
            </div>
        </div>
    </div>
    <!--Contact Section-->
    <div class="contact-section" style="padding-top: 0;">
        <div class="auto-container">
            <div class="outer-box clearfix">


                <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="title"><h2>Initial Information Required</h2></div>
                        <p>In order to assess and calculate your business rate, kindly provide requested information as
                            below and estimate to respond to you and give our opinion within same day</p>
                        <br>
                        <!-- Contact Form -->
                        <div class="contact-form">
                            @if($flash = session('message'))
                                <div id="flash-message" class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong>Success!</strong> {{$flash}}
                                </div>
                            @endif
                            <form method="post" id="contact-form" action="{{ url('/businessrate') }}">
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

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="postcode" placeholder="PostCode" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="annualrate" placeholder="Annual Rate (&pound;)"
                                               required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="ratebill" placeholder="Rate bill 2017/2018" required>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <input type="text" name="baddress" placeholder="Business Address" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Message" required></textarea>
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

@endsection