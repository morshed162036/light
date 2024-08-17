@extends('frontend.layouts.main')
@section('content')
<header class="event_section_banner" style="background-image: url({{asset('frontend')}}/assets/images/event/slider.jpg);">
    <div class="event_overlay_text">
        <h2>How to apply</h2>
    </div>
</header>

<!-- apply section start -->
<section class="apply_section_start">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="download_form_lft">
                    <h3>Download Form</h3>
                    <p>Download form & submit at our office</p>
                    <div class="download_button">
                        <a class="cmn_btn_hov"><i class="fa-solid fa-download"></i>Download Form</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="download_form_right">
                    <h3>Online Method</h3>
                    <p>Click "Apply Now" button to apply online</p>
                    <div class="download_button">
                        <a class="cmn_btn_hov"><i class="fa-solid fa-arrow-pointer"></i>Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="online_payment_step">
                <div class="singel_line">
                    <p>Please download the form and go through the process below</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="online_payment_info_box">
                            <div class="step_count">
                                <h3>1</h3>
                            </div>
                            <div class="online_payment_info">
                                <h2>Fillup Admission Form</h2>
                                <ol>
                                    <li>
                                        <p>Admission Form for every applicant requires to be collected to begin the
                                            Admission process.</p>
                                    </li>
                                    <li>
                                        <p>Admission Form can be collected on payment of an application fee of BDT
                                            500 (BDT Five Hundred Only) from Admissions Office directly or you may
                                            apply online.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="online_payment_info_box">
                            <div class="step_count">
                                <h3>2</h3>
                            </div>
                            <div class="online_payment_info">
                                <h2>Submit The Form</h2>
                                <ol>
                                    <li>
                                        <p>Applicant should fill in the admission form completely, leaving no fields
                                            blank on the form.</p>
                                    </li>
                                    <li>
                                        <p>The completed Admission Form is to be submitted to the Admissions Office
                                            or directly Online.</p>
                                    </li>
                                    <li>
                                        <p>Please attach all required documents with completed Admission Form.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="online_payment_info_box">
                            <div class="step_count">
                                <h3>3</h3>
                            </div>
                            <div class="online_payment_info">
                                <h2>Admission Assessment</h2>
                                <ol>
                                    <li>
                                        <p>An Admission Assessment will be conducted for all applicants on receiving
                                            complete Admission applications.</p>
                                    </li>
                                    <li>
                                        <p>Assessments will be Oral for Playgroup and Nursery.</p>
                                    </li>
                                    <li>
                                        <p>Assessments may be Oral and/or Written for all Admission applicants.</p>
                                    </li>
                                    <li>
                                        <p>Assessments may be conducted in Admissions Office in person or via Online
                                            Assessment System, which may be live, or through Video Conferencing.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="online_payment_info_box">
                            <div class="step_count">
                                <h3>4</h3>
                            </div>
                            <div class="online_payment_info">
                                <h2>Assessment Result & Gather Necessary Documents</h2>
                                <ol>
                                    <li>
                                        <p>If Admission Assessment results are positive, based on Oral and Written
                                            processes, applicant will be informed and requested to complete
                                            Admission Process.</p>
                                    </li>
                                    <li>
                                        <p>Remaining documentation submissions must be completed at this point.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="online_payment_info_box">
                            <div class="step_count">
                                <h3>5</h3>
                            </div>
                            <div class="online_payment_info">
                                <h2>Payment Process</h2>
                                <p>Admission Fees can be paid via multiple modes of payment such as as:</p>
                                <ol>
                                    <li>
                                        <p>Online Payment Gateway</p>
                                    </li>
                                    <li>
                                        <p>Online Banking</p>
                                    </li>
                                    <li>
                                        <p>bKash</p>
                                    </li>
                                    <li>
                                        <p>Cash transactions at the Admissions Office</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="online_payment_info_box">
                            <div class="step_count">
                                <h3>6</h3>
                            </div>
                            <div class="online_payment_info">
                                <h2>Addmission</h2>
                                <ol>
                                    <li>
                                        <p>Admissions will be confirmed based on seat capacity and availability.</p>
                                    </li>
                                    <li>
                                        <p>School decisions regarding Admissions will be deemed final.</p>
                                    </li>
                                    <li>
                                        <p>Admission process should be completed within 10 working days of receiving
                                            Admission Confirmation.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- apply  section end -->

<section class="applay_section_process">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="applay_section_process_lft">
                    <div class="payment_procedure">
                        <h3>payment_procedure</h3>
                        <p>In case of Online Payments or bKash and Nagad payment, please remember to forward a copy
                            or image of your payment receipt via email to info@Lighthouse.com.bd and include Student
                            ID, Class and Parents’ contact information.</p>
                    </div>
                    <div class="payment_procedure_step">
                        <ul>
                            <li>
                                <div class="acount_information">
                                    <div class="account_info_icon">
                                        <span><i class="fa-regular fa-circle-dot"></i></span>
                                    </div>
                                    <div class="account_info_content">
                                        <p>Account Name:<span class="acount_info">Lighthouse International
                                                School</span></p>
                                        <p>Account No:<span class="acount_info">0015 11100007641</span></p>
                                        <p>Bank:<span class="acount_info">Southeast Bank Ltd.</span></p>
                                        <p>Branch:<span class="acount_info">Kawran Bazar</span></p>
                                        <div class="cmn_acc_inf">
                                            <p>Online Banking Method</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="acount_information">
                                    <div class="account_info_icon">
                                        <span><i class="fa-regular fa-circle-dot"></i></span>
                                    </div>
                                    <div class="account_info_content">
                                        <p>Account Name:<span class="acount_info">Lighthouse International
                                                School</span></p>
                                        <p>Account No:<span class="acount_info">0015 11100007641</span></p>
                                        <p>Bank:<span class="acount_info">Southeast Bank Ltd.</span></p>
                                        <p>Branch:<span class="acount_info">Kawran Bazar</span></p>
                                        <div class="cmn_acc_inf">
                                            <p>Online Banking Method</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="acount_information">
                                    <div class="account_info_icon">
                                        <span><i class="fa-regular fa-circle-dot"></i></span>
                                    </div>
                                    <div class="account_info_content">
                                        <p>Account Name:<span class="acount_info">Lighthouse International
                                                School</span></p>
                                        <p>Account No:<span class="acount_info">0015 11100007641</span></p>
                                        <p>Bank:<span class="acount_info">Southeast Bank Ltd.</span></p>
                                        <p>Branch:<span class="acount_info">Kawran Bazar</span></p>
                                        <div class="cmn_acc_inf">
                                            <p>Online Banking Method</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="applay_section_process_right">
                    <div class="apply_sec_common_head">
                        <h3>Admission Office Address</h3>
                    </div>
                    <div class="addmission_office_address">
                        <p>Office Phone No: <span class="acount_info">48812164, 48812165, +8801322547575</span></p>
                        <p>Email: <span class="acount_info">admission@Lighthouse.edu.bd</span></p>
                        <div class="office_address_cmn_pera">
                            <p>Address : House no. 06, Road no. 24, Gulshan 1, Dhaka-1212, Bangladesh</p>
                        </div>
                    </div>
                    <div class="apply_sec_title_pera">
                        <div class="apply_sec_common_head">
                            <h3>Where to submit necessary documents?</h3>
                        </div>
                        <div class="addmission_office_cmn_pera">
                            <p>Documents not submitted through the online method can be mailed to</p>
                        </div>
                    </div>
                    <div class="apply_sec_title_pera">
                        <div class="apply_sec_common_head">
                            <h3>Lighthouse International School</h3>
                        </div>
                        <div class="addmission_office_cmn_pera">
                            <p>House no. 06, Road no. 24, Gulshan 1,<br>
                                Dhaka-1212, Bangladesh

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
