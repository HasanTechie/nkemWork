@extends('publiclayouts/master')

@section('content')
    <!--Inner Page Banner-->
    <section class="inner-page-banner style-two"
             style="background-image:url({{asset('images/background/bg-page-title-old.jpg')}});">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2 style="color:white">Our Fees</h2>
                <div class="text">Have You Been Paying More Business Rates Than You Should Be?</div>
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
                                    <h1><b>UK Estate Fees:</b></h1>
                                    <div class="text">
                                        <p lang="en-GB">Our objective is to provide a high quality service to landlords
                                            &amp; tenants, we also make a competitive fee charge for our services, which
                                            will be discussed and quoted once both parties are agree to proceed. <br>
                                            We shall make every efforts to ensure our fee remain same
                                            throughout the agreed term of lease or tenancy. However, should your
                                            circumstance changes within the contractual term, UK Ltd reserve right to
                                            charge other fees depending on as what service you required. Moreover, at
                                            end of the contractual term UK Ltd reserve right to charge renewal and other
                                            fees. <br> Time to time we may fluctuate our fee due to promoting our
                                            business or services, however, this shall not apply to you as you have
                                            already signed the contract. <br> UK Estate reserves the right to change
                                            fees and its terms &amp;
                                            conditions, however, a notice in writing will be serve to all parties.</p>

                                        <div class="col-xs-6" style="padding-left: 0;">
                                            <h2><b>Residential Property Standard Fee:</b></h2>
                                            <br>
                                            <h2 class="sub-header">Sellers Fee:</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th class="col-md-3">Sole Agency Sale Fee:</th>
                                                        <td class="col-md-1">1.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Multiple Agency Sale Fee:</th>
                                                        <td class="col-md-1">2.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">
                                                            <nobr>Require Energy Performance Certificate</nobr>
                                                        </th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <h2 class="sub-header">Landlord:</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th class="col-md-3">Lettings Only</th>
                                                        <td class="col-md-1">10%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Renewals</th>
                                                        <td class="col-md-1">6%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Letting & Management</th>
                                                        <td class="col-md-1">15%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Renewals</th>
                                                        <td class="col-md-1">10%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3"><h4>Other Estimated Costs;</h4></th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Inventory Check-In</th>
                                                        <td class="col-md-1">£145</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Section 21</th>
                                                        <td class="col-md-1">£60</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Deposit Protection Registration</th>
                                                        <td class="col-md-1">£25</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Energy performance Certificate</th>
                                                        <td class="col-md-1">£80</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Electric Safety Certificate</th>
                                                        <td class="col-md-1">£80</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Gas Safety Certificate</th>
                                                        <td class="col-md-1">£80</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <h2 class="sub-header">Tenant:</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th class="col-md-3">Administration fees each person</th>
                                                        <td class="col-md-1">£130</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Equivalent rent, One Month advance rent &
                                                            One Deposit
                                                        </th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Tenancy Renewal</th>
                                                        <td class="col-md-1">£140</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Change of within existing
                                                            tenancy/occupancy
                                                        </th>
                                                        <td class="col-md-1">£175</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Each UK Letter sent to tenants for late
                                                            payment or arrears
                                                        </th>
                                                        <td class="col-md-1">£40</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">On Expatiation of Tenancy Inventory Check
                                                            Out
                                                        </th>
                                                        <td class="col-md-1">£140</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3"><h4>Other Estimated Costs;</h4></th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">All Credit, Debit and others an
                                                            Administration charge will be added
                                                        </th>
                                                        <td class="col-md-1">3%</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-xs-6" style="padding-left: 0;">
                                            <h2><b>Commercial Property Standard Fee:</b></h2>
                                            <br>
                                            <h2 class="sub-header">Sellers Fee:</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th class="col-md-3">Sole Agency Sale Fee:</th>
                                                        <td class="col-md-1">2.%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Multiple Agency Sale Fee:</th>
                                                        <td class="col-md-1">3.%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">&nbsp;</th>
                                                        <td class="col-md-1">&nbsp;</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <br>
                                            <h2 class="sub-header">Landlord:</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th class="col-md-3">Lettings Only</th>
                                                        <td class="col-md-1">9%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Renewals</th>
                                                        <td class="col-md-1">12%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Letting & Management</th>
                                                        <td class="col-md-1">16%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Renewals</th>
                                                        <td class="col-md-1">12%</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3"><h4>Other Estimated Costs;</h4></th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Inventory Check-In</th>
                                                        <td class="col-md-1">£240</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Electric Safety Certificate</th>
                                                        <td class="col-md-1">£80</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Gas Safety Certificate</th>
                                                        <td class="col-md-1">£80</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">&nbsp;</th>
                                                        <th class="col-md-1">&nbsp;</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">&nbsp;</th>
                                                        <th class="col-md-1">&nbsp;</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">&nbsp;</th>
                                                        <th class="col-md-1">&nbsp;</th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <br>
                                            <h2 class="sub-header">Tenant:</h2>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th class="col-md-3">Administration fees each person</th>
                                                        <td class="col-md-1">£300</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Equivalent rent, Quarter advance rent &
                                                            Quarter Deposit.
                                                        </th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Tenancy / Lease Renewal</th>
                                                        <td class="col-md-1">£300</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Change of within existing
                                                            tenancy/occupancy
                                                        </th>
                                                        <td class="col-md-1">£450</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">Each UK Letter sent to tenants for late
                                                            payment or arrears
                                                        </th>
                                                        <td class="col-md-1">£70</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">On Expatiation of Tenancy Inventory Check
                                                            Out
                                                        </th>
                                                        <td class="col-md-1">£240</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3"><h4>Other Estimated Costs;</h4></th>
                                                        <td class="col-md-1"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-3">All Credit, Debit and others an
                                                            Administration charge will be added
                                                        </th>
                                                        <td class="col-md-1">3%</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
