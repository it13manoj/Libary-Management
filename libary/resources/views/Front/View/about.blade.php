@extends('layouts.app')
@section('title', 'About')
@section('content')
    @include('Front.Common.top')
    @include('Front.Common.sidebar')
    @include('Front.Common.header')


        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url({{asset('storage/'.$about->images)}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center">
                            <div class="parallax-scene parallax-scene-1">
                                <div data-depth="0.20" class="parallax-layer shape wow zoomInRight"
                                    data-wow-duration="2000ms">
                                    <div class="shape1">
                                        <img class="float-bob" src="{{asset('Theme/frontTemp/assets/images/shape/breadcrumb-shape1.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="parallax-scene parallax-scene-1">
                                <div data-depth="0.20" class="parallax-layer shape wow zoomInRight"
                                    data-wow-duration="2000ms">
                                    <div class="shape2">
                                        <img class="zoominout" src="{{asset('Theme/frontTemp/assets/images/shape/breadcrumb-shape2.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <h2>{{$about->heading2}}</h2>
                            </div>
                            <div class="border-box"></div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><span class="flaticon-right-arrow"></span></li>
                                    <li class="active">About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->



        <!--Start About Style2 Area-->
        <section class="about-style2-area pd120-0-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="">
                            <div class="sec-title">
                                <div class="sub-title martop0">
                                    <div class="inner">
                                        <h3>{{$about->title}}</h3>
                                    </div>
                                </div>
                            </div>
                            {!!$about->description!!}

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Style2 Area-->



        <!--Start Features Style1 Area-->
        @include('Front.View.Components.Charity')
        <!--End Features Style1 Area-->




        <!--Start Donate Form Area-->
        @include('Front.View.Components.Donate')
        <!--End Donate Form Area-->


        <!--Start Team Style1 Area-->
        @include('Front.View.Components.Upcoming')
        <!--End Team Style1 Area-->


    @include('Front.Common.footer')
@endsection
