@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
    @include('Admin.Commons.sidebar')

    @include('Admin.Commons.header')

    <!-- -------------------------------- -->

    <div class="main-content">
        <div class="container-fluid content-top-gap card">
            <div class="cards__heading">
                <h3>Origination <span></span></h3>
            </div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th colspan="2">Actiion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($Origination))
                     @foreach($Origination as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->contact}}</td>
                        <td>{{$row->email}}</td>

                        <td style="white-space:nowrap">

                          <a href="{{asset("admin/org/edit/".$row->id)}}"><span class="btn btn-info sm-btn">edit</span></a>

                            <a href="{{asset("admin/org/delete/".$row->id)}}"><span class="btn btn-danger sm-btn">delt</span></a>
                        </td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
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
