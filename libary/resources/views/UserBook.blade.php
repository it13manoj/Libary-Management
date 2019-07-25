
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Book Lists
            	<a href="{{route(md5('addBooks'))}}"><span class="btn btn-primary pull-right">Add Book</span></a></h2>
            	<table class="table" id="table_id">
            		<tr>
            			<th>#</th>
            			<th>Book Name</th>
            			<th>Book Auther</th>
                              <th>Book</th>
            			<th>Action</th>
            		</tr>
                        <tbody>
                              @foreach($records as $ft)
                              <tr>
                                    <td>{{$ft->Book_id}}</td>
                                    <td>{{$ft->Book_name}}</td>
                                    <td>{{$ft->book_auther}}</td>
                                    <td><img src="https://faxauthority.com/wp-content/uploads/2015/02/faxing-a-pdf-300x300.png" style="width:50px"></td>
                                    <td><a href="{{route(md5('ViewBook'),['key'=>base64_encode($ft->Book_id)])}}"><span class="btn btn-danger btn-sm">View</span></td>
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

