<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">X</a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="/"><img src="{{asset('assets/images/resources/logo-3.png')}}" alt="" /></a>
                        </div>
                        <div class="content-box">
                            <h4>About Us</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                labore et magna aliqua. Ut enim ad minim veniam laboris.</p>
                        </div>
                        <div class="form-inner">
                            <h4>Get a free quote</h4>
                            <form action="{{route('quotes')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message..."></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="btn-one btn-one-style2">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Submit
                                            Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <br />
                        @if (session()->has('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
