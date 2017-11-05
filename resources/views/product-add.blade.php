@extends('_headerfooter') 
@section('page_title','Seller Registration') 
@section('content')
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">New Product</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/sellersignup" method="POST">
    <div class="form-group row">
        <label id="form" for=pname class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="pname" placeholder="- Name of product -" name="pname" required>
        </div>
    </div>
    <div class="form-group row">
        <label id="form" for=ptype class="col-sm-2 col-form-label">Product Type</label>
        <div class="col-sm-10">
            <select name="ptype">
              <option value="1">Electronics</option>
              <option value="2">Clothes</option>
              <option value="3">Accessories</option>
              <option value="4">Shoes</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label id="form" for=quantity class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="quantity" placeholder="At least 1" name="quantity" required>
        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="price" placeholder="Price" name="price" required>

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
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">ADD PRODUCT</button>
        </div>
    </div>
</form>
</div>
<!-- //form -->
@stop