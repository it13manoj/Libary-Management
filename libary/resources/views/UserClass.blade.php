
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Class List
            	<a href="{{route(md5('addClass'))}}"><span class="btn btn-primary pull-right">Add Class</span></a></h2>
            	<table class="table" id="table_id">
            		<tr>
            			<th>#</th>
            			<th>Class</th>
            			<th>Status</th>
            			<th>Action</th>
            		</tr>
            		<tbody>
            			@foreach($records as $ft)
            			<tr>
            				<td>{{$ft->class_id}}</td>
            				<td>{{$ft->class_name}}</td>
            				<td>
            					@if($ft->class_status==1)
            					{{'Active'}}
            					@else
            					{{'Inactive'}}
            					@endif
            				</td>
            				<td><span class="btn btn-danger btn-sm">Edit</span></td>
            			</tr>
            		</tbody>
            			@endforeach
            	</table>
            	{{ $records->links() }}
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

