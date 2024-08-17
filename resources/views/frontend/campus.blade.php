@extends('frontend.layouts.main')

@section('content')
<section class="all_image_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="principale_massage_title">
                    <h2>Our Campus</h2>
                </div>
                <div class="mixitup_btn">
                    <div class="text-center mb-4">
                        <button class="btn  filter" data-filter="all"> All</button>
                        @foreach ($tabs as $tab)
                            <button class="btn  filter" data-filter=".{{ $tab->title }}">{{ $tab->title }}</button>
                        @endforeach
                        {{-- <button class="btn  filter" data-filter=".category-b">Classroom</button>
                        <button class="btn  filter" data-filter=".category-c">Facilities</button> --}}
                    </div>
                </div>
                <div class="mixitup_body">
                    <div class="row" id="mix-wrapper">
                        @foreach ($galleries as $campus)
                            <div class="col-lg-3 mix {{ $campus->tab->title }}">
                                <div class="mixitup_single_image">
                                    <img src="{{asset('images/campus/'.$campus->image)}}" class="img-fluid w-100">
                                    <div class="mixitup_text">
                                        <p>{{ $campus->title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-3 mix category-b">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus2.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-z">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_11.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-c">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_3.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-b">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_4.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-z">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_5.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-c">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_6.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-b">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_7.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-z">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_8.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-b">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_9.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-c">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_10.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mix category-c">
                            <div class="mixitup_single_image">
                                <img src="{{asset('frontend')}}/assets/images/campus/campus_12.jpg" class="img-fluid w-100">
                                <div class="mixitup_text">
                                    <p>Lighthouse International school</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
