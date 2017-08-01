@extends('layouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url({{asset('images/background/bg-page-title.jpg')}});">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2 style="color:white">About UKeandcs</h2>
                <div class="text">Helping you make the right Move</div>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <section class="blog blog-details">

                        <!--News Block-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="images/resource/blog-image-12.jpg" alt=""></figure>
                                <div class="lower-content">
                                    <div class="post-meta">12 July 2017 By Admin</div>
                                    <h3>Helping you make the right Move</h3>
                                    <div class="text">
                                        <p>UK Estate has established in 2016 and we are located heart of East London, close to Docklands and Tower Bridge. We are regulated by Property Ombudsman as well as client deposit scheme.  We are also insured with professional liabilities insurance.  You can relay on our code of conducts and we uphold the regulatoriess’ terms & conditions.</p>
                                        <p>We do residential & commercial sales letting & management.  Property price and demands are continue rising, whether you are a landlord or tenant, seller or buyer we are experiencing / receiving unlimited inquires in these demands.  To all landlords; we require all size of properties urgently for our potential buyers and tenants.</p>
                                        <blockquote>Our prime long term business objectives are to provide simple and transparent process in all aspects of our dealings and built good relationship with our landlords, buyers and tenants.    </blockquote>
                                        <p>Our experienced team of professionals will take care of your property matter smoothly and hassle free once you give us the instruction.</p>
                                        <p>As the residential rental market demands continue to increased, accordingly, we are currently working on a residential property investment project.  It will give opportunities to people of all financial backgrounds to invest and gain high rental yields with additional bonus payments that are outperforming other investments.</p>
                                        <p><b>Other services:</b> we dealing with Business rates matters.  Our chartered Surveyor, Mr. Richard Nelson challenges high and unfair business rates, unfair business rent increases (rent review) and unfair lease terms.</p>
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

@include('layouts/partner-section')
@include('layouts/subscribe-section')

@endsection
