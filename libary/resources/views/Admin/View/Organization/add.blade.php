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
                        <h3>Add Organization <span></span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.organization/add') }}" method="post"  enctype="multipart/form-data">
                            @CSRF
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-style"
                                    value="" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="contact" class="form-control input-style"
                                    value="" placeholder="Contact" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-style"
                                    value="" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <textarea name="dis" class="form-control input-style"
                                     required></textarea>
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
                            <div class="form-group">
                                <input type="text" name="fb" class="form-control input-style"
                                    value="" placeholder="fb" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="inst" class="form-control input-style"
                                    value="" placeholder="inst" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="tw" class="form-control input-style"
                                    value="" placeholder="tw" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="ln" class="form-control input-style"
                                    value="" placeholder="ln" required>
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
