 
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route(md5('dashboard'))}}">Welcome To Libary</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="{{route(md5('dashboard'))}}"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="{{route(md5('UserClass')) }}"><i class="fa fa-tasks"></i> Class</a></li>
                    <li><a href="{{route(md5('UserBook')) }}"><i class="fa fa-globe"></i> Book</a></li>
                    
                    <li><a href="{{route(md5('SubjectList'))}}"><i class="fa fa-font"></i> Subject</a></li>
                    <li><a href="{{route(md5('UserList'))}}"><i class="fa fa-user"></i> Users</a></li>
                    <li><a href="#"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="#"><i class="fa fa-font"></i> Question</a></li>
                    <li><a href="#"><i class="fa fa-list-ul"></i>Online Test</a></li>
                    <li><a href="#"><i class="fa fa-table"></i >Result</a></li> 
                    <li class=""><a href="#"><i class="fa fa-list-ol"></i> SignUp</a></li>           
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
