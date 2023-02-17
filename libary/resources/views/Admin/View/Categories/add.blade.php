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
                        <h3>Add Event <span></span></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.cat/add') }}" method="post">
                            @CSRF
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-style"
                                    value="" placeholder="Categories Name" required>
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
