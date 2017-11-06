@extends('_headerfooter') 
@section('page_title','New Product ') 
@section('content')
<!-- body header -->
<style>

.add_form_field
{
    background-color: #1c97f3;
    border: none;
    color: white;
    padding: 3px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border:1px solid #186dad;
    margin-top: 3px;

}

input{
    border: 1px solid #1c97f3;
    width: 260px;
    height: 40px;
    margin-bottom:14px;
}

.delete{
    background-color: #fd1200;
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;

}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    var max_fields      = 5;
    var wrapper         = $(".container1"); 
    var add_button      = $(".add_form_field"); 
    
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div class="col-sm-10" style="padding-left:0px;width:78.5%;"><input type="text" class="form-control col-sm-10" id="IMGURL" placeholder="Link URL" required name="IMGURL[]" style="width:65%;"><a href="#" class="delete">Delete</a></div>'); //add input box
        }
        else
        {
        alert('You Reached the limits')
        }
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">New Product</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/addproduct" method="POST">
    <!-- need csrf -->
    {{ csrf_field() }}
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
              @foreach($producttypes as $producttype)
              <option value={{$producttype->producttypeid}}>{{$producttype->producttypename}}</option>
              @endforeach
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
        <div class="col-sm-10 container1">
            <input type="text" class="col-sm-5 form-control" id="IMGURL" placeholder="Link URL" required name="IMGURL[]" style="width: 50%;">
            <button class="add_form_field">Add New Field <span style="font-size:16px; font-weight:bold;">+ </span></button>
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