<section class="features-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="inner">
                    <h3>{{$charityHeading->heading2}}</h3>
                </div>
                <div class="outer"><img src="Theme/frontTemp/assets/images/icon/loveicon.png" alt=""></div>
            </div>
            <h2>{{$charityHeading->heading3}}</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="features-style1_box">
                    <div class="thm-shape1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="3500ms">
                        <img class="rotate-me" src="Theme/frontTemp/assets/images/shape/thm-shape-1.png" alt="">
                    </div>
                    <div class="row">

                        @foreach($charity as $row)
                        <!--Start Features Style1 Single-->
                        <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="500">
                            <div class="features-style1_single">
                                <div class="icon-holder">
                                    <div class="inner">
                                        <img src="{{asset('storage/slider/'.$row->images)}}" alt="">
                                    </div>
                                    <div class="shape1 zoominout">
                                        <img src="Theme/frontTemp/assets/images/icon/features/shape-1.png" alt="">
                                    </div>
                                    <div class="shape-bg">
                                        <img src="Theme/frontTemp/assets/images/icon/features/feature-v1-1-bg.png" alt="">
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>{{$row->title}}</h3>
                                    <p>{{$row->description}}</p>
                                    <div class="btns-box">
                                        <a class="btn-one" href="about.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>read more</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--End Features Style1 Single-->
                        <!--End Features Style1 Single-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
