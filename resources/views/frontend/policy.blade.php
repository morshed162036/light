@extends('frontend.layouts.main')
@section('content')
<!-- Fees Banner section start  -->
<section class="fees_banner"
    style="background-image: url({{asset('images/policy/'.$policy->image)}}"></section>
<!-- Fees Banner section End -->

<!-- fees content start -->
<section class="fees_content">
    <div class="container">
        <div class="principale_massage_title">
            <h2>{{ $policy->title }}</h2>
        </div>
        <div class="row">
            {!! $policy->content !!}
            {{-- <div class="curriculam_bottom_pera">
                <p>A new and exciting opportunity, titled “Glenstar Scholarship,” has been opened for Grades 3-8
                    students starting from 2024-25.
                </p>
            </div>
            <div class="curriculam_bottom_pera">
                <p>“lighthouse Scholarship” is for students in Grades 3-8. The Top three students from Grades 3-7 will
                    be awarded up to 75% scholarship on their tuition fees in the subsequent academic session. Grade 8
                    students must take the scholarship test to get the scholarship in Grade 9.
                </p>
            </div>
            <div class="curriculam_bottom_pera">
                <p>To qualify for the GlenStar Scholarship, students must fulfil the Academic Criteria:

                    – Score a minimum of 90% on average in mid-term and final-term examinations
                    – Maintain a minimum of 90% attendance throughout the academic year
                    – Submit all assignments with a 100% submission rate
                    – Demonstrate good conduct and avoid any incidents of misconduct
                    – Parents must attend all Parents-Teachers Meetings in the academic session
                </p>

                <div class="curriculam_bottom_pera">
                    <p>In case of a tie, the scholarship will be offered while choosing the top three, based on the
                        highest points scored on Additional Criteria.</p>
                </div>
                <div class="curriculam_bottom_pera">
                    <p>Students can earn points in the Additional Criteria based on their achievements in co-curricular
                        and sports contests:</p>
                </div>
                <div class="curriculam_bottom_pera">
                    <p>– School level contests (top three positions) or School Olympiads (within top 25) – 1 point
                        – Regional/District/Interschool level contests (top three positions) or Olympiads at
                        regional/district level (within top 50) – 2 points
                        – National level contests (top 10) or Olympiads at national level (within top 100) – 4 points
                        – International level contests (top 10) or Olympiads at international level (within top 200) – 6
                        points
                        – Voluntary activities at any level – 2 points</p>

                </div>
                <div class="curriculam_bottom_pera">
                    <p>Final Merit List:
                        The scholarship committee will compile the list of qualifying students in June. The final merit
                        list will be announced in mid-August. If you need any clarifications, please write to
                        principal@dpsstsdhaka.org

                        Best of luck to your children! We hope they can become lighthouse!</p>
                </div>
            </div> --}}
        </div>
</section>
{{-- <section class="policy_cmn_image">
    <img src="{{asset('frontend')}}/assets/images/policy/scholarship.jpg" class="img-fluid w-100">
</section>

<section class="fees_content">
    <div class="container">
        <div class="row">
            <div class="curriculam_bottom_pera">
                <p>A new and exciting opportunity, titled “Glenstar Scholarship,” has been opened for Grades 3-8
                    students starting from 2024-25.
                </p>
            </div>
            <div class="curriculam_bottom_pera">
                <p>“lighthouse Scholarship” is for students in Grades 3-8. The Top three students from Grades 3-7 will
                    be awarded up to 75% scholarship on their tuition fees in the subsequent academic session. Grade 8
                    students must take the scholarship test to get the scholarship in Grade 9.
                </p>
            </div>
            <div class="curriculam_bottom_pera">
                <p>To qualify for the GlenStar Scholarship, students must fulfil the Academic Criteria:

                    – Score a minimum of 90% on average in mid-term and final-term examinations
                    – Maintain a minimum of 90% attendance throughout the academic year
                    – Submit all assignments with a 100% submission rate
                    – Demonstrate good conduct and avoid any incidents of misconduct
                    – Parents must attend all Parents-Teachers Meetings in the academic session
                </p>

                <div class="curriculam_bottom_pera">
                    <p>In case of a tie, the scholarship will be offered while choosing the top three, based on the
                        highest points scored on Additional Criteria.</p>
                </div>
                <div class="curriculam_bottom_pera">
                    <p>Students can earn points in the Additional Criteria based on their achievements in co-curricular
                        and sports contests:</p>
                </div>
                <div class="curriculam_bottom_pera">
                    <p>– School level contests (top three positions) or School Olympiads (within top 25) – 1 point
                        – Regional/District/Interschool level contests (top three positions) or Olympiads at
                        regional/district level (within top 50) – 2 points
                        – National level contests (top 10) or Olympiads at national level (within top 100) – 4 points
                        – International level contests (top 10) or Olympiads at international level (within top 200) – 6
                        points
                        – Voluntary activities at any level – 2 points</p>

                </div>
                <div class="curriculam_bottom_pera">
                    <p>Final Merit List:
                        The scholarship committee will compile the list of qualifying students in June. The final merit
                        list will be announced in mid-August. If you need any clarifications, please write to
                        principal@dpsstsdhaka.org

                        Best of luck to your children! We hope they can become lighthouse!</p>
                </div>
            </div>
        </div>
</section>
<!-- fess content end -->
<section class="policy_cmn_image">
    <img src="{{asset('frontend')}}/assets/images/policy/glenstar.jpg" class="img-fluid w-100">
</section>

<section class="fees_content">
    <div class="container">
        <div class="row">
            <div class="curriculam_bottom_pera">
                <p>A new and exciting opportunity, titled “Glenstar Scholarship,” has been opened for Grades 3-8
                    students starting from 2024-25.
                </p>
            </div>
            <div class="curriculam_bottom_pera">
                <p>“lighthouse Scholarship” is for students in Grades 3-8. The Top three students from Grades 3-7 will
                    be awarded up to 75% scholarship on their tuition fees in the subsequent academic session. Grade 8
                    students must take the scholarship test to get the scholarship in Grade 9.
                </p>
            </div>
            <div class="curriculam_bottom_pera">
                <p>To qualify for the GlenStar Scholarship, students must fulfil the Academic Criteria:

                    – Score a minimum of 90% on average in mid-term and final-term examinations
                    – Maintain a minimum of 90% attendance throughout the academic year
                    – Submit all assignments with a 100% submission rate
                    – Demonstrate good conduct and avoid any incidents of misconduct
                    – Parents must attend all Parents-Teachers Meetings in the academic session
                </p>

                <div class="curriculam_bottom_pera">
                    <p>In case of a tie, the scholarship will be offered while choosing the top three, based on the
                        highest points scored on Additional Criteria.</p>
                </div>
                <div class="curriculam_bottom_pera">
                    <p>Students can earn points in the Additional Criteria based on their achievements in co-curricular
                        and sports contests:</p>
                </div>
                <div class="curriculam_bottom_pera">
                    <p>– School level contests (top three positions) or School Olympiads (within top 25) – 1 point
                        – Regional/District/Interschool level contests (top three positions) or Olympiads at
                        regional/district level (within top 50) – 2 points
                        – National level contests (top 10) or Olympiads at national level (within top 100) – 4 points
                        – International level contests (top 10) or Olympiads at international level (within top 200) – 6
                        points
                        – Voluntary activities at any level – 2 points</p>

                </div>
                <div class="curriculam_bottom_pera">
                    <p>Final Merit List:
                        The scholarship committee will compile the list of qualifying students in June. The final merit
                        list will be announced in mid-August. If you need any clarifications, please write to
                        principal@dpsstsdhaka.org

                        Best of luck to your children! We hope they can become lighthouse!</p>
                </div>
            </div>
        </div>
</section>
<!-- fess content end -->
<section class="policy_cmn_image">
    <img src="{{asset('frontend')}}/assets/images/policy/meritbased.jpg" class="img-fluid w-100">
</section> --}}
@endsection
