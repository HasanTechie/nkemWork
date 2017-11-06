@extends('publiclayouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url({{asset('images/background/bg-page-title-old.jpg')}});">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2 style="color:white">About Us</h2>
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
                                {{--<figure class="image-box"><img src="images/resource/blog-image-12.jpg" alt=""></figure>--}}
                                <div class="lower-content">
                                    <div class="post-meta"></div>
                                    <h2>Welcome to UK Estate & Consultancy Services</h2>
                                    <div class="text">
                                        <p>We are a contemporary Estate Agent equipped with experiences and professionalism to provide simple, stress free and transparent process in all aspects of our services. Our prime goal is to built good relationship for a longer term with our landlords, buyers and tenants.</p>
                                        <p>We are located at the heart of East London, in the London Borough of Tower Hamlets, close to London Docklands and Tower Bridge.  We invite our landlords and tenants to visit our office for informal chart, advice, guidance and to discuss their requirements. We are currently focusing on Tower Hamlets property needs, however we also will consider dealing with surrounding boroughs.</p>
                                        <p>We provide Residential & Commercial sales, letting & management.  Whether you are a landlord or tenant, seller or buyer, property prices and demands, especially in Greater London, are continue rising.  Additionally, due to the influx of migration from third countries via French to the United Kingdom, Commercial & Residential property demands has highly increased.  Specifically, Tower Hamlets, Newham and other immediate surrounding boroughs.  We are receiving many inquiries in these demands.<blockquote style="margin-left: 0;"><marquee>To all landlords; we require all size of properties urgently for our potential buyers and tenants.</marquee></blockquote></p>
                                        <p>From the moment you contact our office whether you are a landlord or tenant, seller or buyer, our highly experienced staff will take care of your property matters and meet your requirements, swiftly, smoothly and stress free.</p>
                                        <p>We are new and shall utilise 21st century technology that will enable simpler use for our landlords, buyers and tenants. We believe in our landlords and tenants for long term and will stay in contact with them long after their transaction has completed, accordingly we remain the agent of choice. We expect repeated business will come from recommendations and referrals from our already satisfied landlords and tenants.</p>
                                        <p>Our fee charges are comparably less than other competitors.  However, we do not compromise to continue to provide quality services to our landlords, tenants, sellers and buyers.</p>
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

@include('publiclayouts/partner-section')
@include('publiclayouts/subscribe-section')

@endsection
