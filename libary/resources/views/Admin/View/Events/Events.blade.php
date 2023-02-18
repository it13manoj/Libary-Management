@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
    @include('Admin.Commons.sidebar')

    @include('Admin.Commons.header')

    <!-- -------------------------------- -->

    <div class="main-content">
        <div class="container-fluid content-top-gap card">
            <div class="cards__heading">
                <h3>Events <span></span></h3>
            </div>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Categories</th>
                        <th>Organization</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th colspan="2">Actiion</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($events))
                     @foreach($events as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->Event_Date}}</td>
                        <td>{{$row->Categories->name}}</td>
                        <td>{{$row->Origination->name}}</td>
                        <td>{{$row->cost}}</td>
                        <td>{{$row->location}}</td>
                        <td>{{$row->status}}</td>
                        <td style="white-space:nowrap">
                        @if($row->status == '1')
                          <a href="{{asset("admin/cronJobs/".$row->id)}}"><span class="btn btn-info sm-btn">Pending</span></a>
                            @else
                          <span class="btn btn-success sm-btn">Done</span>

                            @endif

                            <a href="{{asset("admin/events/edit/".$row->id)}}"><span class="btn btn-danger sm-btn">Edit</span></a>
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
