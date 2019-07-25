
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Add User
            	<a href="{{route(md5('UserList'))}}"><span class="btn btn-primary pull-right">Back</span></a></h2>
            		@if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
<form action="{{route(md5('SaveUsers'))}}" method="post">
	  @csrf
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<div class="form-group">
        			<label>Name</label>
        			<input type="text" name="Name" id="Name" class="form-control" PlaceHolder="Enter Name" required>
        		</div>
        	</div>
        </div>

        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label>Contact</label>
              <input type="text" name="contact" id="contact" class="form-control" PlaceHolder="Enter Contact Number" required>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label>Select Class</label>
              <select name="ClassGet" id="ClassGet" class="form-control" required></select>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" PlaceHolder="Enter Email" required>
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
<script type="text/javascript">
$(document).ready(function(){
  var ClassOption='';
  ClassOption +='<option value="">Select Clas</option>';
  const data={
    _token:"{{csrf_token()}}"
  }
  $.post('{{route(md5("GetClass"))}}',data,function(msg){
    for(var i=0;i<msg.length;i++){
      ClassOption +='<option value="'+msg[i].class_id+'">'+msg[i].class_name+'</option>';
    }
    $('#ClassGet').html(ClassOption);
  });
});
</script>
@endsection

