@extends('frontend.layouts.main')

@section('content') 

    
    <!-- About tab start -->
    <section class="tab_section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4"></div> -->
                <div class="col-lg-12 col-lg-offset-4 col-md-12 col-sm-12">
                    <div class="tab_button_area">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">LIS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">British Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">Islamic School</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab_content_area shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                <div class="tab_image_text_wrapper">
                                    <div class="tab_image">
                                        <img src="{{asset('frontend')}}/assets/images/logo/Light.png" class="img-fluid" style="height: 100px" id="custom_image">
                                    </div>
                                    <div class="tab_text">
                                        <h3>Why Choose lighthouse??</h3>
                                        <div class="tab_details_text">
                                            <p>At lighthouse International school we offer:</p>
                                            <div class="tab_details_order_list">
                                                <ul>
                                                    <li>
                                                        <p> 1.Superb Quality British education</p>
                                                    </li>
                                                    <li>
                                                        <p>2.Unique Islamic Schooling</p>
                                                    </li>
                                                    <li>
                                                        <p>3.Opportunity to become Hafez & Hafeza and lots more</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab_text_pera">
                                            <p>Our young talented students must be prepared with something more than
                                                bookish skills as the world we live in shrinks due to technology. They
                                                need access to the best learning resources available in order to develop
                                                into our country’s intellectual elite – the leaders who will form the
                                                country’s future destiny – in the coming years.</p>
                                        </div>
                                        <div class="tab_text_pera">
                                            <p>They receive an education at <span class="school_name">Guidance
                                                    International School</span>that reinforces their heart of awareness
                                                through our program and aims to exceed academic expectations through a
                                                completely diverse variety of extra-curricular and co-curricular events,
                                                as well as additional opportunities to cultivate a culturally and
                                                academically diverse mindset toward globalization.</p>
                                        </div>
                                        <div class="tab_text_pera">
                                            <p>When you choose Lighthouse International School, you will be confident that
                                                your child can achieve our shared objective of becoming global citizens
                                                who are mindful of their responsibilities in this life and in the
                                                afterlife while still leading a good life as they adapt their religious
                                                traditions to everyday life.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="1">
                                <div class="tab_image_text_wrapper">
                                    <div class="tab_image">
                                        <img src="{{asset('frontend')}}/assets/images/tab/tab2.jpg" class="img-fluid w-100">
                                    </div>
                                    <div class="tab_text">
                                        <h3>Superb Quality British education</h3>
                                        <div class="tab_text_pera">
                                            <p>LIS focuses on the holistic, the social, emotional, mental, physical, and
                                                cognitive development of each student. It prepares the child for life,
                                                not just for the future assessments.</p>
                                        </div>
                                        <div class="tab_text_pera">
                                            <p>At LIS, we prepare students all-round through a globally recognized
                                                curriculum of the Cambridge Pathway (Cambridge Primary, Cambridge Lower
                                                Secondary, Cambridge Upper Secondary and Cambridge Advanced) with
                                                qualification checkpoints designed to ensure a solid foundation up to
                                                Cambridge O Level and A Level qualifications.</p>
                                        </div>
                                        <div class="tab_text_pera">
                                            <p>Preparing young pupils is a challenging endeavour in itself and therefore
                                                at LIS, we ensure that our students complete all of their schooling
                                                under our tutelage and do not require any private tuition all the way up
                                                to A-Level, Alhamdulillah.</p>
                                        </div>
                                        <div class="tab_text_pera">
                                            <p>Additionally, extra-curricular and co-curricular activities at LIS are
                                                specifically designed to reflect their in-class schooling and to ensure
                                                that students stay physically active and mentally engaged with their
                                                curriculum based instructions in and out of the classroom through a
                                                variety of activities that range from sports, camping trips, field trips
                                                to subject-based Olympiads, science fairs and creativity exploring
                                                activities such as writing, reciting, art and crafts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="contact-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="2">
                                <div class="tab_image_text_wrapper">
                                    <div class="tab_image">
                                        <img src="{{asset('frontend')}}/assets/images/tab/tab1.jpg" class="img-fluid w-100">
                                    </div>
                                    <div class="tab_text">
                                        <h3>Unique Islamic Schooling</h3>
                                        <div class="tab_text_pera">
                                            <p>At LIS Islamic Education provides the Muslim children with sufficient
                                                knowledge in order to make them know and realize the purpose of their
                                                creation, responsibility, and the way they should manage worldly
                                                affairs.</p>
                                        </div>
                                        <div class="tab_details_text">
                                            <p>Islamic education curriculum includes: </p>
                                            <div class="tab_details_order_list">
                                                <ul>
                                                    <li>
                                                        <p> 1.Aqeedah and Akhlaq</p>
                                                    </li>
                                                    <li>
                                                        <p>2.Fiqh</p>
                                                    </li>
                                                    <li>
                                                        <p>3.The history of Islamic culture</p>
                                                    </li>
                                                    <li>
                                                        <p>4.The Qur’an and Hadith</p>
                                                    </li>
                                                    <li>
                                                        <p>5.The Qur’an and Hadith</p>
                                                    </li>
                                                    <li>
                                                        <p>6.Al-Quran</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- about tab end -->
@endsection