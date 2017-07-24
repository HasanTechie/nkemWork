@extends('layouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner" style="background-image:url({{asset('images/background/bg-page-title.jpg')}});">
        <div class="auto-container">
            <h1>Search Your Home</h1>
            <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>

            <div class="banner-form-box medium">
                <div class="default-form">
                    <form method="post" action="properties">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                            <div class="form-group col-md-9 col-sm-8 col-xs-12">
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
                                                <option>By Ratings</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="option-box">
                                        <div class="sel-label">View</div>
                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option>List</option>
                                                <option>Grid</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Count Column-->
                        <div class="count-column">
                            <div class="count">42 homes found</div>
                        </div>

                    </div>

                    <div class="listing">
                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-1.jpg" alt=""></a></figure>
                                        <div class="property-price">$1,000 / Month</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-2.jpg" alt=""></a></figure>
                                        <div class="property-price">$27,000</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For sell</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                                        <div class="property-price">$15,00 / Month</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-4.jpg" alt=""></a></figure>
                                        <div class="property-price">$27,000</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-5.jpg" alt=""></a></figure>
                                        <div class="property-price">$800 / Month</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                                        <div class="property-price">$27,000</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                                        <div class="property-price">$15,00 / Month</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Default Property Box / List View-->
                        <div class="default-property-box list-view">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="image-box">
                                        <figure class="image"><a href="property"><img src="images/resource/featured-image-4.jpg" alt=""></a></figure>
                                        <div class="property-price">$27,000</div>
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                    <div class="lower-content">
                                        <div class="rating-review">
                                            <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                            <div class="rev">(105 reviews)</div>
                                        </div>
                                        <div class="property-title">
                                            <h3><a href="property">146 Liverpool Street</a></h3>
                                            <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                        </div>
                                        <div class="prop-info clearfix">
                                            <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                            <div class="link-box"><a href="property" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                                        </div>
                                        <div class="property-meta">
                                            <ul class="clearfix">
                                                <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                                <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                                <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Styled Pagination -->
                    <div class="styled-pagination">
                        <ul>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" class="next">Next</a></li>
                        </ul>
                    </div>
                </div>

                <!--Search Form Column-->
                <div class="search-form-column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-box">
                        <div class="title-header">Advance Search</div>

                        <div class="default-form">
                            <form method="post" action="properties">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Status</div>
                                        <select class="custom-select-box">
                                            <option>Any Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
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
                                                    <div class="input"><input type="text" class="area-size" name="field-name" readonly></div>
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
                                                    <div class="title">Price Range ($):</div>
                                                    <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
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
                                            <option>All Cities</option>
                                            <option>Ney York</option>
                                            <option>Hong Kong</option>
                                            <option>Islamabad</option>
                                            <option>Dhaka</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Beds</div>
                                        <select class="custom-select-box">
                                            <option>All</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3-5</option>
                                            <option>5-10</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Baths</div>
                                        <select class="custom-select-box">
                                            <option>All</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3-5</option>
                                            <option>5-10</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="separator"></div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Additional Features</div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-1">
                                            <label for="cbox-1">Swimming Pool</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-2">
                                            <label for="cbox-2">Air Conditioning</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-3">
                                            <label for="cbox-3">Laundry Room</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-4">
                                            <label for="cbox-4">Gym</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-5">
                                            <label for="cbox-5">Central Heating</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-6">
                                            <label for="cbox-6">Fire Safty</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-7">
                                            <label for="cbox-7">Window Cinvering</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-8">
                                            <label for="cbox-8">Alarm</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-9">
                                            <label for="cbox-9">Garden</label>
                                        </div>
                                        <div class="check-box">
                                            <input type="checkbox" id="cbox-10">
                                            <label for="cbox-10">Guest House</label>
                                        </div>
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

    @include('layouts/subscribe-section')
@endsection