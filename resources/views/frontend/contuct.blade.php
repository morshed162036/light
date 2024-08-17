@extends('frontend.layouts.main')

@section('content')
  <!-- hero section start -->
  <section class="hero_section" style="background-image: url({{asset('frontend')}}/assets/images/gallery-page/gallery_background.jpg);">
        <div class="hero_section_overlay contuct_overlay">
            <p>Contact | Lighthouse International school </p>
        </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- contact us section start -->
    <section class="contact_us_body">
        <div class="container">

            @foreach ($branches as $branch)
                <div class="contact_content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="address_part">
                                <div class="address_location">
                                    <h3>{{ $branch->name }}</h3>
                                    <ul>
                                        <li>
                                            <p><i class="fa-solid fa-location-arrow"></i>{{ $branch->address }}</p>
                                        </li>
                                        <li>
                                            <p><i class="fa-solid fa-envelope"></i>{{ $branch->email }}</p>
                                        </li>
                                        <li>
                                            <p><i class="fa-solid fa-phone"></i>{{ $branch->tnt }}</p>
                                        </li>
                                        <li>
                                            <p><i class="fa-solid fa-mobile"></i>{{ $branch->mobile }}</p>
                                        </li>
                                        <li>
                                            <p><i class="fa-solid fa-globe"></i>{{ $branch->url }}</p>
                                        </li>
                                        {{-- <li>
                                            <p><i class="fa-solid fa-globe"></i><a href="#">Location on google map</a></p>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="location_map">
                                <iframe
                                    src="{{ $branch->map }}"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="contact_content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="address_part">
                            <div class="address_location">
                                <h3>Uttara Branch</h3>
                                <ul>
                                    <li>
                                        <p><i class="fa-solid fa-location-arrow"></i>House # 30, Road # 19, Sector # 14,
                                            Uttara Model Town, Dhaka-1230</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-envelope"></i>info@premierschooldhaka.com</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-phone"></i>+880 9678 6666 11</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-mobile"></i>+8801612 708090</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-globe"></i>www.Lighthouse international School</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-globe"></i><a href="#">Location on google map</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="location_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.06396725783!2d90.25487754014735!3d23.780753031632905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1719984506634!5m2!1sbn!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact_content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="address_part">
                            <div class="address_location">
                                <h3>Uttara Branch</h3>
                                <ul>
                                    <li>
                                        <p><i class="fa-solid fa-location-arrow"></i>House # 30, Road # 19, Sector # 14,
                                            Uttara Model Town, Dhaka-1230</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-envelope"></i>info@premierschooldhaka.com</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-phone"></i>+880 9678 6666 11</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-mobile"></i>+8801612 708090</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-globe"></i>www.Lighthouse international School</p>
                                    </li>
                                    <li>
                                        <p><i class="fa-solid fa-globe"></i><a href="#">Location on google map</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="location_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.06396725783!2d90.25487754014735!3d23.780753031632905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1719984506634!5m2!1sbn!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- contact us section end -->
@endsection
