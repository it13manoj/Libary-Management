@extends('layouts.app')
@section('title', 'Events Details')
@section('content')
    @include('Front.Common.top')
    @include('Front.Common.sidebar')
    @include('Front.Common.header')


        <!--Start Event Details Area-->
        <section class="event-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="event-details_content">

                            <div class="event-details-image-box">
                                <img src="{asset('Theme/frontTemp/assets/images/events/event-details-1.jpg'}}" alt="">
                                <div class="category">
                                    <h6>health & Education</h6>
                                </div>
                            </div>

                            <div class="event-details-text-box">
                                <h2>Contribute for the Educational &<br> Health Programs Globally</h2>
                                <ul class="event-info">
                                    <li>
                                        <div class="icon">
                                            <img src="Theme/frontTemp/assets/images/icon/date-1.png" alt="">
                                            <div class="overlay-icon">
                                                <img src="Theme/frontTemp/assets/images/icon/date-1-bg.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Date</p>
                                            <h3>April 17, 2021<br> 5:00 PM</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="Theme/frontTemp/assets/images/icon/map-marker-1.png" alt="">
                                            <div class="overlay-icon">
                                                <img src="Theme/frontTemp/assets/images/icon/map-marker-1-bg.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Location</p>
                                            <h3>83 Andy Street,<br> Madison NJ - 78002</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="Theme/frontTemp/assets/images/icon/cost-1.png" alt="">
                                            <div class="overlay-icon">
                                                <img src="Theme/frontTemp/assets/images/icon/cost-1-bg.png" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Cost</p>
                                            <h3>$25 - $134<br> Age: 18 & Above</h3>
                                        </div>
                                    </li>
                                </ul>

                                <div class="bottom-box">
                                    <div class="btns">
                                        <a class="btn-one" href="https://www.paypal.me/" target="_blank" rel="nofollow">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>join this
                                                event</span>
                                        </a>
                                    </div>
                                    <div class="social-share">
                                        <div class="title">
                                            <h5>Share Cause</h5>
                                        </div>
                                        <ul class="social-links">
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            {!!$event->description!!}

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="sidebar-content-box">
                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-author-box text-center">
                                    <div class="img-holder">
                                        <img src="Theme/frontTemp/assets/images/resources/sidebar-author-1.png" alt="">
                                    </div>
                                    <div class="title-holder">
                                        <h3>Saima Hayden</h3>
                                        <p>Nostrud aliquip exrcitation laboris<br>nisiut temp duis autey. Lorem
                                            unt<br>ipsum sit amet elit dolor.</p>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->
                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="single-sidebar_search_box">
                                    <div class="title">
                                        <h3>Search</h3>
                                    </div>
                                    <div class="sidebar-search-box wow fadeInUp animated animated animated"
                                        data-wow-delay="0.1s" data-wow-duration="1200ms"
                                        style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <form class="search-form" action="#">
                                            <input placeholder="Keyword" type="text">
                                            <button type="submit"><i class="fa fa-search"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->
                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-categories">
                                    <div class="title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="sidebar-categories-box">
                                        <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Charity for
                                                Poor</a></li>
                                        <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Feed the
                                                People</a></li>
                                        <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Donations:
                                                How to?</a></li>
                                        <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Duties &
                                                Resposibility</a></li>
                                        <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Food Supply
                                                Chains</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->

                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-slogan-box"
                                    style="background-image: url(Theme/frontTemp/assets/images/sidebar/sidebar-slogan-img.jpg);">
                                    <div class="icon">
                                        <img src="Theme/frontTemp/assets/images/icon/thm-logo1.png" alt="" />
                                    </div>
                                    <p>Small Donations Bigger Impact</p>
                                    <h2>Education Health<br>for Every Child</h2>
                                    <div class="btn-box">
                                        <div class="hand"><img src="Theme/frontTemp/assets/images/shape/hand.png" alt=""></div>
                                        <a class="btn-one" href="about.html">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>donate now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->

                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-campaigns">
                                    <div class="title">
                                        <h3>Upcoming Events</h3>
                                    </div>
                                    <ul class="recent-campaigns">
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="Theme/frontTemp/assets/images/sidebar/campaigns-1.jpg"
                                                        alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4><a href="#">Help with Global<br> Charity</a></h4>
                                                    <div class="btns">
                                                        <a href="#">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="Theme/frontTemp/assets/images/sidebar/campaigns-2.jpg"
                                                        alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4><a href="#">School Education<br> in Africa</a></h4>
                                                    <div class="btns">
                                                        <a href="#">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="Theme/frontTemp/assets/images/sidebar/campaigns-3.jpg"
                                                        alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4><a href="#">Make Homes for<br> Peoples</a></h4>
                                                    <div class="btns">
                                                        <a href="#">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->

                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--End Event Details Area-->

        <style>
            tr>td>img {
            max-width: fit-content !important;
            width: 4.2rem !important;
            
        }
        </style>
    @include('Front.Common.footer')
@endsection
