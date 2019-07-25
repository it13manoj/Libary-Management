
@extends('layouts.app')
@section('content') 
@include('default.header')
<div class="container">
       <div id="wrapper">
            <h2>Add Subject
            	<a href="{{route(md5('SubjectList'))}}"><span class="btn btn-primary pull-right">Back</span></a></h2>
            		@if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
<form action="{{route(md5('SaveSubject'))}}" method="post">
	  @csrf
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<div class="form-group">
        			<label>Enter Subject</label>
        			<input type="text" name="SubjectName" id="SubjectName" class="form-control" PlaceHolder="Enter Subject" required>
        		</div>
        	</div>

          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label>Select Class</label>
              <select name="ClassGet" id="ClassGet" class="form-control" required></select>
            </div>
          </div>

          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
              <label>Select Book</label>
              <select name="BookGet" id="BookGet" class="form-control" required></select>
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
		margin-top: 4em;
	}
</style>
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

<script type="text/javascript">
$(document).ready(function(){
  var BooksOption='';
  BooksOption +='<option value="">Select Book</option>';
  const data={
    _token:"{{csrf_token()}}"
  }
  $.post('{{route(md5("GetBooks"))}}',data,function(msg){
    for(var i=0;i<msg.length;i++){
      BooksOption +='<option value="'+msg[i].Book_id+'">'+msg[i].Book_name+'</option>';
    }
    $('#BookGet').html(BooksOption);
  });
});
</script>
@endsection

