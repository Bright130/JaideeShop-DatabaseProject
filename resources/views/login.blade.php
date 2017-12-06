@extends('_headerfooter')
@section('page_title','buyer Registration')
@section('content')
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Buyer Login</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/login-buyer" method="POST">
    {{ csrf_field() }}

    <div class="form-group row">
        <label id="form" for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="Password" placeholder="Password" required name="Password">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">Login</button>
        </div>
    </div>
</form>
</div>

<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Seller Login</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/login-seller" method="POST">
    {{ csrf_field() }}

    <div class="form-group row">
        <label id="form" for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="Password" placeholder="Password" required name="Password">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">Login</button>
        </div>
    </div>
</form>
</div>
<!-- //form -->
@stop
