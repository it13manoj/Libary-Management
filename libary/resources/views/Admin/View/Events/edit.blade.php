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
                        <h3>Edit Event <span></span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('admin/events/update/'.$events->id) }}" method="post"  enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group">
                                    <select class="form-control input-style" name="categorries">
                                        <option value="">Select Categories</option>
                                        @foreach($Categories as $row)
                                            <option value="{{$row->id}}" {{($row->id==$events->Categories->id) ? "selected" : ""}}>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control input-style" name="organization">
                                    <option value="">Select Organization</option>
                                    @foreach($Origination as $row)
                                         <option value="{{$row->id}}"  {{($row->id==$events->Origination->id) ? "selected" : ""}}>{{$row->name}}>{{$row->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control input-style"
                                    value="{{$events->title}}" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <input type="datetime-local" name="date" id="datepicker" class="form-control input-style"
                                    value="{{$events->Event_Date}}" placeholder="Event Date" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="location" class="form-control input-style"
                                    value="{{$events->location}}" placeholder="Location" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="cost" class="form-control input-style"
                                    value="{{$events->cost}}" placeholder="Cost" required>
                            </div>


                            <div class="form-group">
                                <textarea name="dis" id="editor" class="form-control input-style"
                                     required style="height:450px">{{$events->description}}</textarea>
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
                                <img src="{{asset('storage/'.$events->pic)}}" alt="" style="width:100%; height:150px">
                            </div>
                            <div class="form-group">
                                <input type="text" name="fb" class="form-control input-style"
                                    value="{{$events->fb}}" placeholder="fb" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="inst" class="form-control input-style"
                                    value="{{$events->inst}}" placeholder="inst" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="tw" class="form-control input-style"
                                    value="{{$events->tw}}" placeholder="tw" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="ln" class="form-control input-style"
                                    value="{{$events->ln}}" placeholder="ln" required>
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
