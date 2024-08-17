@extends('frontend.layouts.main')

@section('content') 

    <!-- Mission and vision start -->
    <section class="mission_section">
        <div class="mission_title">
            <h2>Vision, Mission & Values</h2>
        </div>
        <div class="flip_box_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="container">
                            <div class="flipcard">
                                <div class="face face-front shadow-lg p-3 mb-5 bg-body rounded">
                                    <div class="icon_image">
                                        <img src="{{asset('frontend')}}/assets/images/about/vision-02.png">
                                    </div>
                                    <p class="icon_text">vision</p>
                                </div>
                                <div class="face face-back">
                                    <div class="flip_text_wrapper">
                                        <h2>Visions</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corrupti
                                            accusantium beatae debitis ex? Optio sit molestias quae rem quaerat
                                            perferendis explicabo corrupti omnis, eum ex, inventore quis, ullam iusto!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="container">
                            <div class="flipcard">
                                <div class="face face-front shadow-lg p-3 mb-5 bg-body rounded">
                                    <div class="icon_image">
                                        <img src="{{asset('frontend')}}/assets/images/about/mission-01.png">
                                    </div>
                                    <p class="icon_text">Mission</p>
                                </div>
                                <div class="face face-back">
                                    <div class="flip_text_wrapper">
                                        <h2>Visions</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corrupti
                                            accusantium beatae debitis ex? Optio sit molestias quae rem quaerat
                                            perferendis explicabo corrupti omnis, eum ex, inventore quis, ullam iusto!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="container">
                            <div class="flipcard">
                                <div class="face face-front shadow-lg p-3 mb-5 bg-body rounded">
                                    <div class="icon_image">
                                        <img src="{{asset('frontend')}}/assets/images/about/values-04.png">
                                    </div>
                                    <p class="icon_text">Values</p>
                                </div>
                                <div class="face face-back">
                                    <div class="flip_text_wrapper">
                                        <h2>Visions</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea corrupti
                                            accusantium beatae debitis ex? Optio sit molestias quae rem quaerat
                                            perferendis explicabo corrupti omnis, eum ex, inventore quis, ullam iusto!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mission and vision end -->
@endsection