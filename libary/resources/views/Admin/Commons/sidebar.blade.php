
    <section>
        <!-- sidebar menu start -->
        <div class="sidebar-menu sticky-sidebar-menu">

            <!-- logo start -->
            <div class="logo">
                <h1><a href="{{route('admin.dashboard')}}">Collective</a></h1>
            </div>


            <div class="logo-icon text-center">
                <a href="{{route('admin.dashboard')}}" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
            </div>

            <div class="sidebar-menu-inner">


                <!-- sidebar nav start -->
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
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
                            <li><a href="{{route('admin.contact')}}">Contact</a> </li>
                            <li><a href="{{route('admin.addContact')}}">Add Contact</a> </li>
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

                        <li class="active"><a href="{{route('admin.user/contact')}}"><i class="fa fa-tachometer"></i><span> Contacts</span></a>
                            <li class="active"><a href="{{route('admin.user/quotes')}}"><i class="fa fa-tachometer"></i><span> Quotes</span></a>

                    </li>
                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Organization<i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="{{route('admin.organization/add')}}">Add</a> </li>
                            <li><a href="{{route('admin.organization')}}">List</a> </li>
                        </ul>
                    </li>

                <!-- //toggle button end -->
            </div>
        </div>
