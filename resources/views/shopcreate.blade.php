@extends('_headerfooter')
@section('page_title','Shop Registration')
@section('content')
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
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Shop Registration</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/shopcreate" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
        <label id="form" for="shop" class="col-sm-2 col-form-label">Shop Name</label>
        <div  class="col-sm-10">
            <input type="text" class="form-control" id="shopname" placeholder="Shop Name" name="shopname" required>
        </div>
    </div>
    <div class="form-group row">
        <label id="form" for=ptype class="col-sm-2 col-form-label">Shop Type</label>
        <div class="col-sm-10">
          <select class="form-control" name="shoptype">
              @foreach($shoptypes as $shoptype)
              <option value={{$shoptype->shoptypeid}}>{{$shoptype->shoptypename}}</option>
              @endforeach
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
        <div class="col-sm-10 container1">
            <input type="file" class="col-sm-5 form-control" id="IMGURL" placeholder="Link URL" required name="IMGURL[]" style="width: 50%;">

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
          <select class="form-control" name="bankname">
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
            <input type="password" class="form-control" name="pw" id="ConfirmPassword" placeholder="Password for Apply changes" required>

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
<script type="text/javascript">
  $("body").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
  });

  var options = {
    complete: function(response)
    {
    	if($.isEmptyObject(response.responseJSON.error)){
    		$("input[name='title']").val('');
    		alert('Image Upload Successfully.');
    	}else{
    		printErrorMsg(response.responseJSON.error);
    	}
    }
  };

  function printErrorMsg (msg) {
	$(".print-error-msg").find("ul").html('');
	$(".print-error-msg").css('display','block');
	$.each( msg, function( key, value ) {
		$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
	});
  }
</script>
<!-- //form -->
@stop
