@extends('frontend.layouts.main')
@section('content')
<!-- Fees Banner section start  -->
<section class="lighthouse_cmn_banner"
        style="background-image: url({{asset('images/transportbook/'.$cafeteria->image)}}">
        <div class="lighthouse_cmn_overlay">
            <h2>{{ $cafeteria->title }}</h2>
        </div>
    </section>
    <!-- Fees Banner section End -->

    <!-- ligthhouse schhol cmn body start -->
    <section class="lighthouse_cmn_body">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <div class="lighthouse_cmn_left">
                    <ul>
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li><a href="{{route('transport')}}">Transport</a></li>
                        <li><a href="{{route('cafeteria')}}">Cafeteria</a></li>
                        <li><a href="{{route('book')}}">Books</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-8">
                    <div class="lighthouse_cmn_right">
                        {{-- <ul>
                            <li>
                                <p>The School has a spacious cafeteria which provides nutritious and healthy snacks, lunch and juices prepared in strictly controlled and hygienic conditions. Our highly proficient team of professionals working in the cafeteria cater safe and delicious food to the students with their highest priority. We only use the best quality ingredients from reliable suppliers.</p>
                            </li>
                        </ul> --}}
                        {!! $cafeteria->content !!}
                    </div>
                </div>
            </div>
    </section>

    <!-- ligthhouse schhol cmn body End -->
@endsection
