@extends('frontend.layouts.main')
@section('content')
<section class="lighthouse_cmn_banner"
        style="background-image: url({{asset('images/transportbook/'.$book->image)}}">
        <div class="lighthouse_cmn_overlay">
            <h2>{{ $book->title }}</h2>
        </div>
    </section>
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
                            <p>We use the latest textbooks prescribed by Cambridge for our students. Our Library
                                also contains a collection of 37000+ books as well as international journals and
                                local newspapers. Students will enjoy our encyclopaedic archive of Audio and Visual
                                media covering a range of subjects. We always encourage students to borrow books
                                from our vast collection of fiction and non-fiction books from both national and
                                international authors. Our entire collection is catalogued digitally so the students
                                will be able to use computer-based searching facilities to find what they are
                                looking for! Grades 1-7 also have routine-based library classes every week.</p>
                        </li>
                    </ul> --}}
                    {!! $book->content !!}
                </div>
            </div>
        </div>
</section>

<!-- ligthhouse schhol cmn body End -->
@endsection
