<section class="main-slider style1">
    <div class="shape2 paroller"></div>
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            @if(!empty($slider))
            <!-- Slide -->
            @foreach($slider as $key=>$row)
            <div class="slide">
                <div class="image-layer" style="background-image:url({{asset('storage/slider/'.$row->images)}})">
                </div>
                <div class="auto-container">
                    <div class="content">

                        <h3>{{$row->title}}</h3>
                        <div class="big-title">
                            <h2>{{$row->heading2}}<br> {{$row->heading3}}</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="text">
                            <p>{{$row->description}}</p>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one btn-one-style2" href="about.html">
                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we help</span>
                            </a>
                            <a class="btn-one marlft15" href="about.html">
                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i>support us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

             @endforeach
            @endif
        </div>
    </div>
</section>
