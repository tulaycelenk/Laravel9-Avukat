<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail">
                    @auth()
                    <div class="inner-text">
                        <a href="#" class="fa fa-solid fa-border-all" >{{Auth::user()->name}}</a>
                        <a href="{{route('admin.index')}}" class="fa fa-solid fa-border-all" >Logout</a>
                        <br>
                    </div>
                    @endauth
                </div>
            </li>
            <li>
                <a href="/admin/category"><i class="fa fa-solid fa-border-all"></i>Categories</a>
            </li>
            <li>
                <a href="/admin/service"><i class=" fa fa-solid fa-briefcase"></i>Services</a>
            </li>
            <li>
                <a href="/admin/appointment"><i class="fa fa-solid fa-calendar-check"></i>Appointments</a>
            </li>
            <li>
                <a href="/admin/comment"><i class="fa fa-solid fa-comments"></i>Comments</a>
            </li>
            <li>
            <a href="/admin/user"><i class="fa fa-solid fa-comments"></i>Users</a>
            </li>
            <li>
                <a href="{{route('admin.faq.index')}}"><i class="fa fa-solid fa-question"></i>FAQs</a>
            </li>
            <li>
                <a href="{{route('admin.message.index')}}"><i class="fa fa-solid fa-envelope"></i>Messages</a>
            </li>

            <li>
                <a href="/admin/setting"><i class="fa fa-solid fa-gear"></i>Settings</a>
            </li>
            <li>
                <a href="login.html"><i class="fa fa-sign-in "></i>Login Page</a>
            </li>

            <li>
                <a href="blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
            </li>
        </ul>

    </div>

</nav>
