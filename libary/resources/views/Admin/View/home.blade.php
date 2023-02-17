@extends('layouts.admin')
@section('title', 'Dashbord')
@section('content')
@include('Admin.Commons.sidebar')

@include('Admin.Commons.header')

<!-- -------------------------------- -->

<div class="main-content">
    <div class="container-fluid content-top-gap">


        <section class="forms">
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading " >
                        <h3 id="formsShow">Update Hero Images</h3>

                </div>
                <div class="card-body">
                        <p>Helllo wjor</p>
                </div>
            </div>

            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Forms <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Email address</label>
                            <input type="email" class="form-control input-style" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input type="password" class="form-control input-style" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                            <label class="form-check-label checkmark" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>
            <!-- //forms 1 -->

            <!-- forms 2 -->
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Email</label>
                                <input type="email" class="form-control input-style" id="inputEmail4"
                                    placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Password</label>
                                <input type="password" class="form-control input-style" id="inputPassword4"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Address</label>
                            <input type="text" class="form-control input-style" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Address 2</label>
                            <input type="text" class="form-control input-style" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="input__label">City</label>
                                <input type="text" class="form-control input-style" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="input__label">State</label>
                                <select id="inputState" class="form-control input-style">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip" class="input__label">Zip</label>
                                <input type="text" class="form-control input-style" id="inputZip">
                            </div>
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                            <label class="form-check-label checkmark" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- //forms 2 -->

            <!-- horizontal forms-->
            <!-- forms 3 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Horizontal Forms <span></span></h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label input__label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control input-style" id="inputEmail3"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label input__label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control input-style" id="inputPassword3"
                                    placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0 input__label">Radios</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                            value="option3" disabled>
                                        <label class="form-check-label" for="gridRadios3">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-sm-2">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Example checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-style">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- //forms 3 -->
            <!-- //horizontal forms-->

            <!-- supported elements -->
            <!--  -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Suppported elements <span></span></h3>
                </div>
                <div class="card-body">
                    <form class="was-validated">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                            <label class="custom-control-label" for="customControlValidation1">Check this custom
                                checkbox</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2"
                                name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Toggle this custom
                                radio</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3"
                                name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">Or toggle this other
                                custom radio</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>

                        <div class="form-group">
                            <select class="custom-select input-style" required>
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- // -->
            <!-- supported elements -->

        </section>

    </div>
</div>
<!-- ----------------------------------- -->

@include('Admin.Commons.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
<script>
    $(document).ready(function(){
      $("#formsShow").click(function(){
        $("p").toggle();
        console.log('tag', '---')
      });
    });
    </script>

@endsection


