<section class="mission-and-goals-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="inner">
                    <h3>{{$mission->heading2}}</h3>
                </div>
                <div class="outer"><img src="{{asset('Theme/frontTemp/assets/images/icon/loveicon.png')}}" alt=""></div>
            </div>
            <h2>{{$mission->title}}</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="mission-goals-content clearfix">
                    <div class="thm-shape1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="3500ms">
                        <img class="rotate-me" src="{{asset('Theme/frontTemp/assets/images/shape/thm-shape-1.png')}}" alt="">
                    </div>
                    <div class="thm-shape2"><img src="{{asset('Theme/frontTemp/assets/images/shape/thm-shape-5.png')}}" alt=""></div>
                    <div class="mission-goals-image-box"
                        style="background-image: url({{asset('storage/'.$mission->images)}});"></div>
                    <div class="text-holder">
                        {!!$mission->description!!}
                   

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
