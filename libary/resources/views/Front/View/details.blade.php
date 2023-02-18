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
                                <img src="{{asset('storage/'.$event->pic)}}" alt="">
                                <div class="category">
                                    <h6>{{$event->Categories->name}}</h6>
                                </div>
                            </div>

                            <div class="event-details-text-box">
                                <h2>{{$event->title}}</h2>
                                <ul class="event-info">
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('Theme/frontTemp/assets/images/icon/date-1.png')}}" alt="">
                                            <div class="overlay-icon">
                                                <img src="{{asset('Theme/frontTemp/assets/images/icon/date-1-bg.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Date</p>
                                            <h3>{{date('d-F',strtotime($event->Event_Date))}}<br> {{date('h:i:A',strtotime($event->Event_Date))}}</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('Theme/frontTemp/assets/images/icon/map-marker-1.png')}}" alt="">
                                            <div class="overlay-icon">
                                                <img src="{{asset('Theme/frontTemp/assets/images/icon/map-marker-1-bg.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Location</p>
                                            <h3>{{$event->location}}</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{asset('Theme/frontTemp/assets/images/icon/cost-1.png')}}" alt="">
                                            <div class="overlay-icon">
                                                <img src="{{asset('Theme/frontTemp/assets/images/icon/cost-1-bg.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Event Cost</p>
                                            <h3>{{$event->cost}}</h3>
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
                                            <li><a href="{{$event->tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="{{$event->fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="{{$event->inst}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="{{$event->ln}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                                        <h3>{{$event->Origination->name}}</h3>
                                        {!!$event->Origination->description!!}
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="{{$event->Origination->tw}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$event->Origination->fb}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$event->Origination->inst}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="$event->Origination->ln"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Single Sidebar Box-->
                            <!--Start Single Sidebar Box-->

                            <!--End Single Sidebar Box-->
                            <!--Start Single Sidebar Box-->
                            <div class="single-sidebar-box">
                                <div class="sidebar-categories">
                                    <div class="title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul class="sidebar-categories-box">
                                        @if($Categories)
                                            @foreach($Categories as $row)
                                        <li><a href="#"><i class="{{($row->id==$event->category_id)? 'fa fa-check-circle' : 'fa fa-times-circle-o'}}" aria-hidden="true"></i>               {{$row->name}}
                                                Poor</a></li>

                                                    @endforeach
                                                @endif
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
