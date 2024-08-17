@extends('frontend.layouts.main')
@section('content')
<!-- Login_body section start -->
<section class="login_body">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card login_card shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card-body login_card_body">
                        <h5 class="card-title login_card_title">Sign In</h5>
                        <div class="login_input">
                            <div class="login_for_1 mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="PIN/Student Id">
                            </div>
                            <div class="login_for_2 mb-3">
                                <input type="password" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="password">
                            </div>
                            <div class="login_btn">
                                <a class="sign_in_btn"> Sign In</a>
                            </div>
                            <div class="defualt_text">
                                <p>Or/Sign In</p>
                            </div>
                            <div class="google_btn">
                                <a class="sign_in_google" href="#">
                                    <img src="{{asset('frontend')}}/assets/images/icon/googlesso.png" class="img-fluid">
                                </a>
                            </div>
                            <div class="login_general_text">
                                <p>Forget Your Password?<a href="#">Click Here</a></p>
                                <p>If you don't have an account?<a href="#">Register Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<!-- Login_body section end -->
@endSection
