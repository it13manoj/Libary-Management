@extends('layouts.admin')
@section('title', 'Register')
@section('content')
<div class="container">
            @if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
            <form action="{{route('admin.create')}}" method="post" enctype='multipart/form-data'>
                @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username" id="username" placeholder="Enter your name" require class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="contact" id="contact" placeholder="Enter your Contact no" require class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <select type="text" name="gender" id="gender"  require class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="text" name="dob" id="dob" placeholder="Enter your date of birth" require class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter your Email" require class="form-control datepicker">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter your password" require class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" id="submit" placeholder="" require class="btn btn-danger">
                            </div>
                        </div>
                    </div>
            </form>
</div>
<style type="text/css">
	form{
		margin-top: 8em;
	}
</style>
@endsection

