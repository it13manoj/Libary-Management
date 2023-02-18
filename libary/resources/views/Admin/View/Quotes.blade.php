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
                        <h3>User Quotes <span></span></h3>
                    </div>
                    <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                </thead>
                                <tbody>
                                    @if($Quotes)
                                        @foreach($Quotes as $row)
                                            <tr>
                                                <td>{{$row->name}}</td>

                                                <td>{{$row->email}}</td>
                                                
                                                <td>{{$row->message}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
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
