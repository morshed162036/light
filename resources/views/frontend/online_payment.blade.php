@extends('frontend.layouts.main')

@section('content')
<!-- payment content start -->

<section class="payment_content_sec">
    <div class="container">
        <div class="principale_massage_title">
            <h2>Online Payment</h2>
        </div>
        <div class="payment_maincontent">
            <div class="payment_maincontent_img">
                <img src="{{asset('frontend')}}/assets/images/payment/payment.jpg" class="img-fluid">
            </div>
            <div class="payment_content_description">
                <h4>Lighthouse international school, Online Payment</h4>
                <h5>Helpline: 01722469999, +8809612225222</h5>
                <p>Time Limit for Payment : 7:00 AM to 5:00 PM</p>
                <div class="tutorial_btn">
                    <a href="https://www.youtube.com/watch?v=BBxwW9JjHOw&t=104s" class="tutorial_shape">Tutorial</a>
                </div>

                <div class="tutorial_btn">
                    <a href="#" class="btn btn-primary pay_now">Pay Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Payment Content End -->

@endsection