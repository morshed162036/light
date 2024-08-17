@extends('frontend.layouts.main')

@section('content')
<header class="event_section_banner" style="background-image: url({{asset('frontend')}}/assets/images/event/slider.jpg);">
        <div class="event_overlay_text">
            <h2>Events</h2>
        </div>
    </header>
    <section class="event_wrapper_section">
        <div class="container">
            <div class="event_card_section">
               <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4">
                        <div class="event_card_design">
                            <div class="event_card_image">
                                <a href="{{ route('event.details',$event->id) }}">
                                    <img src="{{asset('images/event/'.$event->image)}}" class="img-fluid w-100">
                                </a>

                            </div>
                            <div class="event_card_text">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="event_text_lft">
                                            <h2>{{ date('d',strtotime($event->date)) }}</h2>
                                            <p>{{ date('M',strtotime($event->date)) }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="event_text_right">
                                            <p><a href="{{ route('event.details',$event->id) }}">{{ $event->title }}</a></p>
                                        </div>
                                        <div class="evnt_icon_text">
                                            <span><i class="fa-regular fa-clock"></i> {{ $event->time }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="col-lg-4">
                        <div class="event_card_design">
                            <div class="event_card_image">
                                <img src="{{asset('frontend')}}/assets/images/event/event_2.jpg" class="img-fluid w-100">
                            </div>
                            <div class="event_card_text">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="event_text_lft">
                                            <h2>21</h2>
                                            <p>Feb</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="event_text_right">
                                            <p>INTERNATIONAL MOTHER LANGUAGE DAY – SCHOOL CLOSURE</p>
                                        </div>
                                        <div class="evnt_icon_text">
                                            <span><i class="fa-regular fa-clock"></i> 9.00 am-12.00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event_card_design">
                            <div class="event_card_image">
                                <img src="{{asset('frontend')}}/assets/images/event/event_3.jpg" class="img-fluid w-100">
                            </div>
                            <div class="event_card_text">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="event_text_lft">
                                            <h2>21</h2>
                                            <p>Feb</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="event_text_right">
                                            <p>INTERNATIONAL MOTHER LANGUAGE DAY – SCHOOL CLOSURE</p>
                                        </div>
                                        <div class="evnt_icon_text">
                                            <span><i class="fa-regular fa-clock"></i> 9.00 am-12.00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event_card_design">
                            <div class="event_card_image">
                                <img src="{{asset('frontend')}}/assets/images/event/event_4.jpg" class="img-fluid w-100">
                            </div>
                            <div class="event_card_text">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="event_text_lft">
                                            <h2>21</h2>
                                            <p>Feb</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="event_text_right">
                                            <p>INTERNATIONAL MOTHER LANGUAGE DAY – SCHOOL CLOSURE</p>
                                        </div>
                                        <div class="evnt_icon_text">
                                            <span><i class="fa-regular fa-clock"></i> 9.00 am-12.00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event_card_design">
                            <div class="event_card_image">
                                <img src="{{asset('frontend')}}/assets/images/event/event_5.jpg" class="img-fluid w-100">
                            </div>
                            <div class="event_card_text">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="event_text_lft">
                                            <h2>21</h2>
                                            <p>Feb</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="event_text_right">
                                            <p>INTERNATIONAL MOTHER LANGUAGE DAY – SCHOOL CLOSURE</p>
                                        </div>
                                        <div class="evnt_icon_text">
                                            <span><i class="fa-regular fa-clock"></i> 9.00 am-12.00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event_card_design">
                            <div class="event_card_image">
                                <img src="{{asset('frontend')}}/assets/images/event/event_6.jpg" class="img-fluid w-100">
                            </div>
                            <div class="event_card_text">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="event_text_lft">
                                            <h2>21</h2>
                                            <p>Feb</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="event_text_right">
                                            <p>INTERNATIONAL MOTHER LANGUAGE DAY – SCHOOL CLOSURE</p>
                                        </div>
                                        <div class="evnt_icon_text">
                                            <span><i class="fa-regular fa-clock"></i> 9.00 am-12.00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
               </div>
            </div>
       </div>
    </section>
@endsection
