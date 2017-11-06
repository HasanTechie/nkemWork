@extends('publiclayouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner" style="background-image:url({{asset('images/background/bg-page-title-property.jpg')}});">
        <div class="auto-container">
            <h1>COMMERCIAL PROPERTIES</h1>
            <div class="text">To all Landlords, We require all sizes of properties urgently for our potential Buyers and Tenants</div>

            <div class="banner-form-box medium">
                <div class="default-form">
                    <form method="post" action="commercial-properties">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                <select class="custom-select-box">
                                    <option>Property Type</option>
                                    <option>Buy</option>
                                    <option>Sell</option>
                                    <option>Let</option>
                                    <option>Rent</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                <input type="text" name="field-name" value="" placeholder="Enter Location" required>
                            </div>
                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">SEARCH</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>


    <!--Properties Search Section-->
    <section class="properties-search-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Posts Column-->
                <div class="posts-column col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="upper-filters clearfix">
                        <!--Form Column-->
                        <div class="form-column">
                            <div class="default-form">
                                <form method="post" action="properties">
                                    {{ csrf_field() }}
                                    <div class="option-box sort-by">
                                        <div class="sel-label">Sort By</div>
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>Newest Item</option>
                                                <option>By Price</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Count Column-->
                        <div class="count-column">
                            {{--<div class="count">2 homes found</div>--}}
                        </div>

                    </div>

                    <div class="listing">
                        @foreach($properties as $property)
                            @if($imageArray = explode(",", $property->images))

                                <div class="default-property-box list-view">
                                    <div class="inner-box clearfix">
                                        <!--Image Column-->
                                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="image-box">
                                                <figure class="image"><a href="{{$property->path()}}"><img
                                                                style="display: block; max-width: 360px; min-width: 360px; max-height: 240px; min-height: 240px;"
                                                                title="{{$property->title}}"
                                                                src="{{Storage::url($imageArray[0] )}}" alt=""></a>
                                                </figure>
                                                <div class="property-price">&pound;{{$property->price}}</div>
                                            </div>
                                        </div>
                                        <!--Content Column-->
                                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                            <div class="lower-content">
                                                <div class="property-title">
                                                    <h3><a href="{{$property->path()}}">{{$property->address}}</a></h3>
                                                    <div class="location"><span
                                                                class="fa fa-map-marker"></span>&nbsp; {{$property->postcode}} {{$property->city}} {{$property->state}}
                                                        .
                                                    </div>
                                                </div>
                                                <div class="prop-info clearfix">
                                                    <div class="prop-for"><span
                                                                class="for">For {{$property->type}}</span><span
                                                                class="area">{{$property->area}} sq ft.</span></div>
                                                    <div class="link-box"><a href="{{$property->path()}}"
                                                                             class="theme-btn">View Details <span
                                                                    class="fa fa-angle-right"></span></a></div>
                                                </div>
                                                <div class="property-meta">
                                                    <ul class="clearfix">
                                                        <li><span class="icon fa fa-user"></span> {{$property->name}}
                                                        </li>
                                                        <li>
                                                            <span class="icon fa fa-calendar"></span> {{$property->created_at->diffForHumans()}}
                                                        </li>
                                                        <li class="options">&ensp;</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>

                    {{--<!-- Styled Pagination -->--}}
                    {{--<div class="styled-pagination">--}}
                        {{--<ul>--}}
                            {{--<li><a href="#" class="active">1</a></li>--}}
                            {{--<li><a href="#">2</a></li>--}}
                            {{--<li><a href="#">3</a></li>--}}
                            {{--<li><a href="#" class="next">Next</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>

                <!--Search Form Column-->
                <div class="search-form-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-box">
                        <div class="title-header">Advance Search</div>

                        <div class="default-form">
                            <form method="post" action="commercial-properties">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Property Type</div>
                                        <select class="custom-select-box">
                                            <option>Any Type</option>
                                            <option>Buy</option>
                                            <option>Sell</option>
                                            <option>Let</option>
                                            <option>Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="range-slider-one">
                                            <div class="slider-header">
                                                <div class="clearfix">
                                                    <div class="title">Area Range (sq ft):</div>
                                                    <div class="input"><input type="text" class="area-size"
                                                                              name="field-name" readonly></div>
                                                </div>
                                            </div>

                                            <div class="area-range-slider"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="range-slider-one">
                                            <div class="slider-header">
                                                <div class="clearfix">
                                                    <div class="title">Price Range (&pound;):</div>
                                                    <div class="input"><input type="text" class="property-amount"
                                                                              name="field-name" readonly></div>
                                                </div>
                                            </div>

                                            <div class="price-range-slider"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Location</div>
                                        <select class="custom-select-box">
                                            <option>Central London</option>
                                            <option>North London</option>
                                            <option>South London</option>
                                            <option>East London</option>
                                            <option>West London</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Search Filters</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('publiclayouts/subscribe-section')
@endsection