   <!--Start footer area -->
   <footer class="footer-area">
    <!--Start Footer-->
    <div class="footer">
        <div class="auto-container">
            <div class="row text-right-rtl">
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="/"> <img src="assets/images/footer/footer-logo.png"
                                        alt="" /></a>
                            </div>
                            <div class="text-box">
                                <p>Excepteur sint occaecat cupidatat none proident sunt culpa officia deserunt
                                    mollit anim id est laborum luptatem.
                                </p>
                            </div>

                            <div class="footer-contact-info">
                                <div class="icon">
                                    <span class="flaticon-phone-call"></span>
                                </div>
                                <div class="support-box">
                                    <h5><a href="#">{{ App\Home::where('name', "Addcontact")->where("heading3","Phone")->first()->heading2 }}</a></h5>
                                    <div class="email">
                                        <p><a href="#">{{ App\Home::where('name', "Addcontact")->where("heading3","Email")->first()->heading2 }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-4 col-md-3 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget martop pd40-0">
                        <div class="title">
                            <h3>Recent Appeals</h3>
                        </div>
                        <ul class="footer-widget-links1">
                            <li><a href="#">Asia Africa Pacific</a></li>
                            <li><a href="#">Somalia Emergency</a></li>
                            <li><a href="#">City Floods Relief</a></li>
                            <li><a href="#">Medical Emergency</a></li>
                            <li><a href="#">Covid-19 Emergency</a></li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->

                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-4 col-md-3 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget martop">
                        <div class="title">
                            <h3>About Us</h3>
                        </div>
                        <ul class="footer-widget-links1">
                            <li><a href="{{asset('about')}}">About Us</a></li>
                            <li><a href="#">Where We Work</a></li>
                            <li><a href="#">Our History</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Become Volunteer</a></li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget martop pdtop40">
                        <div class="title">
                            <h3>Contact Us</h3>
                        </div>
                        <ul class="footer-widget-links1">
                            <li><a href="{{asset('contact')}}">Contact Us</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="3">Quick Response</a></li>
                            <li><a href="#">Food Health Aid</a></li>
                            <li><a href="#">Women Programs</a></li>
                        </ul>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget fixwidth martop pdtop40">
                        <div class="title">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="text">
                            <p>Be the first one to receive latest updates.</p>
                        </div>
                        <form class="widget-subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" required="">
                                <button class="submit"><i class="flaticon-opened"></i></button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--End Footer-->

    <!--Start Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="footer-bottom_content_box text-center">
                <div class="copyright-text">
                    <p>&copy; 2022 <a href="#">LoveIcon</a> Charity Theme. All rights reserved.</p>
                </div>
                <div class="footer-social-link">
                    <ul class="social-links-style1">
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
    <!--End Footer Bottom-->
</footer>
<!--End footer area-->




<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>

</div>
