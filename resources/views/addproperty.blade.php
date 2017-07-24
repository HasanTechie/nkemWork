<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ukeandcs.com</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

        <div class="main-box">
            <div class="outer-container clearfix">

                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="/" title="Ukeandcs"><img src="images/logo.png" alt="Ukeandcs" title="Ukeandcs"></a></div>
                </div>
            </div>
        </div>

    </header>
    <!--End Main Header -->


    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url({{asset('images/background/bg-page-title.jpg')}});">
        <div class="auto-container">
            <h1>Add Property</h1>
            <div class="text">Reprehenderit in voluptate velit esse cillum dolore.</div>
        </div>
    </section>

    <!--Add Property Section-->
    <section class="add-property">
        <div class="default-form">
            <form method="post" action="#">
                {{ csrf_field() }}
                <!--Add Property Info-->
                <div class="add-property-info">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Property Information</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Property Title</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Status</div>
                                <select class="custom-select-box">
                                    <option>Any Status</option>
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Type</div>
                                <select class="custom-select-box">
                                    <option>Any Type</option>
                                    <option>Commercial</option>
                                    <option>Residential</option>
                                    <option>Agricultural</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Price ($)</div>
                                <input type="text" name="field-name" value="" placeholder="0" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Area (Sq. ft)</div>
                                <input type="text" name="field-name" value="" placeholder="0" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add Gallery-->
                <div class="add-gallery">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Photo Gallery</h2></div>
                        <div class="upload-panel">
                            <div class="icon"><span class="fa fa-plus"></span></div>
                            <div class="text">Click here or drop files to upload</div>
                        </div>
                    </div>
                </div>
                <!--Add Property Location-->
                <div class="add-property-location">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Property Location</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Address</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">State</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">City</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Zip Code</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add Details Info-->
                <div class="add-details-info">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Details Information</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Description</div>
                                <textarea name="field-name" placeholder="" required></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Bedroom</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Dining Room</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Drawing Room</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Kitchen</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Bathroom</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Garage</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Other Features</div>
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
                        </div>
                    </div>
                </div>
                <!--Add Contact Info-->
                <div class="add-contact-info">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Contact Info</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Name</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Email</div>
                                <input type="email" name="field-name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <div class="field-label">Phone</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="button-box"><button type="submit" class="theme-btn btn-style-one">Add Property</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>
</html>