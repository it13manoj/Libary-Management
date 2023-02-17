@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
    @include('Admin.Commons.sidebar')

    @include('Admin.Commons.header')

    <!-- -------------------------------- -->

    <div class="main-content">
        <div class="container-fluid content-top-gap">


            <section class="forms">
                <div class="card card_border py-2 mb-4">
                    <div class="cards__heading">
                        <h3>Section || <span></span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.secondSection') }}" method="post" enctype="multipart/form-data">
                            @CSRF


                            <input type="hidden" name="sliderId" >
                            <div class="form-group">
                                <input type="text" name="sectionHeading1" class="form-control input-style"
                                    value="" placeholder="Main heading1">
                            </div>
                            <div class="form-group">
                                <input type="text" name="sectionHeadin2" class="form-control input-style"
                                    value="" placeholder="Main heading2">
                            </div>

                            <div class="form-group">
                                <input type="text" name="title" class="form-control input-style"
                                    value="" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <textarea name="discription" class="form-control input-style" style="height: 150px"></textarea>
                            </div>
                                <div class="form-group">
                                    <label>200X200</label>
                                    <div class="custom-file">
                                        <input type="file" name="file[]"
                                            class="custom-file-input" id="validatedCustomFile"
                                           >
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                    <br />
                                     {{-- <input type="hidden" id="{{ str_replace('.', '_', $row->images) }}" name="images[]"
                                        value="{{ $row->images }}" /> --}}
                                   {{--  <img src="{{ asset('storage/slider/' . $row->images) }}"
                                        style="margin-top: 10px;width:10%;height:100px"> --}}
                                </div>
                                <div class="form-group">
                                    <label>430x430</label>
                                    <div class="custom-file">
                                        <input type="file" name="file[]"
                                            class="custom-file-input" id="validatedCustomFile"
                                           >
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                    <br />
                                     {{-- <input type="hidden" id="{{ str_replace('.', '_', $row->images) }}" name="images[]"
                                        value="{{ $row->images }}" /> --}}
                                   {{--  <img src="{{ asset('storage/slider/' . $row->images) }}"
                                        style="margin-top: 10px;width:10%;height:100px"> --}}
                                </div>
                                <div class="form-group">
                                    <label>80x80</label>
                                    <div class="custom-file">
                                        <input type="file" name="file[]"
                                            class="custom-file-input" id="validatedCustomFile"
                                           >
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                    <br />
                                     {{-- <input type="hidden" id="{{ str_replace('.', '_', $row->images) }}" name="images[]"
                                        value="{{ $row->images }}" /> --}}
                                   {{--  <img src="{{ asset('storage/slider/' . $row->images) }}"
                                        style="margin-top: 10px;width:10%;height:100px"> --}}
                                </div>
                                <div class="form-group">
                                    <label>120x120</label>
                                    <div class="custom-file">
                                        <input type="file" name="file[]"
                                            class="custom-file-input" id="validatedCustomFile"
                                           >
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>

                                    <br />
                                     {{-- <input type="hidden" id="{{ str_replace('.', '_', $row->images) }}" name="images[]"
                                        value="{{ $row->images }}" /> --}}
                                   {{--  <img src="{{ asset('storage/slider/' . $row->images) }}"
                                        style="margin-top: 10px;width:10%;height:100px"> --}}
                                </div>

                                <hr />





                            <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
                            <span class="btn btn-info btn-style mt-4 pull-right" onclick="AddMore()">add More</span>

                        </form>


                    </div>
                </div>

            </section>

        </div>
    </div>
    <!-- ----------------------------------- -->

    @include('Admin.Commons.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
        < script >
            $(document).ready(function() {
                $("#formsShow").click(function() {
                    $("p").toggle();
                    console.log('tag', '---')
                });
            });
    </script>


@endsection
