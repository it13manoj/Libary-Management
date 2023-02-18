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
                        <h3>Add Contact <span></span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.addContact') }}" method="post"  enctype="multipart/form-data">
                            @CSRF

                            <input type="hidden" value="{{$contact->id}}" name="id" />
                            <div class="form-group">
                                <input type="text" name="sectionHeadin1" class="form-control input-style"
                                    value="{{$contact->heading3}}" placeholder="Main heading">
                            </div>
                            <div class="form-group">
                                <input type="text" name="sectionHeadin2" class="form-control input-style"
                                    value="{{$contact->heading2}}" placeholder="Enter Details">
                            </div>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control input-style"
                                    value="{{$contact->title}}" placeholder="Enter Details">
                            </div>

                            <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>


                        </form>


                    </div>
                </div>

            </section>
            <section class="forms">
                <div class="card card_border py-2 mb-4">
                    <div class="cards__heading">
                        <h3>Contact</h3>
                    </div>
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>D1</th>
                            <th>D2</th>
                            <th>D3</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            @if($Addcontact)
                                @foreach($Addcontact as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$row->heading2}}</td>
                                        <td>{{$row->heading3}}</td>
                                        <td>{{$row->title}}</td>
                                        <td><a href="{{asset('admin/addContact/edit/'.$row->id)}}" class="btn btn-info sm-bnt">Edit</a></td>
                                        <td><a href="{{asset('admin/addContact/delete/'.$row->id)}}" class="btn btn-danger sm-bnt">delt</a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
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
