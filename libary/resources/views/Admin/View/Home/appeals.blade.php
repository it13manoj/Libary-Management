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
                        <h3>appeals <span></span></h3>
                        <a href="{{asset('admin/appeals')}}" class="btn btn-danger sm-btn pull-right">Add</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.appeals') }}" method="post" enctype="multipart/form-data">
                            @CSRF

                            <div class="form-group">
                                <input type="text" name="sectionHeading1" class="form-control input-style"
                                    value="{{$appealsHead->heading2}}" placeholder="Main heading1">
                            </div>
                            <div class="form-group">
                                <input type="text" name="sectionHeadin2" class="form-control input-style"
                                    value="{{$appealsHead->heading3}}" placeholder="Main heading2">
                            </div>
                            <input type="hidden" name="id" value="{{$appeals->id}}">
                            <div class="form-group">
                                <select class="form-control input-style" name="title" placeholder="Main heading1">
                                    <option  value="">Select Categories</option>
                                    @foreach($cat as $row)
                                            <option value="{{$row->id}}" {{($appeals->title == $row->id) ? "selected" :""}}>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                                <div class="form-group">
                                    <textarea name="discription" class="form-control input-style" style="height: 150px">{{$appeals->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input"
                                            id="validatedCustomFile"
                                            onchange="remove('1')"
                                            >
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                    <br />
                                    <input type="hidden" id="1" name="images[]"
                                        value="{{ $appeals->images }}" />
                                    <img src="{{ asset('storage/' . $appeals->images) }}"
                                        style="margin-top: 10px;width:10%;height:100px">
                                </div>

                                <hr />

                            <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>

                        </form>


                    </div>
                </div>

            </section>

            <section class="forms">
                <div class="card card_border py-2 mb-4">
                    <div class="cards__heading">
                        <h3>Appeals & Donations <span></span></h3>
                            <table class="table">
                                <thead>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>images</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @if($appealslist)
                                    @foreach($appealslist as $key=>$row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$row->categories->name}}</td>
                                        <td><img src="{{asset('storage/'.$row->images)}}"  style="width: 5rem"/></td>
                                        <td>
                                            <a href="{{asset('admin/appeals/edit/'.$row->id)}}" class="btn btn-info sm-btn">Edit</a>
                                            <a href="{{asset('admin/appeals/delete/'.$row->id)}}" class="btn btn-danger sm-btn">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                    </div></div></section>

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

    <script>
        function remove(id) {
            console.log();
            $('#' + id.replace('.', "_")).remove();
        }
    </script>
@endsection
