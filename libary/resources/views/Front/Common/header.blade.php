<header class="main-header header-style-one">
    {{-- <div class="header-top">
        <div class="container">
            <div class="outer-box clearfix">

                <div class="header-top_left pull-left">
                    <div class="icon">
                        <img src="assets/images/icon/arrow-1.png" alt="">
                    </div>
                    <div class="header-top_left-content">
                        <div class="theme_carousel header-top_left-carousel owl-theme owl-carousel"
                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "1139":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                            <!--Start Single Item-->
                            <div class="single-item">
                                <p>Sponsor an orphan and feed the poor people with us</p>
                            </div>
                            <!--End Single Item-->
                            <!--Start Single Item-->
                            <div class="single-item">
                                <p>Sponsor an orphan and feed the poor people with us</p>
                            </div>
                            <!--End Single Item-->
                        </div>
                    </div>
                </div>

                <div class="header-top_right pull-right">
                    <div class="header-social-link-1">
                        <ul class="clearfix">
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <!--Start Header-->
    <div class="header">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-left clearfix pull-left">
                    <div class="logo" style="width: 6em">
                        <a href="index.html"><img src="{{asset('Theme/frontTemp/logo/logo.jpeg') }}" alt="Awesome Logo"
                                title=""></a>
                    </div>
                </div>

                <div class="header-right pull-right">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li href="/"><a href="/">Home</a>
                                        {{-- <ul>
                                            <li><a href="index.html">Home Page 01</a></li>
                                            <li><a href="index-2.html">Home Page 02</a></li>
                                            <li><a href="index-3.html">Home Page 03</a></li>
                                            <li><a href="index-4.html">Home Page 04</a></li>
                                            <li><a href="index-5.html">Home Page 05</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                    <li><a href="index-5.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li class="dropdown"><a href="#">Events</a>
                                        <ul>
                                            <li><a href="{{route('upcoming-events')}}">Upcoming Events</a></li>

                                            <li><a href="{{route('past-events')}}">Past Events</a></li>
                                            {{-- <li><a href="team.html">Our Team</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="error.html">404 Error page</a></li> --}}
                                        </ul>
                                    </li>
                                    <li ><a href="#">Mission and Goals</a>
                                        {{-- <ul>
                                            <li><a href="causes-1.html">causes Style 01</a></li>
                                            <li><a href="causes-2.html">causes Style 02</a></li>
                                            <li><a href="causes-3.html">causes Style 03</a></li>
                                            <li><a href="causes-details.html">causes Details</a></li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="blog.html">News Grid View</a></li>
                                            <li><a href="blog-2.html">News List View</a></li>
                                            <li><a href="blog-single.html">News Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                    <div class="header-right_buttom">
                        <div class="btns-box">
                            <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                        class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                        </div>
                        <div class="side-content-button">
                            <a class="navSidebar-button" href="#">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End header-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index.html" class="img-responsive"><img
                            src="assets/images/resources/sticky-logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/mobilemenu-logo.png"
                        alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>

<style>
    .header-left .logo {
    position: relative;
    display: block;
    padding-top: 17px;
    padding-bottom: 11px;
}
</style>
