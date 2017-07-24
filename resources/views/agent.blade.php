@extends('layouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url({{asset('images/background/bg-page-title.jpg')}});">
        <div class="auto-container">
            <h1>Agent Profile</h1>
            <div class="text">Reprehenderit in voluptate velit esse cillum dolore.</div>
        </div>
    </section>


    <!--Agent Details-->
    <section class="agent-details">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                    <figure class="image"><img src="images/resource/team-image-17.jpg" alt=""></figure>
                </div>

                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner">
                        <div class="details-header clearfix">
                            <div class="title">
                                <h3>Jhon Thomson</h3>
                                <div class="designation">Agent in London</div>
                            </div>
                        </div>
                        <div class="text-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint voccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</div>
                        <ul class="contact-info clearfix">
                            <li><span class="fa fa-phone"></span> (020) 123 456 7898</li>
                            <li><span class="fa fa-skype"></span> connectagent</li>
                            <li><span class="fa fa-envelope"></span> example@gmail.com</li>
                        </ul>

                        <div class="facts">
                            <ul class="clearfix">
                                <li><div class="icon-box"><span class="fa fa-home"></span></div><h4>42</h4><div class="subtitle">Properties Sold</div></li>
                                <li><div class="icon-box"><span class="fa fa-briefcase"></span></div><h4>08</h4><div class="subtitle">Years of Experience</div></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection