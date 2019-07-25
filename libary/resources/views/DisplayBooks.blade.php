
@extends('layouts.app')
@section('content') 
@include('default.header')
       <div id="wrapper">
       <div id="page-wrapper">
          
            	<iframe src="{{URL::asset($records->book_images)}}" style="width:100%;height:550px"></iframe>
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

