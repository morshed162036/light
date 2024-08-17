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
                    <div class="tour_from_wrapper shadow-lg p-3 mb-5 bg-body rounded">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <div class="form_inner_title">
                                    <h2>Request For A Tour</h2>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Name<span class="text-danger">*</span></label>
                              <input type="name" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Email address<span class="text-danger">*</span></label>
                              <input type="email" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Phone<span class="text-danger">*</span></label>
                              <input type="Phone" class="form-control" id="inputAddress">
                            </div>
                            <div class="col-md-4">
                              <label for="inputCity" class="form-label">Day you want to visite</label>
                              <input type="date" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">from</label>
                                <input type="time" class="form-control" id="inputZip">
                              </div>
                              <div class="col-md-2">
                                <label for="inputZip" class="form-label">To</label>
                                <input type="time" class="form-control" id="inputZip">
                              </div>
                            <div class="col-md-4">
                              <label for="inputState" class="form-label">slot</label>
                              <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>slot A</option>
                                <option>slot B</option>
                                <option>slot c</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputAddress" class="form-label">Your Query<span class="text-danger">*</span></label>
                                <textarea type="text" class="form-control" id="inputAddress">Drop Your Massage</textarea>
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
                                        <img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/"/>
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