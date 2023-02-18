<section class="causes-style1-area">
    <div class="causes-style1-area_bg" style="background-image: url(assets/images/pattern/thm-pattern-1.png')}});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="causes-style1_image-box">
                    @php
                        ($section2) ? $img=json_decode($section2->images) : $img="";

                    @endphp
                    <div class="shape wow slideInLeft" data-wow-delay="0ms" data-wow-duration="3500ms">
                        <img class="zoom-fade" src="{{ asset('Theme/frontTemp/assets/images/shape/thm-shape-7.png') }}" alt="">
                    </div>

                    <div class="causes-style1_image2">
                        <img src="{{(array_key_exists(0,$img)) ? asset('storage/'.$img[0]) : ''}}" alt="">
                    </div>
                    <div class="main">
                        <img src="{{(array_key_exists(1,$img)) ? asset('storage/'.$img[1]) : ''}}" alt="">
                    </div>
                    <div class="causes-style1_image3">
                        <img src="{{(array_key_exists(2,$img)) ? asset('storage/'.$img[2]) : ''}}" alt="">
                    </div>
                    <div class="causes-style1_image4">
                        <img src="{{(array_key_exists(3,$img)) ? asset('storage/'.$img[3]) : ''}}" alt="">
                    </div>

                </div>
            </div>
            <div class="col-xl-6">
                <div class="causes-style1_content-box">
                    <div class="sec-title">
                        <div class="sub-title martop0">
                            <div class="inner">
                                <h3>{{($section2)? $section2->heading2 : ""}}</h3>
                            </div>
                        </div>
                        <h2>{{($section2)? $section2->heading3 : ""}}<br> {{($section2)? $section2->title : ""}}</h2>
                    </div>
                    <div class="inner-content">
                        <div class="text-box">
                            <p>{{($section2)? $section2->description : ""}}</p>
                        </div>

                        <div class="progress-levels">
                            <!--Skill Box-->
                            <div class="progress-box wow">
                                <div class="inner count-box">
                                    <div class="bar">
                                        <div class="bar-innner">
                                            <div class="bar-fill" data-percent="65" title="Book"></div>
                                        </div>
                                        <div class="text">Target: $10,000</div>
                                    </div>

                                    <div class="skill-percent">
                                        <span class="count-text" data-speed="3000" data-stop="65">0</span>
                                        <span class="percent">%</span>
                                        <span class="outer-text">Pledged So Far</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btns-box">
                            <a class="btn-one" href="causes-details.html">
                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate Now</span>
                            </a>
                            <a class="video-popup cause-video-button" title="Loveicon Video Gallery"
                                href="https://www.youtube.com/watch?v=MLpWrANjFbI">
                                <span class="flaticon-play-button playicon"></span>
                                <span class="txt">cause video</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
