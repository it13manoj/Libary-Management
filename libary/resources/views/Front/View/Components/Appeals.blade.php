<section class="cause-style2-area">
    <div class="thm-shape1 float-bob"><img src="assets/images/shape/thm-shape-2.png" alt=""></div>
    <div class="thm-shape2 zoom-fade"><img src="assets/images/shape/thm-shape-3.png" alt=""></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="inner">
                    <h3>{{$appealsHead->heading2}}</h3>
                </div>
                <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
            </div>
            <h2>{{$appealsHead->heading3}}</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="theme_carousel cause2-carousel  owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>

                    @foreach ($appeals as $key=>$item)


                    <!--Start Single Cause Style1-->
                    <div class="single-cause-style1 ">
                        <div class="img-holder">
                            <img src="{{asset('storage/'.$item->images)}}" alt="">
                        </div>
                        <div class="text-holder">
                            <h3><a href="causes-details.html">{{$item->categories->name}}</a></h3>
                           {!!$item->description!!}

                            <div class="progress-levels progress-levels-style2">
                                <!--Skill Box-->
                                <div class="progress-box wow">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="50" title="Book"></div>
                                            </div>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="rate-box">
                                                <p>Achieved<span>$25,00</span></p>
                                                <p>Target<span>$5,000</span></p>
                                            </div>
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="50">0</span>
                                                <span class="percent">%</span>
                                                <p class="outer-text">Pledged So Far</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                            class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                            </div>

                        </div>
                    </div>

                    @endforeach

                    <!--End Single Cause Style1-->
                </div>
            </div>
        </div>
    </div>
</section>
