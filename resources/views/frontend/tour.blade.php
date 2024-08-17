@extends('frontend.layouts.main')
@section('content')
<section class="custom_campus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="custom_campus_left">
                    <div class="lft_campus_heading">
                        <p>Intruducing</p>
                        <h3>School Of Life</h3>
                        <h5>Addmission Open</h5>
                    </div>
                </div>
                <div class="under_campus">
                    <div class="campus_slide">
                        <div class="slide_content">
                            <img src="{{asset('frontend')}}/assets/images/campus/campus_1.jpg" class="img-fluid" w-100>
                        </div>
                        <div class="slide_content">
                            <img src="{{asset('frontend')}}/assets/images/campus/campus2.jpg" class="img-fluid" w-100>
                        </div>
                        <div class="slide_content">
                            <img src="{{asset('frontend')}}/assets/images/campus/campus_3.jpg" class="img-fluid" w-100>
                        </div>
                        <div class="slide_content">
                            <img src="{{asset('frontend')}}/assets/images/campus/campus_4.jpg" class="img-fluid" w-100>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                {{-- @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success: </strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif --}}
                <div class="tour_from_wrapper shadow-lg p-3 mb-5 bg-body rounded">
                    <form action="{{ route('tour.store') }}" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <div class="form_inner_title">
                                <h2>Request For A Tour</h2>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email address<span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="col-12">
                            <label for="Phone" class="form-label">Phone<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="col-md-4">
                            <label for="date" class="form-label">Day you want to visite</label>
                            <input type="date" class="form-control" name="date" id="date">
                        </div>
                        <div class="col-md-2">
                            <label for="time" class="form-label">from</label>
                            <input type="time" name="from" class="form-control" id="time">
                        </div>
                        <div class="col-md-2">
                            <label for="time" class="form-label">To</label>
                            <input type="time" name="to" class="form-control" id="time">
                        </div>
                        <div class="col-md-4">
                            <label for="slot_id" class="form-label">slot</label>
                            <select id="slot_id" name="slot_id" class="form-select">
                                <option selected>Choose...</option>
                                @foreach($slots as $slot)
                                <option value="{{$slot->id}}">{{$slot->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="query" class="form-label">Your Query<span class="text-danger">*</span></label>
                            <textarea type="text" name="query" class="form-control"
                                id="query">Drop Your Massage</textarea>
                        </div>
                        <div class="col-lg-10">
                            <div class="captcha">
                                <div class="spinner">
                                    <label>
                                        <input type="checkbox" onclick="$(this).attr('disabled','disabled');">
                                        <span class="checkmark"><span>&nbsp;</span></span>
                                    </label>
                                </div>
                                <div class="text">
                                    I'm not a robot
                                </div>
                                <div class="logo">
                                    <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/" />
                                    <p>reCAPTCHA</p>
                                    <small>Privacy - Terms</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="visit_btn">
                                <button type="submit" class="btn btn-primary">Book your Visit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
