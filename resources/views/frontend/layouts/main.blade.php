@include('frontend.layouts.header')
<body>
    @include('frontend.layouts.navbar')
    <!-- offcanvas toggle start -->
    @include('frontend.layouts.offcanvas')
    <!-- offcanvas toggle End -->
    @yield('content')
    <!-- Exam reminder start -->
    
    <!-- exam reminder end -->
    @include('frontend.layouts.reminder')
    <!-- footer section start -->
    @include('frontend.layouts.footer')