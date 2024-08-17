<header>
    <div class="container">
        <div class="row">
            <div class="top_head_wrapper">
                <div class="top_logo">
                    <div class="school_logo">
                        <a href="{{route('home.index')}}">
                            <img src="{{asset('images/setting/'.$company->logo)}}"
                            class="img-fluid">
                        </a>

                    </div>
                </div>
                <div class="top_head_button">
                    <div class="btn_sec">
                        <a class="cmn_btn" href="{{ route('admin.login') }}">Portal login</a>
                        <a class="cmn_btn">Apply now</a>
                        <!-- <a class="cmn_btn">visit satarkul Branch <span class="arrow-btn"><i
                                    class="fa-solid fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
                <div class="top_social_icon">
                    <div class="social_icon_list">
                        <a href="{{ $company->facebook }}"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{ $company->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                        <a href="{{ $company->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="{{ $company->youtube }}"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg new_nav">
        <div class="container-fluid">
            <a class="offcanvas_btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                aria-controls="staticBackdrop">
                <i class="fa-solid fa-bars-staggered"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('about.vision')}}">Vision , Mission and
                                    Values</a></li>
                            <li><a class="dropdown-item" href="{{route('about.choose')}}">Why choose us</a></li>
                            <li><a class="dropdown-item" href="{{route('about.principle_message')}}">Principal Message
                                </a></li>
                            <li><a class="dropdown-item" href="{{route('about.team')}}">Our Team</a></li>
                            <li><a class="dropdown-item" href="{{route('curriculam')}}">curriculum</a></li>
                            <li><a class="dropdown-item" href="{{route('calender')}}">Academic Calender</a></li>
                            <li><a class="dropdown-item" href="{{route('campus')}}">campus</a></li>
                            <li><a class="dropdown-item" href="{{route('event')}}">upcoming Event</a></li>
                            <li class="without_border"><a class="dropdown-item" href="{{route('gallery')}}">gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="addmission.html" role="button" aria-expanded="false">
                            addmission
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('addmission_procedure')}}">A brief admission Procedure</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Scholarship</a></li> -->
                            <li><a class="dropdown-item" href="{{route('fees')}}">School fees</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Withdrawal Policy</a></li>
                            <li><a class="dropdown-item" href="addmission.html">Faq on Addmission</a></li> -->
                            <li><a class="dropdown-item" href="{{route('how_to_apply')}}">How to apply</a></li>
                            <li><a class="dropdown-item" href="{{route('applay_online')}}">Apply Online</a></li>
                            <li class="without_border"><a class="dropdown-item" href="{{route('online_payment')}}">Online Payment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('contuct')}}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('achivement')}}">Achievements</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">
                            Key Information
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('notice')}}">noticies</a></li>
                            <li><a class="dropdown-item" href="{{route('transport')}}">Transport</a></li>
                            <li><a class="dropdown-item" href="{{route('cafeteria')}}">cafeteria</a></li>
                            <li><a class="dropdown-item" href="{{route('book')}}">Books</a></li>
                            <li><a class="dropdown-item" href="{{route('ielts')}}">Ielts</a></li>
                            <li><a class="dropdown-item" href="{{route('summer_camp')}}">Summer Camp</a></li>
                            <li class="without_border"><a class="dropdown-item" href="{{route('winter_camp')}}">Winter Camp</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('polices')}}">Polices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('facilities')}}">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('tour_request')}}">Request For A Tour</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" aria-current="page" href="{{route('login')}}">login</a> --}}
                        {{-- <a class="nav-link" aria-current="page" href="{{route('admin.login')}}">login</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
