@extends('frontend.layouts.main')
@section('content')
<!-- summer camp header image start  -->
<section class="summer_camp_header_section">
        <div class="summer_camp_top">
            <img src="{{ asset('images/camps/'.$summer->image) }}" class="img-fluid w-100">
        </div>
    </section>
    <!-- summer camp header image end  -->
    <!-- summer camp body start -->
    <section class="summer_camp_body" id="summer_camp">
        {{-- <div class="container"> --}}
            {{-- <div class="summer_camp_front_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/pottery-ideas-for-beginners-1.jpg"
                                class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>1. Pottery by Clay Station</h2>
                            <p>Ceramics has unlimited life and the option to make beautiful pieces of art that are
                                sustainable, fun and creative. The course is designed and conducted by Clay Station,
                                which is an open studio for rejuvenating one’s soul. This is an opportunity for social
                                interaction, creative exploration and simple hands-on play with clay. Sign up for
                                Pottery. It is being offered for the first time at this year’s lighthouse Senior School
                                Summer Camp.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_rlt_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>2. Archery</h2>
                            <p>Archery builds focus and concentration while being a very fun activity. It is a great way
                                to socialize and strengthen self-confidence to create a goal-oriented mindset among the
                                archers. For the first time, lighthouse School Dhaka is bringing you the activity of
                                archery, and it will be conducted by a national-level archery player from the Bangladesh
                                Archery Foundation. Only this activity of Summer Camp 2024 will cost BDT6,000/-, as the
                                cost of arrows is included. Sign up for this unique activity, which is being offered for
                                the first time at this year’s Summer Camp.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/archary.jpeg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_front_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Be-Aqua-Man-scaled.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>3. Swimming</h2>
                            <p>The water is your friend. One does not have to fight with water but just share the same
                                spirit as the creatures of the water, and it will help them become at one with the
                                water. lighthouse School Dhaka’s Olympic-standard swimming pool at the Senior School
                                campus is ready for you, so you can swim countless laps on it and become the athlete
                                that you were meant to be. Our professional swimming coach is ready to make you a master
                                of swimming. Don’t miss the opportunity to cool off in our pool during this sweltering
                                summer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_rlt_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>4. Football by The Growing Up Club</h2>
                            <p>Football Activity this year will be run by The Growing Up Club which is a community for
                                children in Bangladesh to explore different activities that promote a healthy lifestyle,
                                creativity and leadership. The aim is to provide a holistic set of programs that will
                                help children live happy, healthy and confident lives, and equip them with the skills
                                needed to survive in this ever changing world. Don’t miss out on playing Football in
                                this year’s Summer Camp, if you want to be the next international football star.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Football-Hero-scaled.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_front_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Karate.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>5. Taekwondo</h2>
                            <p>Taekwondo is a martial art that originated in Korea and has since become one of the most
                                popular forms of martial arts in the world. It is a full-body workout that combines
                                cardio, strength training, and flexibility. Taekwondo is also a great way to improve
                                self-defense skills. The techniques taught in Taekwondo classes are designed to protect
                                oneself from potential attackers. Sign up for Taekwondo activity, which is back at
                                Summer Camp after a hiatus. Our highly qualified Taekwondo coach will teach you how to
                                be a master. So sign up to be a master. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_rlt_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>6. Dance by Renessus Group</h2>
                            <p>Football Activity this year will be run by The Growing Up Club which is a community for
                                children in Bangladesh to explore different activities that promote a healthy lifestyle,
                                creativity and leadership. The aim is to provide a holistic set of programs that will
                                help children live happy, healthy and confident lives, and equip them with the skills
                                needed to survive in this ever changing world. Don’t miss out on playing Football in
                                this year’s Summer Camp, if you want to be the next international football star.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/renesus-dance.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_front_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Basketball-Agiles-1.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>7. Basketball</h2>
                            <p>In 2024, lighthouse School Dhaka’s Basketball Team “The Mustangs” became the Champions in
                                both boys’ and girls’ categories in the lighthouse Inter-school Basketball Tournament,
                                while beating institutions such as Scholastica, Aga Khan Academy, International Hope
                                School Bangladesh, Rajuk College, and many others. This means lighthouse Mustangs is one
                                of the top school basketball teams in the country currently. If you want to be the next
                                Mustang, then you must sign up for Basketball in the Senior School Summer Camp.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_rlt_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>8. Cricket - Coach from CricKingdom Academy by Rohit Sharma</h2>
                            <p>This time cricket activity of lighthouse Senior School Summer Camp will be nothing you have
                                seen before. We are bringing a cricket coach from the CricKingdom Academy by Rohit
                                Sharma to coach you in such a way that basic cricketing skills get instilled within you
                                firmly. All you need to do after that is regularly practice the basics, and slowly your
                                cricket career will take off. Don’t miss out on this opportunity to get trained by a
                                professional coach from CricKingdom Academy by Rohit Sharma.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Cricket-Mania-scaled.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_front_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Don-Sumdany.jpeg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>9. Life Skills by Don Sumdany</h2>
                            <p>A very new Summer Activity is being introduced this year called Life Skills, and it will
                                be taken by celebrity trainer Don Sumdany. The participants of the activity will be
                                taught essential life skills such as public speaking, social skills, social media
                                awareness, managing emotions, money management, time management, being self-starters and
                                self-motivated, how to navigate relationships with family and friends, and many other
                                amazing life skills. Don’t miss this valuable opportunity. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="summer_camp_rlt_design">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="summer_camp_content">
                            <h2>10. Art & Craft</h2>
                            <p>Who can express life better than an artist and a craftsman? Let your imagination go wild,
                                and express your thoughts through your drawings, colourings, paintings, sketching,
                                crafting and all associated fun activities. The tools and tricks imparted by our Art and
                                Craft teachers can improve your skills as an artist who draws, sketches and paints on
                                canvas, and can make fun and aesthetic things with their hands. Join our Summer Camp and
                                express your creativity.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summer_camp_image">
                            <img src="{{asset('frontend')}}/assets/images/summer-camp/Art-Wizard-1.jpg.jpg" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div> --}}
             {!! $summer->content !!}
        {{-- </div> --}}
    </section>
    <!-- summer camp body end -->

    <!-- summer camp footer image start  -->
    <section class="summer_camp_footer_section">
        {{-- <div class="summer_camp_bottom">
            <img src="{{asset('frontend')}}/assets/images/summer-camp/summer-camp-updated.jpg.jpg" class="img-fluid w-100">
        </div> --}}
        <div class="summer_camp_btn">
            <a href="#" class="ielts_btn">Registation Here</a>
        </div>
    </section>
    <!-- summer camp footer image end  -->
@endsection
