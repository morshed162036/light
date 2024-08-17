@extends('frontend.layouts.main')
@section('content')
<!-- summer camp header image start  -->
<section class="summer_camp_header_section">
    <div class="summer_camp_top">
        <img src="{{ asset('images/camps/'.$winter->image) }}" class="img-fluid w-100">
    </div>
</section>
<!-- summer camp header image end  -->
<section class="element_spacer"></section>
<section class="summer_camp_header_section">
    <div class="summer_camp_top" id="winter_camp">
        {{-- <img src="{{ asset('images/camps/'.$winter->image) }}" class="img-fluid w-100"> --}}
        {!! $winter->content !!}
    </div>
</section>

<!-- summer camp footer image start  -->
{{-- <section class="summer_camp_footer_section">
    <div class="summer_camp_bottom">
        <img src="{{asset('frontend')}}/assets/images/winter-camp/winter-camp2.jpg" class="img-fluid w-100">
    </div>
</section> --}}
<!-- summer camp footer image end  -->

{{-- <section class="element_spacer"></section> --}}

<!-- summer camp footer image start  -->
{{-- <section class="summer_camp_footer_section">
    <div class="summer_camp_bottom">
        <img src="{{asset('frontend')}}/assets/images/winter-camp/winter_camp3.jpg" class="img-fluid w-100">
    </div>
</section> --}}
<!-- summer camp footer image end  -->
@endsection
