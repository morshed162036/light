@extends('frontend.layouts.main')
@section('content')
 <!-- Notices content secton start -->
 <section class="notices_section">
        <div class="container">
            <div class="principale_massage_title">
                <h2>Notices</h2>
            </div>
            <div class="row">
                @foreach ($events as $notice)
                    <div class="col-lg-4">
                        <div class="notice_box">
                            <div class="card card_custom_border mb-3">
                                <div class="card-body custom_card_body">
                                    <h5 class="card-title custom_card_title">{{ $notice->title }}</h5>
                                    <div class="card-text custom_card_text" id="notice_body">{!! $notice->content !!}</div>
                                </div>
                                <div class="card_custom_button">
                                    <a class="btn btn-primary" href="{{ route('event.details',$notice->id) }}">Read More</a>
                                </div>
                                <div class="card-footer bg-transparent card_custom_border">
                                    <div class="card_footer_content">
                                        <span><i class="fa-solid fa-calendar-days"></i>{{ date('M d, Y',strtotime($notice->date)) }}</span>
                                        <span><i class="fas fa-folder-open"></i>Notices</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4">
                    <div class="notice_box">
                        <div class="card card_custom_border mb-3">
                            <div class="card-body custom_card_body">
                                <h5 class="card-title custom_card_title">Optional Leave Tomorrow for Grades (May 15,
                                    2024,) 5-8 students</h5>
                                <p class="card-text custom_card_text">Optional Leave Tomorrow for Grades 5-8 students
                                    Dear Parents: Please note that there will be regular classes tomorrow, Wednesday,
                                    May 15 2024, for grades 5 to 8; regular revision work will also go on. Students who
                                    have pending assignment submissions will need to come to school tomorrow. However,
                                    if they want to prepare for…...</p>
                            </div>
                            <div class="card_custom_button">
                                <a class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer bg-transparent card_custom_border">
                                <div class="card_footer_content">
                                    <span><i class="fa-solid fa-calendar-days"></i>May 14, 2024</span>
                                    <span><i class="fas fa-folder-open"></i>Notices</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notice_box">
                        <div class="card card_custom_border mb-3">
                            <div class="card-body custom_card_body">
                                <h5 class="card-title custom_card_title">Optional Leave Tomorrow for Grades (May 15,
                                    2024,) 5-8 students</h5>
                                <p class="card-text custom_card_text">Optional Leave Tomorrow for Grades 5-8 students
                                    Dear Parents: Please note that there will be regular classes tomorrow, Wednesday,
                                    May 15 2024, for grades 5 to 8; regular revision work will also go on. Students who
                                    have pending assignment submissions will need to come to school tomorrow. However,
                                    if they want to prepare for…...</p>
                            </div>
                            <div class="card_custom_button">
                                <a class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer bg-transparent card_custom_border">
                                <div class="card_footer_content">
                                    <span><i class="fa-solid fa-calendar-days"></i>May 14, 2024</span>
                                    <span><i class="fas fa-folder-open"></i>Notices</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notice_box">
                        <div class="card card_custom_border mb-3">
                            <div class="card-body custom_card_body">
                                <h5 class="card-title custom_card_title">Optional Leave Tomorrow for Grades (May 15,
                                    2024,) 5-8 students</h5>
                                <p class="card-text custom_card_text">Optional Leave Tomorrow for Grades 5-8 students
                                    Dear Parents: Please note that there will be regular classes tomorrow, Wednesday,
                                    May 15 2024, for grades 5 to 8; regular revision work will also go on. Students who
                                    have pending assignment submissions will need to come to school tomorrow. However,
                                    if they want to prepare for…...</p>
                            </div>
                            <div class="card_custom_button">
                                <a class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer bg-transparent card_custom_border">
                                <div class="card_footer_content">
                                    <span><i class="fa-solid fa-calendar-days"></i>May 14, 2024</span>
                                    <span><i class="fas fa-folder-open"></i>Notices</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notice_box">
                        <div class="card card_custom_border mb-3">
                            <div class="card-body custom_card_body">
                                <h5 class="card-title custom_card_title">Optional Leave Tomorrow for Grades (May 15,
                                    2024,) 5-8 students</h5>
                                <p class="card-text custom_card_text">Optional Leave Tomorrow for Grades 5-8 students
                                    Dear Parents: Please note that there will be regular classes tomorrow, Wednesday,
                                    May 15 2024, for grades 5 to 8; regular revision work will also go on. Students who
                                    have pending assignment submissions will need to come to school tomorrow. However,
                                    if they want to prepare for…...</p>
                            </div>
                            <div class="card_custom_button">
                                <a class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer bg-transparent card_custom_border">
                                <div class="card_footer_content">
                                    <span><i class="fa-solid fa-calendar-days"></i>May 14, 2024</span>
                                    <span><i class="fas fa-folder-open"></i>Notices</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="notice_box">
                        <div class="card card_custom_border mb-3">
                            <div class="card-body custom_card_body">
                                <h5 class="card-title custom_card_title">Optional Leave Tomorrow for Grades (May 15,
                                    2024,) 5-8 students</h5>
                                <p class="card-text custom_card_text">Optional Leave Tomorrow for Grades 5-8 students
                                    Dear Parents: Please note that there will be regular classes tomorrow, Wednesday,
                                    May 15 2024, for grades 5 to 8; regular revision work will also go on. Students who
                                    have pending assignment submissions will need to come to school tomorrow. However,
                                    if they want to prepare for…...</p>
                            </div>
                            <div class="card_custom_button">
                                <a class="btn btn-primary">Read More</a>
                            </div>
                            <div class="card-footer bg-transparent card_custom_border">
                                <div class="card_footer_content">
                                    <span><i class="fa-solid fa-calendar-days"></i>May 14, 2024</span>
                                    <span><i class="fas fa-folder-open"></i>Notices</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Notices content secton End -->

    <!-- pagination start -->
    <section class="custom_pagination">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!---- paginat end -- -->
@endsection
