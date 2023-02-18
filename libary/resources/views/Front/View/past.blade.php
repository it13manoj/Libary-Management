@extends('layouts.app')
@section('title', 'Past Events')
@section('content')
    @include('Front.Common.top')
    @include('Front.Common.sidebar')
    @include('Front.Common.header')

     <!--Start breadcrumb area-->
     <section class="breadcrumb-area" style="background-image: url({{asset('Theme/frontTemp/assets/images/breadcrumb/breadcrumb-5.jpg')}});">
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
                                    <img class="zoominout" src="Theme/frontTemp/assets/images/shape/breadcrumb-shape2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h2>Past Events</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Past Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Event Page One-->
    <section class="event-page-one">
        <div class="container">
            <div class="row">

                @if(!empty($events))
                 @foreach($events as $row)
                <!--Start Single Event Style2-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-event-style1 single-event-style2">
                        <div class="single-event-style2_bg"
                            style="background-image: url({{'storage/'.$row->pic}});">
                        </div>
                        <div class="static-content">
                            <div class="date-box">
                                <div class="left">
                                    <h2>{{date('d',strtotime($row->Event_Date))}}</h2>
                                </div>
                                <div class="right">
                                    <h3>{{date('M',strtotime($row->Event_Date))}}</h3>
                                </div>
                            </div>
                            <div class="meta-info">
                                <p>Organized By: <a href="#">{{$row->Origination->name}}</a></p>
                            </div>
                            <div class="title">
                                <h2><a href="#">{{$row->title}}</a></h2>
                            </div>
                            <div class="inner-text">
                                {!! substr($row->description,0,150)."......."  !!}
                            </div>
                            <div class="border-box"></div>
                            <div class="event-time">
                                <div class="icon">
                                    <span class="flaticon-clock"></span>
                                </div>
                                <div class="text">
                                    <p>{{date('h:i:A',strtotime($row->Event_Date))}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-content">
                            <div class="date-box">
                                <div class="left">
                                    <h2>{{date('d',strtotime($row->Event_Date))}}</h2>
                                </div>
                                <div class="right">
                                    <h3>{{date('M',strtotime($row->Event_Date))}}</h3>
                                </div>
                            </div>
                            <div class="meta-info">
                                <p>Organized By: <a href="#">{{$row->Origination->name}}</a></p>
                            </div>
                            <div class="title">
                                <h2><a href="{{asset('event-details/'.$row->id)}}">{{$row->title}}</a>
                                </h2>
                            </div>
                            <div class="inner-text">
                                {!! substr($row->description,0,150)."......."  !!}
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{asset('event-details/'.$row->id)}}">
                                    <span class="txt"><i class="arrow1 fa fa-check-circle"></i>read more</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                    @endforeach
                @endif



        </div>
    </section>


    @include('Front.Common.footer')
@endsection
