
    <section>
        <!-- sidebar menu start -->
        <div class="sidebar-menu sticky-sidebar-menu">

            <!-- logo start -->
            <div class="logo">
                <h1><a href="index.html">Collective</a></h1>
            </div>


            <div class="logo-icon text-center">
                <a href="index.html" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
            </div>

            <div class="sidebar-menu-inner">


                <!-- sidebar nav start -->
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li class="active"><a href="index.html"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
                    </li>


                    <!-- Pages -->

                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Home Page<i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="{{route('admin.slider')}}">Slider</a> </li>
                            <li><a href="{{route('admin.charity')}}">Section |</a> </li>
                            <li><a href="{{route('admin.secondSection')}}">Section ||</a> </li>
                            <li><a href="{{route('admin.appeals')}}">Section |||</a> </li>
                            <li><a href="{{route('admin.mission')}}">Section |V</a> </li>
                            <li><a href="{{route('admin.about')}}">About</a> </li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Events<i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="{{route('admin.events/add')}}">Add Event</a> </li>
                            <li><a href="{{route('admin.events')}}">Events</a> </li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Organization<i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="{{route('admin.organization/add')}}">Add</a> </li>
                            <li><a href="{{route('admin.organization')}}">List</a> </li>
                        </ul>
                    </li>
                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Categories<i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="{{route('admin.cat/add')}}">Add </a> </li>
                            <li><a href="{{route('admin.cat-list')}}">List</a> </li>
                        </ul>
                    </li>


                    <!-- -------------------------- -->
                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="carousels.html">Carousels</a> </li>
                            <li><a href="cards.html">Default cards</a> </li>
                            <li><a href="people.html">People cards</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
                    <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
                    <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
                </ul>
                <!-- //sidebar nav end -->
                <!-- toggle button start -->
                <a class="toggle-btn">
                    <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                    <i class="fa fa-angle-double-right menu-collapsed__right"></i>
                </a>
                <!-- //toggle button end -->
            </div>
        </div>
