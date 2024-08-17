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
    a label {
        cursor: pointer;
    }

</style>
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">About Us Section</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Galleries Section
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
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Apply online List</h5>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <!-- <li class="ml-2"><a href="{{ route('adminGallery') }}" class="btn btn-primary">+ Create</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>student Photo</th>
                                            <th>student name</th>
                                            <th>Birth certificate</th>
                                            <th>Father name</th>
                                            <th>Mother Name</th>
                                            <th>date of birth</th>
                                            <th>Interested To admit</th>
                                            <th>Nationality</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Present Address</th>
                                            <th>Previous Institute</th>
                                            <th>Payment</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($studens)
                                        @foreach ($studens as $student)
                                        <tr>
                                            <td class="text-bold-600"><img
                                                    src="{{ asset('images/student/'.$student->photo) }}" alt=""
                                                    height="150px"></td>
                                            <td>{{ $student->full_name }}</td>
                                            <td class="text-bold-600"><img
                                                    src="{{ asset('images/student/'.$student->birth_certificate) }}"
                                                    alt="" height="150px"></td>
                                            <td>{{ $student->father_name }}</td>
                                            <td>{{ $student->mother_name }}</td>
                                            <td>{{ $student->date_of_birth }}</td>
                                            <td>@if ($student->grade)
                                                {{ $student->grade->class }}
                                                @endif</td>
                                            <td>
                                                {{ $student->nationality }}
                                            </td>
                                            <td> {{ $student->gender }}</td>
                                            <td> {{ $student->religion }}</td>
                                            <td> {{ $student->present_address }}</td>
                                            <td> {{ $student->previous_institution }}</td>
                                            <td> {{ $student->payment_option}}</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        {{ 'No Data Found' }}
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>student Photo</th>
                                            <th>student name</th>
                                            <th>Birth certificate</th>
                                            <th>Father name</th>
                                            <th>Mother Name</th>
                                            <th>date of birth</th>
                                            <th>Interested To admit</th>
                                            <th>Nationality</th>
                                            <th>Gender</th>
                                            <th>Religion</th>
                                            <th>Present Address</th>
                                            <th>Previous Institute</th>
                                            <th>Payment</th>
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
<script src="{{ asset('admin_template/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
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
<script src="{{ asset('admin_template/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/components.js') }}"></script>
<script src="{{ asset('admin_template/app-assets/js/scripts/footer.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_template/app-assets/js/scripts/datatables/datatable.js') }}"></script>
<!-- END: Page JS-->
<script>
    var loadBg = function (event) {
        var output = document.getElementById('bg');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.height = '400';
    }

</script>
@endsection
