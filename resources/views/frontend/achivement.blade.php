@extends('frontend.layouts.main')
@section('content')
 <!-- hero section start -->
 <section class="hero_section" style="background-image: url({{asset('frontend')}}/assets/images/gallery-page/gallery_background.jpg);">
        <div class="hero_section_overlay" id="">
            <p>Few Lighthouses of Achievements</p>
        </div>
    </section>
    <!-- hero section end -->

    <!-- gallery page body start -->
    <section class="gallery_page_body">
        <div class="container">
            <div class="row">
                <!-- beradcum -->
                <div class="breadcum_gallery_page">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Lighthouse International School</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Few Achievements</li>
                        </ol>
                    </nav>
                </div>
                <!-- gallery page image -->
                <div class="gallery_page_wrapper">
                    <div class="row">
                        @foreach ($achievements as $achievement)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="achivement_wrap">
                                    <img src="{{ asset('images/achievement/'.$achievement->image) }}" class="img-fluid W-100">
                                    <div class="achivement_wrap_overlay">
                                        <p>{{ $achievement->title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="achivement_wrap">
                                <img src="{{asset('frontend')}}/assets/images/achivement/achivement_2.jpg" class="img-fluid W-100">
                                <div class="achivement_wrap_overlay">
                                    <p>Students are receiving Daily-Star Award</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="achivement_wrap">
                                <img src="{{asset('frontend')}}/assets/images/achivement/achivement_3.jpg" class="img-fluid W-100">
                                <div class="achivement_wrap_overlay">
                                    <p>Pearson Edexcel High Achiever Award Receiving Ceremony-5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="achivement_wrap">
                                <img src="{{asset('frontend')}}/assets/images/achivement/achivement_3.jpg" class="img-fluid W-100">
                                <div class="achivement_wrap_overlay">
                                    <p>World Highest Achiever in Mathematics of IPLSC Exam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="achivement_wrap">
                                <img src="{{asset('frontend')}}/assets/images/achivement/achivement_1.jpg" class="img-fluid W-100">
                                <div class="achivement_wrap_overlay">
                                    <p>World Highest Achiever in Mathematics of IPLSC Exam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="achivement_wrap">
                                <img src="{{asset('frontend')}}/assets/images/achivement/achivement_2.jpg" class="img-fluid W-100">
                                <div class="achivement_wrap_overlay">
                                    <p>Pearson Edexcel High Achiever Award Receiving Ceremony-5</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery page body End -->
@endsection
