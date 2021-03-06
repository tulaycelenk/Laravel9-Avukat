<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Practice</a>
                    <a href="team.html" class="nav-item nav-link">Attorneys</a>
                    <a href="portfolio.html" class="nav-item nav-link">Case Studies</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu">

                            @foreach($categories as $category)
                                <a href="/category/{{ $category->id }}" class="dropdown-item">{{ $category->title }}</a>
                            @endforeach

                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    @guest
                    <a href="/loginuser"  class="nav-item nav-link">Login</a> /  <a href="/registeruser"  class="nav-item nav-link">Join</a>

                    @endguest
                    @auth()
                        <div class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" data-toggle="dropdown" >
                                <a href="#" data-toggle="dropdown">{{Auth::user()->name}}</a>
                                <div class="dropdown-menu" >
                                    <li><a href="" class="dropdown-item"><i ></i> Profil</a></li>
                                    <li><a href="{{ route('myAppointments') }}" class="dropdown-item"> Sat??n Al??nanlar</a> </li>
                                    <li><a href="" class="dropdown-item"> Sepet</a></li>
                                    <li><a href="" class="dropdown-item"> Randevu Talepleri</a></li>
                                    <li><a href="/logoutuser" class="nav-item nav-link">????k????</a></li>

                                </div>
                            </div>
                       </div>
                    @endauth
                </div>
            </div>
                <div class="ml-auto">
                    <a class="btn" href="https://htmlcodex.com/law-firm-website-template">Get Appointment</a>
                </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->

