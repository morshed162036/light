@extends('frontend.layouts.main')
@section('content')
<!-- Fees Banner section start  -->
<section class="lighthouse_cmn_banner" style="background-image: url({{asset('images/facility/'.$facility->image)}});">
    <!-- <div class="lighthouse_cmn_overlay">
            <h2>Transport</h2>
        </div> -->
</section>
<!-- Fees Banner section End -->

<!-- ligthhouse schhol contact body start -->
<section class="contuct_us_section">
    <div class="container">
        <div class="contact_branch">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="contact_branch_content">
                        <span><i class="fa-solid fa-location-arrow"></i>
                            <p>House # 30, Road # 19, Sector # 14, Uttara Model Town, Dhaka-1230</p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div> -->
        </div>
</section>

<!-- ligthhouse schhol contact body End -->

<!-- Campus details body start -->
<section class="campus_details_body">
    <div class="container">
        <div class="principale_massage_title">
            <h2>{{ ($facility->title)? $facility->title : 'Facilities' }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {!! $facility->content !!}
            </div>
        </div>
    </div>
</section>


<!-- Campus details body start -->
@endsection
