@extends('layouts/master')

@section('content')

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
                                        <figure class="image"><img width="570" height="503"
                                                                   src="{{asset('images/resource/'.$testimonial->media)}}"
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
                                                            href="#">{{$testimonial->company}}</a></div>
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
    <hr>
    @include('layouts/subscribe-section')
@endsection