@extends('publiclayouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two"
             style="background-image:url({{asset('images/background/bg-page-title.jpg')}});">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2 style="color:white">Property Details</h2>
                <div class="text">Helping you make the Right Move.</div>
            </div>
        </div>
    </section>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!--Property DEtails-->
                    <section class="property-details">
                        <div class="prop-header">
                            <h3>{{$property->address}} <span class="prop-label">For {{$property->type}}</span></h3>
                            <div class="info clearfix">
                                <div class="location"><span
                                            class="fa fa-map-marker"></span>&ensp; {{$property->postcode}} {{$property->city}} {{$property->state}}
                                </div>
                            </div>
                        </div>

                        <!--Product Carousel-->
                        <div class="product-carousel-outer">

                            <!--Product image Carousel-->
                            <ul class="prod-image-carousel owl-theme owl-carousel">
                                @foreach($imageArray as $image)
                                    @if(!empty($image))
                                        <li>
                                            <figure class="image">
                                                <a class="lightbox-image option-btn"
                                                   data-fancybox-group="example-gallery"
                                                   href="{{Storage::url($image )}}" title="{{$property->title}}"><img
                                                            style="display: block; max-width: 770px; min-width: 770px; max-height: 400px; min-height: 400px;"
                                                            src="{{Storage::url($image)}}" alt=""></a>
                                            </figure>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <!--Product Thumbs Carousel-->
                            <div class="prod-thumbs-carousel owl-theme owl-carousel">
                                @foreach($imageArray as $image)
                                    <div class="thumb-item">
                                        <figure class="thumb-box"><img
                                                    style="display: block; max-width: 236px; max-height: 120px; min-height: 120px;"
                                                    src="{{Storage::url($image )}}" alt="" title="{{$property->title}}">
                                        </figure>
                                    </div>
                                @endforeach

                            </div>

                        </div><!--End Product Carousel-->

                        <div class="detail-content">
                            <div class="medium-title"><h3>PROPERTY DESCRIPTION</h3></div>
                            <div class="info">
                                <ul>
                                    <li>Price : &ensp;<span class="price">&pound;{{$property->price}}</span></li>
                                    <li>Area : &ensp;&ensp;<span class="area">{{$property->area}} sq ft.</span></li>
                                </ul>
                            </div>
                            <div class="text-content">
                                <p>{{$property->description}}</p>
                            </div>
                            <div class="property-specs">
                                <ul class="specs-list">
                                    <li>
                                        <div class="icon"><span class="flaticon-double-king-size-bed"></span>
                                        </div> {{$property->bedroom}} Bedrooms
                                    </li>
                                    <li>
                                        <div class="icon"><span class="flaticon-vintage-bathtub"></span>
                                        </div> {{$property->bathroom}} Bathrooms
                                    </li>
                                    <li>
                                        <div class="icon"><span class="flaticon-copy"></span></div> {{$property->area}}
                                        sq ft
                                    </li>
                                </ul>
                            </div>
                            <!--Other Features-->
                            <div class="other-features">
                                <div class="medium-title"><h3>Other Features</h3></div>
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <ul class="features-list">
                                            @if(!empty($property->swimmingpool))
                                                <li>Swimming Pool</li>@endif
                                            @if(!empty($property->gym))
                                                <li>Gym</li>@endif
                                            @if(!empty($property->firesafety))
                                                <li>Fire Safety</li>@endif
                                            @if(!empty($property->garden))
                                                <li>Garden</li>@endif
                                            @if(!empty($property->centralheating))
                                                <li>Central Heating</li>@endif
                                            @if(!empty($property->guesthouse))
                                                <li>Guest House</li>@endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="text-content">
                                {!!(base64_decode($property->fulldescription))!!}
                            </div>

                            {{--<!--Floor Plans-->--}}
                            {{--<div class="floor-plans">--}}
                            {{--<div class="medium-title"><h3>Explore Floor Plan</h3></div>--}}
                            {{--<div class="text">--}}
                            {{--<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>--}}
                            {{--</div>--}}
                            {{--<figure class="image"><img src="images/gallery/floor-plan-image.jpg" alt=""></figure>--}}
                            {{--<div class="download-link"><span class="txt">Property Plan PDF:</span> <a href="#" class="theme-btn btn-style-one">Download PDF</a></div>--}}
                            {{--</div>--}}

                            {{--<!--Video Tour-->--}}
                            {{--<div class="video-tour">--}}
                            {{--<div class="medium-title"><h3>Video Tour</h3></div>--}}
                            {{--<div class="video-box">--}}
                            {{--<figure class="image-box"><img src="images/resource/featured-image-22.jpg" alt=""><a class="lightbox-image overlay-link" href="https://www.youtube.com/watch?v=00ejR3CwxCk"><div class="icon"><span class="flaticon-arrows-2"></span></div></a></figure>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<!--Additional Info-->--}}
                            {{--<div class="add-info">--}}
                            {{--<div class="medium-title"><h3>Additionla Information</h3></div>--}}
                            {{--<ul class="info-list clearfix">--}}
                            {{--<li class="clearfix"><div class="pull-left">Police Station</div><div class="pull-right">10KM</div></li>--}}
                            {{--<li class="clearfix"><div class="pull-left">School</div><div class="pull-right">7KM</div></li>--}}
                            {{--<li class="clearfix"><div class="pull-left">Fire Station</div><div class="pull-right">8KM</div></li>--}}
                            {{--<li class="clearfix"><div class="pull-left">Hospital</div><div class="pull-right">5KM</div></li>--}}
                            {{--<li class="clearfix"><div class="pull-left">Play Ground</div><div class="pull-right">2KM</div></li>--}}
                            {{--<li class="clearfix"><div class="pull-left">Bank</div><div class="pull-right">12KM</div></li>--}}
                            {{--<li class="clearfix"><div class="pull-left">Shoping Mall</div><div class="pull-right">15KM</div></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}

                        </div>

                    </section>
                </div>
                <!--Content Side-->

                <!--Sidebar-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

                        <!-- Request Quote Form -->
                        <div class="sidebar-widget request-quote">
                            <div class="widget-inner">
                                <div class="default-form quote-form">
                                    <h4>Request A Quote</h4>
                                    @if($flash = session('message'))
                                        <div id="flash-message" class="alert alert-success alert-dismissable">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <strong>Success!</strong> {{$flash}}
                                        </div>
                                    @endif
                                    <form method="post" action="{{ url('/requestquote') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" name="name" value="" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Email" required>
                                        </div>
                                        <input type="hidden" name="propertyid" value="{{$property->id}}">
                                        <input type="hidden" name="propertytitle" value="{{$property->title}}">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="button-group">
                                            <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        @include('publiclayouts/sidebar-properties')

                    </aside>


                </div>
                <!--Sidebar-->

            </div>
        </div>
    </div>
@endsection