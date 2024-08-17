@extends('frontend.layouts.main')

@section('content')

<!-- banner section start -->
<section class="banner_section" style="background-image: url({{asset('frontend')}}/assets/images/banner/background.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="banner_left_container">
            @if ($herosection->top_title)
                <div class="banner_top_text">
                    <p>{{ $herosection->top_title }}</p>
                </div>
            @endif
            @if ($herosection->main_title)
                <div class="banner_middle_text">
                    <h2>{{ $herosection->main_title }}</h2>
                </div>
            @endif
            @if ($herosection->description)
                <div class="banner_paragraph">
                    <p>{{ $herosection->description }}</p>
                </div>
            @endif
            <div class="button_rating">
                <div><a class="cmn_btn_hov">{{ ($herosection->button_text)? $herosection->button_text : 'Enroll your kid' }}</a></div>
                @if ($herosection->rating)
                    <div class="banner_rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <div class="rating_text">
                        <p>{{ $herosection->rating }}</p>
                        </div>
                    </div>
                @endif
            </div>
            @if (!empty($company->phone))
                <div class="banner_phone_number">
                <div class="banner_icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="icon_number">
                    <p>{{ $company->phone }}</p>
                </div>
                </div>
            @endif
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="banner_right_side">
            <div class="image_wrapper">
                @if ($herosection->image_1)
                    <div class="up_image">
                    <img src="{{asset('images/herosection/'.$herosection->image_1)}}" class="img-fluid">
                    </div>
                @endif
                @if ($herosection->image_2)
              <div class="down_image">
                <img src="{{asset('images/herosection/'.$herosection->image_2)}}" class="img-fluid">
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner section end -->

  <!-- About us section start -->
  <section class="about_us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="about_left">
            <div class="about_left_image">
              <img src="{{($aboutus->image)? asset('images/aboutus/'.$aboutus->image): asset('frontend/assets/images/about/about_us.jpg')}}" class="img-fluid w-100">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="about_right">
            <div class="about_title">
              <h2>About Us</h2>
            </div>
            <div class="about_heading">
              <h2>{{ $aboutus->title }}</h2>
            </div>
            <div class="about_peragraph">
              {!! $aboutus->content !!}
            </div>
            <div class="aboutus_btn">
              <a class="transparent_btn" href="{{ route('about.principle_message') }}">Know more about us</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About us section end -->

  <!-- Counter section start -->
  <section class="counter_section" style="background-image: url({{asset('images/counter/'.$counter->bg)}});">
    <div class="background_overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="conter_content">
              <div class="counter_heading">
                {{-- <h3>About us</h3> --}}
                <h2>{{ $counter->title }}</h2>
                <p>{{ $counter->content }}
                  {{-- <a href="#">Read More</a> --}}
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6">
            <div class="counter_wrapper">`
              <div class="row">
                @if (!empty($counter->founded))
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="counter_sec">
                            <i class="fa-solid fa-school"></i><br>
                            <span class="countup">{{ $counter->founded }}</span> <span>+</span><br>
                            <p>Founded</p>
                        </div>
                    </div>
                @endif
                @if (!empty($counter->students))
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="counter_sec">
                            <i class="fa-solid fa-graduation-cap"></i><br>
                            <span class="countup">{{ $counter->students }}</span><span>+</span><br>
                            <p>Students</p>
                        </div>
                    </div>
                @endif
                @if (!empty($counter->teachers))
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="counter_sec">
                            <i class="fa-solid fa-person-chalkboard"></i><br>
                            <span class="countup">{{ $counter->teachers }}</span><span>+</span><br>
                            <p>Teachers</p>
                        </div>
                    </div>
                @endif
                @if (!empty($counter->staff))
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="counter_sec">
                            <i class="fa-solid fa-people-group"></i><br>
                            <span class="countup">{{ $counter->staff }}</span><span>+</span><br>
                            <p>Staff</p>
                        </div>
                    </div>
                @endif
                @if (!empty($counter->branches))
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="counter_sec">
                            <i class="fa-solid fa-network-wired"></i><br>
                            <span class="countup">{{ $counter->branches }}</span> <span>+</span><br>
                            <p>Branches</p>
                        </div>
                    </div>
                @endif
                @if (!empty($counter->campus))
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="counter_sec">
                            <i class="fa-solid fa-tents"></i><br>
                            <span class="countup">{{ $counter->campus }}</span><span>+</span><br>
                            <p>Campus</p>
                        </div>
                    </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="wrapper_text">
            <div class="row">
              <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="wrap_pera">
                  <p>{{ $counter->bellow_text }}</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="wrapbb">
                  <a href="{{ route('applay_online') }}" class="box_btn">{{ ($counter->button_text)? $counter->button_text: 'Book Now' }} <span class="arrow-btn"><i
                        class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- counter section enbd -->


  <!-- Age Specification support start -->
  <section class="age_specification">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="age_specification_top">
            <h3>Academics</h3>
            <h2>Age-specific support for every stage</h2>
          </div>
        </div>
        @foreach ($agespecifics as $agespecific)
            <div class="col-lg-4">
            <div class="age_specification_content shadow p-3 mb-5 bg-body">
                <div class="auto_height">
                </div>
                <div class="specification_content_image">
                <img src="@if ($agespecific->image)
                    {{ asset('images/agespecific/'.$agespecific->image) }}
                @endif" class="img-fluid" w-100>
                </div>
                <div class="specification_content_text">
                <h2>{{ $agespecific->title }}</h2>
                    {!! $agespecific->content !!}
                </div>
                <div class="specification_btn">
                <a class="without_style_btn">Read more <span><i class="fa-solid fa-greater-than"></i></span></a>
                </div>
            </div>
            </div>
        @endforeach
        {{-- <div class="col-lg-4">
          <div class="age_specification_content shadow p-3 mb-5 bg-body">
            <div class="auto_height">
            </div>
            <div class="specification_content_image">
              <img src="{{asset('frontend')}}/assets/images/specification/Primary.jpg" class="img-fluid" w-100>
            </div>
            <div class="specification_content_text">
              <h2>Primary School</h2>
              <p>We welcome children from 3 to 6 in the Preschool Program to participate in the classroom from Playgroup
                (Reception 1), Nursery (Reception 2) and Kindergarten (Year 1). Our children in Preschool (Early Years)
                are exposed to different areas of learning that includes communication and language, personal, social
                and emotional development, physical development, literacy, mathematics, understanding the world,
                expressive arts and design. Learning process is pursued through various fun and playful activities to
                develop the sense of spirituality and to build the foundation for academic success.</p>
            </div>
            <div class="specification_btn">
              <a class="without_style_btn">Read more <span><i class="fa-solid fa-greater-"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="age_specification_content shadow p-3 mb-5 bg-body">
            <div class="auto_height">
            </div>
            <div class="specification_content_image">
              <img src="{{asset('frontend')}}/assets/images/specification/Home-5.jpg" class="img-fluid" w-100>
            </div>
            <div class="specification_content_text">
              <h2>Middle School</h2>
              <p>We welcome children from 3 to 6 in the Preschool Program to participate in the classroom from Playgroup
                (Reception 1), Nursery (Reception 2) and Kindergarten (Year 1). Our children in Preschool (Early Years)
                are exposed to different areas of learning that includes communication and language, personal, social
                and emotional development, physical development, literacy, mathematics, understanding the world,
                expressive arts and design. Learning process is pursued through various fun and playful activities to
                develop the sense of spirituality and to build the foundation for academic success.</p>
            </div>
            <div class="specification_btn">
              <a class="without_style_btn">Read more <span><i class="fa-solid fa-greater-than"></i></span></a>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
  <!-- Age Specification support End -->

  <!-- School Timimg start -->
  <section class="school_timing_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="school_timing">
            <h2>School Timing</h2>
          </div>
          <div class="school_timing_table_wrapper">
            <div class="row">
              <div class="col-lg-12">
                {{-- <div class="school_table_content">
                  <div class="school_table_head">
                    <h2>For Early Years (Playgroup, Nursery, Kindergarten)</h2>
                  </div>
                  <div class="school_table text-center">
                    <table class="table table-bordered shadow p-3 mb-5">
                      <thead>
                        <tr>
                          <th class="td_head" scope="col">Class</th>
                          <th class="td_head" scope="col">First Shift</th>
                          <th class="td_head" scope="col">Second Shift</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Reception 1(Playgroup)</td>
                          <td>9:00 am – 11:15 am</td>
                          <td>11:30 am – 1:45 pm</td>
                        </tr>
                        <tr>
                          <td>Reception 2(Nursery)</td>
                          <td>8:15 am – 11:40 am</td>
                          <td>11:15 am – 2:30 pm</td>
                        </tr>
                        <tr>
                          <td>Year 1(Kindergarten)</td>
                          <td>8:15 am – 12:20 pm</td>
                          <td>Not applicable</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="school_table_content">
                  <div class="school_table_head">
                    <h2>For Primary Years (Grades 1-4)</h2>
                  </div>
                  <div class="school_table text-center">
                    <table class="table table-bordered shadow p-3 mb-5">
                      <thead>
                        <tr>
                          <th class="td_head" scope="col">Class</th>
                          <th class="td_head" scope="col">School Time</th>
                          <th class="td_head" scope="col">Salah Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Year 2-3(Grades 1-2)</td>
                          <td>8:15 am – 1:45 pm</td>
                          <td>1:25 pm – 1:40 pm</td>
                        </tr>
                        <tr>
                          <td>Year 4-5(Grades 3-4)</td>
                          <td>8:15 am – 2:00 pm</td>
                          <td>1:25 pm – 1:40 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="school_table_content">
                  <div class="school_table_head">
                    <h2>For Middle Years (Grades 5-6)</h2>
                  </div>
                  <div class="school_table text-center">
                    <table class="table table-bordered shadow p-3 mb-5">
                      <thead>
                        <tr>
                          <th class="td_head" scope="col">Class</th>
                          <th class="td_head" scope="col">School Time</th>
                          <th class="td_head" scope="col">Salah Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Year 6-7(Grades 5-6)</td>
                          <td>8:15 am – 2:50 pm</td>
                          <td>1:25 pm – 1:40 pm</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div> --}}
                {!! $timing->content !!}
              </div>
            </div>
            {{-- <div class="school_timing_note">
              <p><span class="text-danger">*</span>lighthouse international school holds the right to chnage the school timing as per
                requirement.</p>
            </div> --}}

          </div>
          <div class="school_timing_btn text-center">
            <a class="cmn_btn"><span class="cmn_btn_enroll">Enroll your kid</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- School Timimg end -->


  <!-- News and media start -->
  <section class="news_media">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12">
          <div class="left_news_media">
            <div class="slick-carousel">
              <div class="slider_content">
                <img src="{{asset('frontend')}}/assets/images/media/face-book-post-01.jpg" class="img-fluid w-100">
              </div>
            </div>
          </div>
          <div class="floating_blog">
            <div class="counter_heading">
              <h2>Latest updates</h2>
            </div>
          </div>
          @if ($latest_updates)
            <div class="content_list">
                <ul>
                    @foreach ($latest_updates as $latest_update)
                        <li>
                            <a href="@if ($latest_update->url)
                                            {{ $latest_update->url }}
                                    @else
                                        {{ route('event.details',$latest_update->id) }}
                                    @endif">
                            <p>{{ $latest_update->title }}</p>
                            </a>
                        </li>
                    @endforeach
                {{-- <li>
                    <a href="#">
                    <p>STS Group to introduce lighthouse international School Satarkul in Bangladesh on 21 November 2022</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p>STS Group to introduce lighthouse international School Satarkul in Bangladesh on 21 November 2022</p>
                    </a>
                </li> --}}
                </ul>
            </div>
          @endif
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="media">
            <div class="counter_heading">
              <h2>News & Media</h2>
            </div>
            @foreach ($newss as $news)
                <div class="media_image_content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="media_image">
                                <img src="{{asset('images/event/'.$news->image)}}" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="media_text">
                                <a href="{{ route('event.details',$news->id) }}">
                                <p>{{ $news->title }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="media_image_content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="media_image">
                    <img src="{{asset('frontend')}}/assets/images/media/Untitled design 1.jpg" class="img-fluid w-100">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="media_text">
                    <a href="#">
                      <p>Learning by doing: Going beyond textbooks to raise exceptional young adults.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="media_image_content">
              <div class="row">
                <div class="col-lg-4">
                  <div class="media_image">
                    <img src="{{asset('frontend')}}/assets/images/media/Untitled design 2.jpg" class="img-fluid w-100">
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="media_text">
                    <a href="#">
                      <p>Learning by doing: Going beyond textbooks to raise exceptional young adults.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="col-lg-3 col-md-8 col-sm-12">
          <div class="form_content">
            <div class="counter_heading">
              <h2>Admission Query</h2>
            </div>
            <div class="form_box  shadow p-3 mb-5">
             
    <form action="{{ route('admission_queries.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="parent_name" class="form-label">Parents/Guardians name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="parent_name" name="parent_name" required>
    </div>
    <div class="mb-3">
        <label for="student_name" class="form-label">Name Of student<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="student_name" name="student_name" required>
    </div>
    <div class="mb-3">
        <label for="student_birth" class="form-label">Student date of birth<span class="text-danger">*</span></label>
        <input type="date" class="form-control" id="student_birth" name="student_birth" required>
    </div>
    <div class="mb-3">
        <label for="grade_id" class="form-label">Select grade<span class="text-danger">*</span></label>
        <select class="form-select form-select-lg mb-3" id="grade_id" name="grade_id" required>
            <option value="">-----Select Grade----</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone number</label>
        <input type="number" class="form-control" id="phone_number" name="phone_number">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email number</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="help_query" class="form-label">How can we help?</label>
        <textarea class="form-control" id="help_query" name="help_query" placeholder="Drop your message here" style="height: 100px"></textarea>
    </div>
    <div class="from_btn">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
       

              {{-- <form action="{{route('admission_queries.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Parents/Gardians name<span
                      class="text-danger">*</span></label>
                  <input type="parents" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name Of student<span
                      class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Student date of birth<span
                      class="text-danger">*</span></label>
                  <input type="date" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">select grade<span
                      class="text-danger">*</span></label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="1">-----select grade----</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Phone number</label>
                  <input type="number" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email number</label>
                  <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">How can we help?</label>
                  <textarea class="form-control" placeholder="Drop your massage here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                </div>
                <div class="from_btn">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- news and media end -->
@endsection
