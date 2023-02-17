@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
    @include('Admin.Commons.sidebar')

    @include('Admin.Commons.header')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <!-- -------------------------------- -->

    <div class="main-content">
        <div class="container-fluid content-top-gap">


            <section class="forms">
                <div class="card card_border py-2 mb-4">
                    <div class="cards__heading">
                        <h3>Our Mission & Goals <span></span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.mission') }}" method="post"  enctype="multipart/form-data">
                            @CSRF


                            <div class="form-group">
                                <input type="text" name="sectionHeadin2" class="form-control input-style"
                                    value="" placeholder="Main heading">
                            </div>

                            <div class="form-group">
                                <input type="text" name="title" class="form-control input-style"
                                    value="" placeholder="Enter Title">
                            </div>

                            <div class="form-group">
                                <textarea name="dis" id="editor" class="form-control input-style"
                                     required style="height:450px"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="file"
                                        class="custom-file-input" id="validatedCustomFile"
                                       >
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                                <br />

                            </div>

                            <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>


                        </form>


                    </div>
                </div>

            </section>

        </div>
    </div>
    <!-- ----------------------------------- -->

    @include('Admin.Commons.footer')


    {{-- <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> --}}

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
<script>
    CKEDITOR.replace( 'editor',{height: 300,

        filebrowserUploadUrl: "{{route('admin.events/upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'    } );
</script>
@endsection
