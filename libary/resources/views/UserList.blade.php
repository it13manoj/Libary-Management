
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Users
            	<a href="{{route(md5('addUsers'))}}"><span class="btn btn-primary pull-right">Add Users</span></a></h2>
            	<table class="table" id="table_id">
            		<tr>
            			<th>#</th>
            			<th>Name</th>
            			<th>Contact</th>
            			<th>Email</th>
            			<th>Class</th>
            			<th>Status</th>
            		</tr>
            		<tbody>
            			@foreach($records as $ft) 
                              <tr>
                                    <td>{{$ft->id}}</td>
                                    <td>{{$ft->name}}</td>
                                    <td>{{$ft->contact}}</td>
                                    <td>{{$ft->email}}</td>
                                    <td>{{$ft->class_name}}</td>
                                    <td><span class="btn btn-danger btn-sm">view</span></td>
                              </tr>
                              @endforeach
            		</tbody>
            	</table>
            
        </div>
   
</div>
<style type="text/css">
table{
	text-align: center !important;
}
th{
	text-align: center !important;
}
</style>
@endsection

