<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
    aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="container">
            <div class="row">
                <div class="clol-lg-12">
                    <div class="offcanvas_img">
                        <img src="{{asset('images/setting/'.$company->logo)}}" alt="SCHOOL-OF-LIFE.png"
                            class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sidebar_menu">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="{{route('home.index')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"><i
                                        class="fa fa-angle-down"></i></span>
                                <a href="#">About us</a>
                                <ul class="sub-menu collapse" style="display: none;" id="collapseExample">
                                    <li class="menu-item-has-children">
                                        <a href="{{route('about.vision')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Vishion Mission
                                            and values</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('about.choose')}}"><i class="fa-solid fa-arrow-right"></i>Why
                                            choose
                                            us</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('about.principle_message')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Principal
                                            Massage</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('about.team')}}"><i class="fa-solid fa-arrow-right"></i>Our
                                            team</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('curriculam')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Carriculam</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('calender')}}"><i class="fa-solid fa-arrow-right"></i>Academic
                                            Calnder</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('event')}}"><i class="fa-solid fa-arrow-right"></i>upcoming
                                            events</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('gallery')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Gallery</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"><i
                                        class="fa fa-angle-down"></i></span>
                                <a href="#">Addmission</a>
                                <ul class="sub-menu" style="display: none;">
                                    <li class="menu-item-has-children">
                                        <a href="{{route('addmission_procedure')}}"><i
                                                class="fa-solid fa-arrow-right"></i>A bref
                                            addmission procedure</a>
                                    </li>
                                    <!-- <li class="menu-item-has-children">
                                            <a href="#"><i class="fa-solid fa-arrow-right"></i>scholarship</a>
                                        </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="{{route('fees')}}"><i class="fa-solid fa-arrow-right"></i>school
                                            fees</a>
                                    </li>
                                    <!-- <li class="menu-item-has-children">
                                            <a href="#"><i class="fa-solid fa-arrow-right"></i>Withdrawl policy</a>
                                        </li> -->
                                    <!-- <li class="menu-item-has-children">
                                            <a href="addmission.html"><i class="fa-solid fa-arrow-right"></i>Faq and
                                                Addmission</a>
                                        </li> -->
                                    <li class="menu-item-has-children">
                                        <a href="{{route('how_to_apply')}}"><i class="fa-solid fa-arrow-right"></i>How
                                            to apply</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('applay_online')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Apply online</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('online_payment')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Online payment</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{route('contuct')}}">Contact us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('achivement')}}"> Achivement</a>
                            </li>

                            <li class="menu-item-has-children"><span class="menu-expand"><i
                                        class="fa fa-angle-down"></i></span>
                                <a href="#">key Information</a>
                                <ul class="sub-menu" style="display: none;">
                                    <li class="menu-item-has-children">
                                        <a href="{{route('notice')}}"><i class="fa-solid fa-arrow-right"></i>notices</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('transport')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Transport</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('cafeteria')}}"><i
                                                class="fa-solid fa-arrow-right"></i>Cafeteria</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('book')}}"><i class="fa-solid fa-arrow-right"></i>Books</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('ielts')}}"><i class="fa-solid fa-arrow-right"></i>Ielts</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('summer_camp')}}"><i class="fa-solid fa-arrow-right"></i>Summer
                                            Camp</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('winter_camp')}}"><i class="fa-solid fa-arrow-right"></i>Winter
                                            Camp</a>
                                    </li>
                                </ul>
                            <li class="menu-item-has-children">
                                <a href="{{route('polices')}}">Polices</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="{{route('facilities')}}">Facilities</a>
                            </li>

                            <div class="col-lg-12">
                                <div class="sidebar_btn">
                                    <a class="side_btn" href="{{route('tour_request')}}">Request for a tour</a>
                                </div>
                            </div>

                            <li class="menu-item-has-children">
                                <a href="{{route('admin.login')}}">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sidebar_btn">
                        <a class="side_btn" href="{{route('applay_online')}}">Addmission Going on</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sidebar_contact_information">
                        <ul class="contact_wrapper">
                            <li>
                                <div class="icon_number">
                                    <div class="contact_icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="contact_text">
                                        <strong>Contact number:</strong><br>
                                        <a class="contact_text_content" href="tel:{{ $company->tnt }}">{{ $company->tnt }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="icon_number">
                                    <div class="contact_icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="contact_text">
                                        <strong>Email Address:</strong><br>
                                        <a class="contact_text_content" href="mailto:{{ $company->email }}">{{ $company->email }}</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li>
                                <div class="icon_number">
                                    <div class="contact_icon">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="contact_text">
                                        <strong>Office Hours:</strong><br>
                                        <p>Sunday-Thursday 8:00Am-4:00 PmSaturday 9:00 Am-1:00 Pm</p>
                                    </div>
                                </div>
                            </li> --}}
                            <li>
                                <div class="icon_number">
                                    <div class="contact_icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="contact_text">
                                        <strong>Address:</strong><br>
                                        <p>{{ $company->address }}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
