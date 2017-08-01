<!--Main Footer-->
<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="logo"><a href="/"><img src="{{ asset('images/footer-logo.png')}}"
                                                                   alt=""></a></div>
                                <div class="widget-content">
                                    <div class="text">UK Estate has established in 2016 and we are located heart of East
                                        London, close to Docklands and Tower Bridge. We are regulated by Property
                                        Ombudsman as well as client deposit scheme.
                                    </div>
                                    <div class="copyright-text">&copy; Ukeandcs 2017, All Rights Reserved.</div>
                                </div>
                            </div>
                        </div><!--End Footer Column-->

                        <!--Footer Column-->
                        <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Quick Links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{ url('/properties') }}">Properties</a></li>
                                        <li><a href="{{ url('/') }}">Business Rates</a></li>
                                        <li><a href="{{ url('/testimonials') }}">Testimonials</a></li>
                                        <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--End Footer Column-->
                    </div>
                </div><!--End Big Column-->

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">


                        <!--Footer Column-->
                        <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <h2>Contact Us</h2>
                                <div class="widget-content">
                                    <div class="text">Feel free to ger in touch with us via phone or send us a
                                        message.
                                    </div>
                                    <ul class="contact-info">
                                        <li>
                                            <div class="icon"><span class="fa fa-envelope-o"></span></div>
                                            <a href="mailto:info@ukeandcs.com">info@ukeandcs.com</a></li>
                                        <li>
                                            <div class="icon"><span class="fa fa-phone"></span></div>
                                            +020 111 234 4567
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--End Footer Column-->

                        <!--Footer Column-->
                        <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            <div class="footer-widget social-widget">
                                <h2>Folow Us</h2>
                                <div class="widget-content">
                                    <ul class="social-links">
                                        <li><a href="https://facebook.com" class="facebook"><span
                                                        class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="https://twitter.com" class="twitter"><span
                                                        class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://plus.google.com" class="google-plus"><span
                                                        class="fa fa-google-plus"></span></a></li>
                                        <li><a href="https://linkedin.com" class="linkedin"><span
                                                        class="fa fa-linkedin"></span></a></li>
                                        <li><a href="https://instagram.com" class="instagram"><span
                                                        class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--End Footer Column-->

                    </div>
                </div><!--End Big Column-->

            </div>
        </div>
    </div>

</footer>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('js/mixitup.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{asset('js/map-script.js')}}"></script>
<!--End Google Map APi-->

</body>
</html>