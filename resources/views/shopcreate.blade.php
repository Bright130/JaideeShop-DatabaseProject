@extends('_headerfooter') 
@section('page_title','Shop Registration') 
@section('content')
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Shop Registration</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/shopcreate" method="POST">
    {{ csrf_field() }}
    <div class="form-group row">
        <label id="form" for="shop" class="col-sm-2 col-form-label">Shop Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="shopname" placeholder="Shop Name" name="shopname" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for=ptype class="col-sm-2 col-form-label">Shop Type</label>
        <div class="col-sm-10">
            <select name="shoptype">
              <option value="1">Electronics</option>
              <option value="2">Clothes</option>
              <option value="3">Accessories</option>
              <option value="4">Shoes</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label id="form" for="desc" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" id="desc" placeholder="Description" name="desc" required ></textarea>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="IMGURL" class="col-sm-2 col-form-label">Image URL</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="IMGURL" placeholder="Link URL" required name="IMGURL">

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="bank" class="col-sm-2 col-form-label">Bank Account</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="bank" placeholder="Bank Account" name="bankacc" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for=bankname class="col-sm-2 col-form-label">Bank name</label>
        <div class="col-sm-10">
            <select name="bankname">
              <option value="1">Bangkok Bank</option>
              <option value="2">Krungsri Ayuthaya Bank</option>
              <option value="3">Kasikorn Bank</option>
              <option value="4">TMB</option>
              <option value="4">Siam Commercial Bank</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="ConfirmPassword" class="col-sm-2 col-form-label">Confirm password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Password for Apply changes" required>

        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">CREATE SHOP</button>
        </div>
    </div>
</form>
</div>
<!-- //form -->
@stop