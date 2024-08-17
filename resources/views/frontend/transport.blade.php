@extends('frontend.layouts.main')
@section('content')
<!-- Fees Banner section start  -->
<section class="lighthouse_cmn_banner"
        style="background-image: url({{asset('images/transportbook/'.$transport->image)}}">
        <div class="lighthouse_cmn_overlay">
            <h2>{{ $transport->title }}</h2>
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
                                <p>Pick-up & Drop-off Service in Uttara, Airport, Khilkhet, Baridhara, Baridhara DOHS,
                                    Bashundhara, Gulshan,
                                    Banani, Mohakhali, Mohakhali DOHS, Dhanmondi Mirpur & Mirpur DOHS.</p>
                            </li>
                            <li>
                                <p>Capacity: 500</p>
                            </li>
                            <li>
                                <p> Air-Conditioned Vehicles</p>
                            </li>
                            <li>
                                <p>CCTV Surveillance & Vehicle Trackers</p>
                            </li>
                            <li>
                                <p>Bus Attendant</p>
                            </li>
                            <li>
                                <p>First Aid & Fire Extinguisher Facility</p>
                            </li>
                            <li>
                                <p>Well Trained Drivers</p>
                            </li>
                        </ul> --}}
                        {!! $transport->content !!}
                        <h2>Transport Application Form for Students</h2>
                    </div>
                </div>
            </div>
    </section>

    <!-- ligthhouse schhol cmn body End -->
@endsection
