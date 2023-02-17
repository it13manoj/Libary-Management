@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    @include('Front.Common.top')
    @include('Front.Common.sidebar')
    @include('Front.Common.header')


      <!--Start breadcrumb area-->
      <section class="breadcrumb-area" style="background-image: url(Theme/frontTemp/assets/images/breadcrumb/breadcrumb-7.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content text-center">
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight"
                                data-wow-duration="2000ms">
                                <div class="shape1">
                                    <img class="float-bob" src="Theme/frontTemp/assets/images/shape/breadcrumb-shape1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight"
                                data-wow-duration="2000ms">
                                <div class="shape2">
                                    <img class="zoominout" src="Theme/frontTemp/assets/images/shape/breadcrumb-shape2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Contact Style1 Area-->
    <section class="contact-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-style1_form">
                        <div class="sec-title">
                            <div class="sub-title martop0">
                                <div class="inner">
                                    <h3>Support LoveIcon With Heart!</h3>
                                </div>
                            </div>
                            <h2>Get In Touch With Us</h2>
                            <p>Laboris nisi aliquip sed duis aute lorem ipsum dolor amet consectetur adipisicing
                                sed eiusmod tempor tm incididunts lorem ipsum sed labore dolore magnad aliqua.
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" name="contact_form" class="default-form2"
                                action="Theme/frontTemp/assets/inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_name" value="" placeholder="Your Name"
                                                required="">
                                            <div class="icon"><span class="flaticon-user"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="email" name="form_email" value="" placeholder="Email"
                                                required="">
                                            <div class="icon"><span class="flaticon-opened"></span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" placeholder="Phone">
                                            <div class="icon"><span class="fa fa-phone"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_subject" value="" placeholder="Subject">
                                            <div class="icon"><span class="fa fa-comment-o"></span></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="form_message" placeholder="message"
                                                required=""></textarea>
                                            <div class="icon"><span class="fa fa-pencil"></span></div>
                                        </div>
                                        <div class="button-box">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control"
                                                type="hidden" value="">
                                            <button class="btn-one" type="submit"
                                                data-loading-text="Please wait...">
                                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i> Send
                                                    Message</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="sidebar-content-box">
                        <div class="contact-info-sidebar">
                            <ul>
                                <li>
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-maps-and-flags"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Visit Office</h3>
                                        </div>
                                    </div>
                                    <p>83 Andy Street, Madison<br>New Jersey - 78002</p>
                                </li>

                                <li>
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-phone-call-1"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Phone</h3>
                                        </div>
                                    </div>
                                    <p>Support <a href="tel:+11987654321">+1 700 888 1234</a></p>
                                    <p>Events <a href="tel:+11987654321">+1 700 888 1200</a></p>
                                </li>

                                <li>
                                    <div class="top">
                                        <div class="icon">
                                            <span class="flaticon-opened"></span>
                                        </div>
                                        <div class="title">
                                            <h3>Phone</h3>
                                        </div>
                                    </div>
                                    <p><a href="mailto:info@templatepath.com">info@loveicon.org</a></p>
                                    <p><a href="mailto:info@templatepath.com">support@domain.org</a></p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Contact Style1 Area-->


    <!--Start Google map area-->
    <section class="google-map-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-page-map-outer">
                        <!--Map Canvas-->
                        <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                            data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                            data-icon-path="Theme/frontTemp/assets/images/resources/map-marker.png"
                            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Front.Common.footer')
@endsection
