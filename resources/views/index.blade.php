@extends('publiclayouts/master')

@section('content')

    <!--Home Banner-->
    <section class="home-banner">
        <!--Banner Slider-->
        <div class="banner-slider-container">
            <ul class="banner-slider owl-theme owl-carousel">
                <li class="slide-item" style="background-image:url({{asset('images/main-slider/1.jpg')}});"></li>
                <li class="slide-item" style="background-image:url({{asset('images/main-slider/2.jpg')}});"></li>
                <li class="slide-item" style="background-image:url({{asset('images/main-slider/3.jpg')}});"></li>
            </ul>
        </div>

        <!--Banner Search Form-->
        <div class="banner-search-container">
            <div class="form-outer">
                <div class="banner-search-form">
                    <h1>Find your dream home just in a click</h1>
                    <div class="text">Claim your business rates refunds and / reductions with
                        “No Win NO Fee”
                    </div>

                    <div class="banner-form-box">
                        <div class="default-form">
                            <form method="post" action="properties">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                        <select class="custom-select-box">
                                            <option>Property Type</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Castle</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Enter Location"
                                               required>
                                    </div>
                                    <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--Property Listing-->
    <section class="property-listing">
        <div class="auto-container">
            <div class="mixitup-gallery">
                <!--Heading-->
                <div class="sec-title centered">
                    <h2>Latest Properties</h2>
                </div>

                <!--Filter-->
                <div class="filters gallery-filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Any Type</li>
                        <li class="filter" data-role="button" data-filter=".for-commercial">For Commercial</li>
                        <li class="filter" data-role="button" data-filter=".for-residential">For Residential</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">
                @foreach($properties->slice(0, 9) as $property)
                    @if($imageArray = explode(",", $property->images))
                        <!--Property Box Two-->
                            <div class="property-box-two mix all for-{{strtolower($property->type)}} col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{$property->path()}}"><img
                                                        style="display: block; max-width: 360px; min-width: 360px; max-height: 240px; min-height: 240px;"
                                                        title="{{$property->title}}"
                                                        src="{{Storage::url($imageArray[0] )}}" alt=""></a>
                                        </figure>
                                        <div class="prop-cat {{strtolower($property->type)}}-cat">{{$property->type}}</div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="property-title">
                                            <h3><a href="{{$property->path()}}">{{$property->address}}</a></h3>
                                            <div class="location"><span
                                                        class="fa fa-map-marker"></span>&nbsp; {{$property->postcode}} {{$property->city}} {{$property->state}}
                                            </div>
                                        </div>
                                        <div class="prop-info">
                                            <ul class="clearfix">
                                                <li><strong>{{$property->bedroom}}</strong> Beds</li>
                                                <li><strong>{{$property->bathroom}}</strong> Baths</li>
                                                <li><strong>{{$property->area}}</strong> sq ft.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <div class="price-discount clearfix">
                                            <div class="price"><strong>&pound;{{$property->price}}</strong>Asking Price
                                            </div>
                                            <div class="discount">
                                                <strong>{{$property->bathroom+5 /*random for testing*/}}%</strong>Bellow
                                                Market Value
                                            </div>
                                        </div>
                                        <div class="link"><a href="{{$property->path()}}">View Details <span
                                                        class="fa fa-angle-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
            <div class="view-all"><a href="properties" class="theme-btn btn-style-two">Explore More Properties</a>
            </div>

        </div>
    </section>

    @include('publiclayouts/subscribe-section')

    <!--Popular Places-->
    <section class="popular-places style-two">
        <div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>Popular Places</h2>
            </div>

            <div class="row clearfix">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!--Popular Place Box-->
                    <div class="popular-place-box">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img width="570" height="350"
                                                           src="{{asset('images/resource/featured-image-17.jpg')}}"
                                                           alt=""></figure>
                                <div class="overlay-content">
                                    <h4>London</h4>
                                    <div class="count">24 Properties</div>
                                </div>
                            </div>
                            <a href="#" class="link-overlay"></a>
                        </div>
                    </div>
                    <!--Popular Place Box-->
                    <div class="popular-place-box">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img width="570" height="350"
                                                           src="{{asset('images/resource/featured-image-20.jpg')}}"
                                                           alt=""></figure>
                                <div class="overlay-content">
                                    <h4>Liverpool</h4>
                                    <div class="count">24 Properties</div>
                                </div>
                            </div>
                            <a href="#" class="link-overlay"></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Popular Place Box-->
                        <div class="popular-place-box col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img width="570" height="350"
                                                               src="{{asset('images/resource/featured-image-18.jpg')}}"
                                                               alt="">
                                    </figure>
                                    <div class="overlay-content">
                                        <h4>Manchester</h4>
                                        <div class="count">24 Properties</div>
                                    </div>
                                </div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <!--Popular Place Box-->
                        <div class="popular-place-box col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img width="570" height="350"
                                                               src="{{asset('images/resource/featured-image-19.jpg')}}"
                                                               alt="">
                                    </figure>
                                    <div class="overlay-content">
                                        <h4>Leeds</h4>
                                        <div class="count">24 Properties</div>
                                    </div>
                                </div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                    </div>
                    <!--Popular Place Box-->
                    <div class="popular-place-box">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img width="570" height="350"
                                                           src="{{asset('images/resource/featured-image-21.jpg')}}"
                                                           alt=""></figure>
                                <div class="overlay-content">
                                    <h4>Glasgow</h4>
                                    <div class="count">24 Properties</div>
                                </div>
                            </div>
                            <a href="#" class="link-overlay"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    <!--Testimonials Section-->
    <section class="testimonials-style-one">
        <div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>Testimonials</h2>
            </div>

            <div class="carousel-outer">
                <div class="testimonial-carousel-one single-item-carousel owl-theme owl-carousel">
                @foreach($testimonials as $testimonial)
                    <!--Slide Item-->
                        <div class="slide-item">
                            <div class="slide-inner">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="image-column col-md-3 col-sm-12 col-xs-12">
                                        <figure class="image"><img
                                                    style="display: block; max-width: 570px; min-width: 570px; max-height: 503px; min-height: 503px;"
                                                    src="{{Storage::url($testimonial->media)}}"
                                                    alt="">
                                        </figure>
                                    </div>
                                    <!--Content Column-->
                                    <div class="content-column col-md-9 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <div class="icon"></div>
                                            <div class="slide-text">{{$testimonial->testimonial}}
                                            </div>
                                            <div class="author-info">
                                                <h4>{{$testimonial->name}}</h4>
                                                <div class="designation">{{$testimonial->designation}} @<a
                                                            href="#"> {{$testimonial->company}}</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <br/>
    @include('publiclayouts/partner-section')

@endsection