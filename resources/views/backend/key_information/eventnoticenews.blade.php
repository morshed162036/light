@extends('backend.layout.layout')

@section('css')
           <!-- BEGIN: Vendor CSS-->
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
           <link rel="stylesheet" type="text/css"
               href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
           <!-- END: Vendor CSS-->

           <!-- BEGIN: Theme CSS-->
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap.css') }}">
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/bootstrap-extended.css') }}">
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/colors.css') }}">
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/components.css') }}">
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/dark-layout.css') }}">
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/themes/semi-dark-layout.css') }}">
           <!-- END: Theme CSS-->

           <!-- BEGIN: Page CSS-->
           <link rel="stylesheet" type="text/css"
               href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
           <!-- END: Page CSS-->

           <!-- BEGIN: Custom CSS-->
           <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
           <!-- END: Custom CSS-->
    <style>
        .ck-editor__editable_inline{
            height: 450px;
        }
    </style>
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Key Information Section</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Sliders</a>
                        </li> --}}
                        <li class="breadcrumb-item active">Event <-> Notice <-> News <-> Announcement Section
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">

    {{-- Validation Error Message --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success: </strong>{{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif
    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <form action="@if ($event) {{ route('eventNoticeNews',$event->id) }} @else {{ route('eventNoticeNews') }} @endif" method="post" enctype="multipart/form-data"> @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Title <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" value="@if ($event) {{ old('title',$event->title) }}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Status <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <select name="status" id="" class="form-control" required>
                                                    <option @if ($event)
                                                        @if ($event->status == 'Active')
                                                            selected
                                                        @endif
                                                    @endif value="Active">Active</option>
                                                    <option @if ($event)
                                                    @if ($event->status == 'Inactive')
                                                        selected
                                                    @endif
                                                @endif value="Inctive">Inctive</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Type <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <select name="type" id="" class="form-control" required>
                                                    <option @if ($event)
                                                        @if ($event->type == 'Event')
                                                            selected
                                                        @endif
                                                    @endif value="Event">Event</option>
                                                    <option @if ($event)
                                                    @if ($event->type == 'News')
                                                        selected
                                                    @endif
                                                @endif value="News">News</option>
                                                    <option @if ($event)
                                                        @if ($event->type == 'Notice')
                                                            selected
                                                        @endif
                                                    @endif value="Notice">Notice</option>
                                                    <option @if ($event)
                                                    @if ($event->type == 'Announcement')
                                                        selected
                                                    @endif
                                                @endif value="Announcement">Announcement</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Date <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="date" class="form-control" aria-describedby="basic-Createon1" name="date" value="@if ($event){{$event->date}}@endif" required>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>Time <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="time" value="@if ($event) {{ old('time',$event->time) }}@endif">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <fieldset>
                                            <h5>URL</h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="text" class="form-control" aria-describedby="basic-Createon1" name="url" value="@if ($event) {{ old('url',$event->url) }}@endif">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <h5>Image <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" onchange="loadBg(event)">
                                            </div>
                                        </fieldset>
                                        @if ($event)
                                            @if($event->image != null)
                                                <img src="{{ asset('images/event/'.$event->image) }}" id="bg" alt="bg" width="200px" height="200px" class="mt-2 mx-1">
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <fieldset class="mt-2">
                                            <h5>Content <span class="star">*</span></h5>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                                </div>
                                                <textarea name="content"  class="form-control" id="content" cols="30" rows="10" required> @if ($event)
                                                    {{ old('content',$event->content) }}
                                                @endif</textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <button type="submit" class="btn btn-primary mt-2 btn-lg">@if ($event)
                                        Update
                                    @else
                                        Create
                                    @endif </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Event, Notice, News, Announcement List</h5>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li class="ml-2"><a href="{{ route('eventNoticeNews') }}" class="btn btn-primary">+ Create</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Date & Time</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($events)
                                            @foreach ($events as $event)
                                                <tr>
                                                    <td class="text-bold-600" ><img src="{{ asset('images/event/'.$event->image) }}" alt="" height="150px"></td>
                                                    {{-- <td>{{ $banner->first_text }}</td>--}}
                                                    <td><a href="{{ route('eventNoticeNews',$event->id) }}">{{ $event->title }}</a></td>
                                                    <td> <span>Date: </span> {{ $event->date }} <br> <span>Time: </span> {{ $event->time }}</td>
                                                    <td>{{ $event->type }}</td>
                                                    <td><span class="@if($event->status == 'Active') text-success @else text-danger @endif">{{ $event->status }}</span></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            {{ 'No Data Found' }}
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Date & Time</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

</div>
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

   <!-- BEGIN: Page Vendor JS-->
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}">
   </script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
   <script src="{{ asset('admin_template/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('admin_template/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/core/app.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/footer.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('admin_template/app-assets/js/scripts/pages/table-extended.js')}}"></script>
    <script src="{{ asset('admin_template/app-assets/js/scripts/datatables/datatable.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        var loadBg = function(event) {
            var output = document.getElementById('bg');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.height =  '400';
        }
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ),{
                ckfinder:{
                    uploadUrl:"{{ route('event.upload',['_token' => csrf_token()]) }}",
                }
            } )

            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
