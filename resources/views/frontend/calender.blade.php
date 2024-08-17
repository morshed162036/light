@extends('frontend.layouts.main')

@section('content')
<section class="hero_section" style="background-image: url({{asset('frontend')}}/assets/images/gallery-page/gallery_background.jpg);">
        <div class="hero_section_overlay">
            <p>Academic calender</p>
        </div>
    </section>
    <section class="academic_calender_section">
        <div class="container">
            <!-- beradcum start -->
            <div class="breadcum_gallery_page">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Lighthouse International School</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Academic Calender</li>
                    </ol>
                </nav>
            </div>
            <!-- breadcum end -->
            <div class="row">
                @foreach($academic_calenders as $academic_calender)
                <!-- calender page cmn title start-->
                <div class="gallery_inner_title">
                    <h5>Lighthouse International School</h5>
                    <h3>{{$academic_calender -> title}}</h3>
                    {{-- <h3>Academic Days And Holiday List (2023-24)</h3> --}}
                </div>
                <!-- Calender page cmn title end -->
                <div class="col-lg-8 col-md-12">
                    <div class="calender_left_side">
                        <div class="calender_leftside_content">
                            {{-- <embed
                                src="{{asset('images/academic_calender/'.$academic_calender->pdf_file)}}"
                                >
                                https://docs.google.com/viewer?url=https://premierschooldhaka.com/wp-content/uploads/2023/11/Academic-Days-and-Holiday-List_2023-24.pdf&amp;embedded=true --}}
                                <iframe src="{{asset('images/academic_calenders/'.$academic_calender->pdf_file)}}" frameborder="0" height="600px" width="100%"></iframe>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="calender_right_side">
                        <div class="calender_right_side_content">
                            <div class="admission_content_heading">
                                <h3>Addmission Contact Info</h3>
                            </div>
                            <div class="admission_content_address">
                                
                                <p>{{$company -> address}}</p>
                            </div>
                            <div class="admission_content_campus">
                                @if($branches)
                                <ul>
                                    @foreach ($branches as $branch)
                                    <li>
                                        <p>{{$branch -> name}}:<span class="custom_campus">{{$branch -> tnt}}</span></p>
                                    </li>
                                    {{-- <li>
                                        <p>Uttara Campus:<span class="custom_campus">8809678666611</span></p>
                                    </li>
                                    <li>
                                        <p>Uttara Campus:<span class="custom_campus">8809678666611</span></p>
                                    </li>
                                    <li>
                                        <p>Uttara Campus:<span class="custom_campus">8809678666611</span></p>
                                    </li> --}}
                                    
                                    @endforeach
                                    <li>
                                        <p>{{$company -> email}}</p>
                                    </li>
                                </ul>

                                @endif
                            </div>
                            <div class="addmission_content_openingHour">
                                {{-- <p>Weekdays from 8 AM to 4 PM,<br> (Saturday from 9 AM to 1 PM)</p> --}}
                            </div>
                            <div class="admission_content_social_info">
                                <h3>Social info</h3>
                                <div class="footer_icon">
                                    @if(!empty($company->facebook) )
                                    <a href="{{$company -> facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    @endif

                                    @if(!empty($company->youtube) )
                                    <a href="{{$company -> youtube}}"><i class="fa-brands fa-youtube"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="admission_content_btn">
                                <div class="wrapbb">
                                    <a href="{{route('applay_online')}}" class="box_btn">Admission form <span class="arrow-btn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection