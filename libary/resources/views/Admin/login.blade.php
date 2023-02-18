@extends('layouts.admin')
@section('title', 'Login')
@section('content')
<div class="container">
            @if(Session::has('message'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
              </div>
              @endif
            <form action="{{route('admin.login')}}" method="post" enctype='multipart/form-data'>
                @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter your Email" require class="form-control">
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
		margin: 9rem;
    box-shadow: 2px 4px 5px black;
    padding: 9rem;
	}
    body{
        overflow: hidden;
    }
</style>
@endsection

