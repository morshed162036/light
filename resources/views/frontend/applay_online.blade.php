@extends('frontend.layouts.main')
@section('content')
<header class="event_section_banner"
    style="background-image: url({{asset('frontend')}}/assets/images/event/slider.jpg);">
    <div class="event_overlay_text">
        <h2>Apply Online</h2>
    </div>
</header>

<section class="apply_online">
    <div class="container">
        <div class="principale_massage_title">
            <h2>Online Addmission Form</h2>
        </div>
        <div class="focusable_text">
            <p>*** Please fill up all the fields with care. Any incorrect information may cause unsuccessful
                submission.</p>
        </div>
        <div class="online_addmission_form ">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                    <div class="online_addmission_form_wrapper shadow-lg  mb-5 bg-body">
                        <form action="{{route('applay.store')}}" method="post" class="row" enctype="multipart/form-data">
                            @csrf 
                            @method('post')
                            <div class="col-md-12">
                                <div class="cmn_form_title">
                                    <h5>Applying For</h5>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputState" class="form-label">Select Class <span
                                            class="text-danger">*</span></label>
                                    <select id="inputState" class="form-select" name="grade_id">
                                        <option selected>Please choose an option</option>
                                        @foreach ($grades as $grade)
                                        <option value="{{ $grade->id}}">{{ $grade->class}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cmn_form_title">
                                    <h5>Student Information's</h5>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Student's Full Name<span
                                            class="text-danger">*</span></label>
                                    <input type="name" class="form-control" id="inputEmail4"
                                        placeholder="student's full name" name="full_name">
                                </div>
                            </div>

                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputPassword4" class="form-label">Date Of Birth<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="inputPassword4" name="date_of_birth">
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputPassword4" class="form-label">Gender<span
                                            class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="exampleRadios1" value="Male" checked>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="exampleRadios1" value="Female">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="exampleRadios1" value="Other">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Nationality<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="nationality" class="form-control" id="inputAddress">
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Religion<span
                                            class="text-danger">*</span></label>
                                    <select id="inputState" class="form-select" name="religion">
                                        <option selected>Select Religions</option>
                                        <option value="Muslim">Muslim</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                        <option value="Buddhu">Buddhu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Present Address<span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control"
                                        id="inputAddress" name="present_address">Present Address</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Student's Previous Institution
                                        (if any)<span class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control"
                                        id="inputAddress" name="previous_institution">Student's Previous Institution (if any)</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Message<span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" class="form-control"
                                        id="inputAddress" name="message">Drop Your Massage</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Student Photo<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="inputAddress" name="photo" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Student's Birthcirtificate<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="inputAddress" name="birth_certificate" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cmn_form_title">
                                    <h5>Mother's Information's</h5>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Mother's Full Name<span
                                            class="text-danger">*</span></label>
                                    <input type="name" class="form-control" id="inputEmail4"
                                        placeholder="student's full name" name="mother_name" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Contact Number<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="inputEmail4"
                                        placeholder="Enter Phone Number" name="mother_contact" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Email Number<span
                                            class="text-danger">*</span></label>
                                    <input type="Email" class="form-control" id="inputEmail4" placeholder="Enter email" name="mother_email" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Occupation<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Occupation" name="mother_occupation" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Designation<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Designation" name="mother_designation" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Educational Qualification<span
                                            class="text-danger">*</span></label>
                                    <select id="inputState" class="form-select" name="mother_education">
                                        <option selected>Please choose an option</option>
                                        <option value="SSC">SSC</option>
                                        <option value="HSC">HSC</option>
                                        <option value="Graduation">Graduation</option>
                                        <option value="Post_Graduation">Post Graduation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Mother's Photo<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="inputEmail4" Name="mother_photo">
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Office Addres (if Any) <span
                                            class="text-danger">*</span></label>
                                    <textarea type="tex" class="form-control"
                                        id="inputEmail4" name="mother_office_address"> Office Addres (if Any)</textarea >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cmn_form_title">
                                    <h5>Father's Information's</h5>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Fathers's Full Name<span
                                            class="text-danger">*</span></label>
                                    <input type="name" class="form-control" id="inputEmail4"
                                        placeholder="Fathers's full name" name="father_name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Contact Number<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="inputEmail4"
                                        placeholder="Enter Phone Number" name="father_contact" required>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Email Number<span
                                            class="text-danger">*</span></label>
                                    <input type="Email" class="form-control" id="inputEmail4" placeholder="Enter email" name="father_email">
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Occupation<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Occupation" name="father_occupation">
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Designation<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Designation" name="father_designation">
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputAddress" class="form-label">Educational Qualification<span
                                            class="text-danger">*</span></label>
                                    <select id="inputState" class="form-select" name="father_education">
                                        <option selected>Please choose an option</option>
                                        <option value="SSC">SSC</option>
                                        <option value="HSC">HSC</option>
                                        <option value="Graduation">Graduation</option>
                                        <option value="Post_Graduation">Post Graduation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Fathers's Photo<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="inputEmail4" name="father_photo">
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <label for="inputEmail4" class="form-label">Office Addres (if Any) <span
                                            class="text-danger">*</span></label>
                                    <textarea type="tex" class="form-control"
                                        id="inputEmail4" name="father_office_address"> Office Addres (if Any)</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cmn_form_title">
                                    <h5>Pay Application Fee</h5>
                                </div>
                            </div>
                            <div class="col-md-6 pb-4">
                                <div class="content_padding">
                                    <label for="inputPassword4" class="form-label">Select Payment option<span
                                            class="text-danger">*</span></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_option"
                                            id="exampleRadios1" value="Pay_Now" checked>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Pay Now
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_option"
                                            id="exampleRadios1" value="Pay_Later">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Pay Later
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cmn_form_title">
                                    <h5>Confirmation</h5>
                                </div>
                            </div>
                            <div class="col-md-12 pb-4">
                                <div class="content_padding">
                                    <input class="form-check-input" type="checkbox" name="agreed_to_terms"
                                        id="exampleRadios1" value="1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        I hereby agree to the Lighthouse International School Code of Conduct, Privacy
                                        Policy and Terms of Uses.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 pb-4 text-center">
                                <button type="submit" class="btn btn-primary submit_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
