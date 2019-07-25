
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Add Book
            	<a href="{{route(md5('UserBook'))}}"><span class="btn btn-primary pull-right">Back</span></a></h2>
            		@if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
<form action="{{route(md5('SaveBook'))}}" method="post" enctype='multipart/form-data'>
	  @csrf
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<div class="form-group">
        			<label>Enter Book Name</label>
        			<input type="text" name="BookName" id="BookName" class="form-control" PlaceHolder="Enter Book Name" required>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<div class="form-group">
        			<label>Enter Book Auther</label>
        			<input type="text" name="Auther" id="Auther" class="form-control" PlaceHolder="Enter Book Auther" required>
        		</div>
        	</div>
        </div>

        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<div class="form-group">
        			<label>Enter Book</label>
        			<input type="file" name="file" id="file" class="form-control" PlaceHolder="Enter Class" required>
        		</div>
        	</div>
        </div>

         <div class="row">
        	<div class="col-md-4 col-md-offset-4" style="text-align:center">
        		<div class="form-group">
        			<label></label>
        			<input type="submit" class="btn btn-danger">
        		</div>
        	</div>
        </div>
   </form>
</div>
   </div>
<style type="text/css">
	form{
		margin-top: 8em;
	}
</style>
@endsection

