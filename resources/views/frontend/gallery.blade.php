@extends('frontend.layouts.main')

@section('content')
<section class="hero_section" style="background-image: url({{asset('images/setting/'.$company->banner)}}">
        <div class="hero_section_overlay">
            <p>Gallery | {{ $company->name }}</p>
        </div>
    </section>
    <section class="gallery_page_body">
        <div class="container">
            <div class="row">
                <!-- beradcum -->
                <div class="breadcum_gallery_page">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
                @foreach ($tabs as $top)
                    <!-- gallery page cmn title -->
                    <div class="gallery_inner_title">
                        <h3>{{ $top->title }}</h3>
                    </div>
                    <!-- gallery page image -->
                    {{-- @if ($gallery->tab_id == $top->id) --}}
                    <div class="gallery_page_wrapper">
                        <div class="row">
                                @foreach ($galleries as $gallery)
                                    @if ($gallery->tab_id == $top->id)
                                        <div class="col-lg-4">
                                            <div class="gallery_page_singel_image">
                                                <img src="{{asset('images/gallery/'.$gallery->image)}}" class="img-fluid w-100">
                                                <div class="gallery_page_singel_image_overlay">
                                                    <p>{{ $gallery->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                    {{-- <div class="col-lg-4">
                                        <div class="gallery_page_singel_image">
                                            <img src="{{asset('frontend')}}/assets/images/gallery-page/gallery-page-img2.jpg" class="img-fluid w-100">
                                            <div class="gallery_page_singel_image_overlay">
                                                <p>Events of Breakfast with moms</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="gallery_page_singel_image">
                                            <img src="{{asset('frontend')}}/assets/images/gallery-page/gallery-page-img3.jpg" class="img-fluid w-100">
                                            <div class="gallery_page_singel_image_overlay">
                                                <p>Events of Breakfast with moms</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="gallery_page_singel_image">
                                            <img src="{{asset('frontend')}}/assets/images/gallery-page/gallery-page-img1.jpg" class="img-fluid w-100">
                                            <div class="gallery_page_singel_image_overlay">
                                                <p>Events of Breakfast with moms</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="gallery_page_singel_image">
                                            <img src="{{asset('frontend')}}/assets/images/gallery-page/gallery-page-img2.jpg" class="img-fluid w-100">
                                            <div class="gallery_page_singel_image_overlay">
                                                <p>Events of Breakfast with moms</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="gallery_page_singel_image">
                                            <img src="{{asset('frontend')}}/assets/images/gallery-page/gallery-page-img3.jpg" class="img-fluid w-100">
                                            <div class="gallery_page_singel_image_overlay">
                                                <p>Events of Breakfast with moms</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        {{-- @endif --}}


                @endforeach
            </div>
        </div>
    </section>

@endsection
