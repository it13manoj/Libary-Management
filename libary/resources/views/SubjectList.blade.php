
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Subject List
            	<a href="{{route(md5('addSubject'))}}"><span class="btn btn-primary pull-right">Add Subject</span></a></h2>
            	<table class="table" id="table_id">
            		<tr>
            			<th>#</th>
            			<th>Subject</th>
            			<th>Book</th>
            			<th>Auther</th>
            			<th>Class</th>
            			<th>View</th>
            		</tr>
            		<tbody>
            			@foreach($records as $ft)
            			<tr>
            				<td>{{$ft->Subject_id}}</td>
            				<td>{{$ft->Subject_name}}</td>
            				<td>{{$ft->Book_name}}</td>
            				<td>{{$ft->book_auther}}</td>
            				<td>{{$ft->class_name}}</td>
            				 <td><a href="{{route(md5('ViewBook'),['key'=>base64_encode($ft->Book_id)])}}"><span class=""><img src="https://faxauthority.com/wp-content/uploads/2015/02/faxing-a-pdf-300x300.png" style="width:50px"></span></td>
            			</tr>
            			@endforeach
            		</tbody>
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

