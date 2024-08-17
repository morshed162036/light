@extends('backend.layout.layout')

@section('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_template/app-assets/vendors/css/editors/quill/quill.bubble.css')}}">
    <!-- END: Custom CSS-->
    <style>
        .ck-editor__editable_inline{
            height: 200px;
        }
    </style>
    <!-- include summernote css/js -->
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Addmission Section</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        {{-- <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Sliders</a>
                        </li> --}}
                        <li class="breadcrumb-item active">School Fees Section
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
    <section class="full-editor">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <h4 class="card-title">Full Editor</h4>
                    </div> --}}
                    <form action="{{ route('schoolFee') }}" method="post" enctype="multipart/form-data"> @csrf
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <h5>Title <span class="star">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                            </div>
                                            <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" value="{{ old('title',$fee->title) }}" required>
                                        </div>
                                    </fieldset>
                                </div>
                                {{-- <div class="col-md-6">
                                    <fieldset>
                                        <h5>Banner <span class="star">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                            </div>
                                            <input type="file" class="form-control" aria-describedby="basic-Createon1" name="image" onchange="loadBg(event)">
                                        </div>
                                    </fieldset>
                                    @if($fee->image != null)
                                        <img src="{{ asset('images/fee/'.$fee->image) }}" id="bg" alt="bg" width="450px" height="400px" class="mt-2 mx-1">
                                    @endif
                                </div> --}}
                                <div class="col-md-12 mt-2">
                                    <fieldset>
                                        <h5>Content <span class="star">*</span></h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-Createon1"><i class="bx bx-file"></i></span>
                                            </div>
                                            {{-- <input type="text" class="form-control" aria-describedby="basic-Createon1" name="title" value="{{ old('title',$fee->title) }}" required> --}}
                                            <textarea rows="10" class="form-control" name="content" id="content">{{ old('content',$fee->content) }}</textarea>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            {{-- <div class="row mt-2">
                                <div class="col-sm-12">
                                    <div id="full-wrapper">
                                        <div id="full-container">
                                            <div class="" id="editor">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <textarea rows="10" class="mb-3 d-none" name="content" id="quill-editor-area">{{ old('content',$fee->content) }}</textarea> --}}
                            <div class="col-md-2 mt-2">
                                <button type="submit" class="btn btn-primary mt-2 btn-lg">Update</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Basic Inputs end -->


</div>
@endsection

@section('js')
   <!-- BEGIN: Vendor JS-->
   <script src="{{ asset('admin_template') }}/app-assets/vendors/js/vendors.min.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
   <!-- BEGIN Vendor JS-->

   <!-- BEGIN: Page Vendor JS-->
   <script src="{{ asset('admin_template') }}/app-assets/vendors/js/editors/quill/katex.min.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/vendors/js/editors/quill/quill.min.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
   <!-- END: Page Vendor JS-->

   <!-- BEGIN: Theme JS-->
   <script src="{{ asset('admin_template') }}/app-assets/js/core/app-menu.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/js/core/app.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/js/scripts/components.js"></script>
   <script src="{{ asset('admin_template') }}/app-assets/js/scripts/footer.js"></script>
   <!-- END: Theme JS-->

   <!-- BEGIN: Page JS-->
   <script src="{{ asset('admin_template') }}/app-assets/js/scripts/editors/editor-quill.js"></script>
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
                    uploadUrl:"{{ route('fee.upload',['_token' => csrf_token()]) }}",
                }
            } )

            .catch( error => {
                console.error( error );
            } );
    </script>
    {{-- <script>
        $('#content').summernote({
            placeholder: 'content...',
            tabsize:2,
            height:300
        });
    </script> --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('quill-editor-area')) {
            var editor = new Quill('#editor',{
                // modules: {
                // toolbar: '.ql-snow',
                // }
                modules: {
                        toolbar: [
                            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                            ['blockquote', 'code-block'],
                            ['link', 'image', 'video', 'formula'],

                            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                            [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
                            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                            [{ 'direction': 'rtl' }],                         // text direction

                            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                            [{ 'font': [] }],
                            [{ 'align': [] }],

                            ['clean']
                        ]
                    },
                     theme: 'snow'
            });
            var quillEditor = document.getElementById('quill-editor-area');
            editor.on('text-change', function() {
                quillEditor.value = editor.root.innerHTML;
            });

            quillEditor.addEventListener('input', function() {
                editor.root.innerHTML = quillEditor.value;
            });
        }
    });
    </script> --}}

@endsection
