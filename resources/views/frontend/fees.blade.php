@extends('frontend.layouts.main')

@section('content')
    <!-- Fees Banner section start  -->
    <section class="fees_banner" style="background-image: url({{asset('frontend')}}/assets/images/fees/fees_banner.jpg);"></section>
    <!-- Fees Banner section End -->

    <!-- fees content start -->
    <section class="fees_content">
        <div class="container">
            <div class="principale_massage_title">
                <h2>Fees</h2>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="fees_body_img">
                        <img src="{{asset('frontend')}}/assets/images/fees/fees_shedule_2024-25.jpg" class="img-fluid w-100">
                    </div>
                    <div class="fees_body_img">
                        <img src="{{asset('frontend')}}/assets/images/fees/fees_shedule_2023-2024.jpg" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fess content end -->
@endsection