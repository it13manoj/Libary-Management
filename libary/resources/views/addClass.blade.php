
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Add Class
            	<a href="{{route(md5('UserClass'))}}"><span class="btn btn-primary pull-right">Back</span></a></h2>
            		@if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
<form action="{{route(md5('SaveClass'))}}" method="post">
	  @csrf
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<div class="form-group">
        			<label>Enter Class</label>
        			<input type="text" name="ClassName" id="ClassName" class="form-control" PlaceHolder="Enter Class" required>
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
		margin-top: 10em;
	}
</style>
@endsection

