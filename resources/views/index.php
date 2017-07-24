<?php include 'header.php'; ?>


    <!--Home Banner-->
    <section class="home-banner">
        <!--Banner Slider-->
        <div class="banner-slider-container">
            <ul class="banner-slider owl-theme owl-carousel">
                <li class="slide-item" style="background-image:url(images/main-slider/1.jpg);"></li>
                <li class="slide-item" style="background-image:url(images/main-slider/2.jpg);"></li>
                <li class="slide-item" style="background-image:url(images/main-slider/3.jpg);"></li>
            </ul>
        </div>

        <!--Banner Search Form-->
        <div class="banner-search-container">
            <div class="form-outer">
                <div class="banner-search-form">
                    <h1>Find your dream home just in a click</h1>
                    <div class="text">Claim your business rates refunds and / reductions with
                        “No Win NO Fee”</div>

                    <div class="banner-form-box">
                        <div class="default-form">
                            <form method="post" action="properties.php">
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
                        <li class="filter" data-role="button" data-filter=".for-sell">For Sell</li>
                        <li class="filter" data-role="button" data-filter=".for-rent">For Rent</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">

                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-rent col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property.php"><img src="images/resource/featured-image-11.jpg" alt=""></a></figure>
                                <div class="prop-cat rent-cat">For Rent</div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property.php">146 Liverpool Street</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="price-discount clearfix">
                                    <div class="price"><strong>$1600</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property.php">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property.php"><img src="images/resource/featured-image-12.jpg" alt=""></a></figure>
                                <div class="prop-cat sell-cat">For Sell</div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property.php">146 Liverpool Street</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="price-discount clearfix">
                                    <div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property.php">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-rent col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property.php"><img src="images/resource/featured-image-13.jpg" alt=""></a></figure>
                                <div class="prop-cat rent-cat">For Rent</div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property.php">146 Liverpool Street</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="price-discount clearfix">
                                    <div class="price"><strong>$1500</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property.php">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property.php"><img src="images/resource/featured-image-14.jpg" alt=""></a></figure>
                                <div class="prop-cat sell-cat">For Sell</div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property.php">146 Liverpool Street</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="price-discount clearfix">
                                    <div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property.php">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-rent col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property.php"><img src="images/resource/featured-image-15.jpg" alt=""></a></figure>
                                <div class="prop-cat rent-cat">For Rent</div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property.php">146 Liverpool Street</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater Manchester.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="price-discount clearfix">
                                    <div class="price"><strong>$1000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property.php">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property.php"><img src="images/resource/featured-image-16.jpg" alt=""></a></figure>
                                <div class="prop-cat sell-cat">For Sell</div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property.php">146 Liverpool Street</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 Greater London.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="price-discount clearfix">
                                    <div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property.php">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="view-all"><a href="properties.php" class="theme-btn btn-style-two">Explore More Properties</a></div>

        </div>
    </section>

    <?php include 'subscribe.php'; ?>

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
                                <figure class="image"><img src="images/resource/featured-image-17.jpg" alt=""></figure>
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
                                <figure class="image"><img src="images/resource/featured-image-20.jpg" alt=""></figure>
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
                                    <figure class="image"><img src="images/resource/featured-image-18.jpg" alt=""></figure>
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
                                    <figure class="image"><img src="images/resource/featured-image-19.jpg" alt=""></figure>
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
                                <figure class="image"><img src="images/resource/featured-image-21.jpg" alt=""></figure>
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


    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>Creative Agents</h2>
            </div>

            <div class="row clearfix">
                <!--Team Member-->
                <div class="team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                                <figure class="image"><a href="agent.php"><img src="images/resource/team-image-1.jpg" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                                <div class="inner">
                                    <div class="title">
                                        <h3><a href="agent.php">Miraz Kadri</a></h3>
                                        <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                    </div>
                                    <div class="desc-text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                                <figure class="image"><a href="agent.php"><img src="images/resource/team-image-2.jpg" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                                <div class="inner">
                                    <div class="title">
                                        <h3><a href="agent.php">Miraz Kadri</a></h3>
                                        <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                    </div>
                                    <div class="desc-text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                                <figure class="image"><a href="agent.php"><img src="images/resource/team-image-3.jpg" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                                <div class="inner">
                                    <div class="title">
                                        <h3><a href="agent.php">Miraz Kadri</a></h3>
                                        <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                    </div>
                                    <div class="desc-text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team Member-->
                <div class="team-member col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                                <figure class="image"><a href="agent.php"><img src="images/resource/team-image-4.jpg" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                                <div class="inner">
                                    <div class="title">
                                        <h3><a href="agent.php">Miraz Kadri</a></h3>
                                        <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                    </div>
                                    <div class="desc-text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="view-all"><a href="agents.php" class="theme-btn btn-style-two">View More Agents</a></div>

        </div>
    </section>


    <!--Testimonials Section-->
    <section class="testimonials-style-one">
        <div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>Testimonials</h2>
            </div>

            <div class="carousel-outer">
                <div class="testimonial-carousel-one single-item-carousel owl-theme owl-carousel">
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-3 col-sm-12 col-xs-12">
                                    <figure class="image"><img src="images/resource/featured-image-10.jpg" alt=""></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"></div>
                                        <div class="slide-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</div>
                                        <div class="author-info">
                                            <h4>Shah Paran</h4>
                                            <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-3 col-sm-12 col-xs-12">
                                    <figure class="image"><img src="images/resource/featured-image-10.jpg" alt=""></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"></div>
                                        <div class="slide-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</div>
                                        <div class="author-info">
                                            <h4>Shah Paran</h4>
                                            <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-3 col-sm-12 col-xs-12">
                                    <figure class="image"><img src="images/resource/featured-image-10.jpg" alt=""></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"></div>
                                        <div class="slide-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</div>
                                        <div class="author-info">
                                            <h4>Shah Paran</h4>
                                            <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-3 col-sm-12 col-xs-12">
                                    <figure class="image"><img src="images/resource/featured-image-10.jpg" alt=""></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"></div>
                                        <div class="slide-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</div>
                                        <div class="author-info">
                                            <h4>Shah Paran</h4>
                                            <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-3 col-sm-12 col-xs-12">
                                    <figure class="image"><img src="images/resource/featured-image-10.jpg" alt=""></figure>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                                    <div class="inner">
                                        <div class="icon"></div>
                                        <div class="slide-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</div>
                                        <div class="author-info">
                                            <h4>Shah Paran</h4>
                                            <div class="designation">Company Agent @<a href="#">Reki Housing</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!--Sponsors Section-->
    <section class="sponsors-section with-padding">
        <div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>Our Partners</h2>
            </div>

            <ul class="sponsors-carousel owl-theme owl-carousel">
                <li><figure class="image"><a href="#"><img src="images/sponsors/1.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/2.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/3.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/4.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/1.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/2.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/3.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="images/sponsors/4.png" alt=""></a></figure></li>
            </ul>

        </div>
    </section>

<?php include 'footer.php'; ?>