@extends('_headerfooter')
@section('page_title','buyer Registration')
@section('content')
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="../css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="../text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="../js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="../text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Seller Edit</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action= {{ route('seller.update') }} method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6" style="padding-left:0; padding-right:0; ">

            <label id="form" for="Name">Name</label>

            <input type="text" class="form-control" id="Name" placeholder="Name" name="Name" required value="{{$sellerinfo->sellername}}"></input>

        </div>

        <div class="form-group col-md-6" style="padding-right:0; padding-left:0; ">
            <label id="form" for="Surname">Surname</label>

            <input type="text" class="form-control" id="Surname" placeholder="Surname" name="Surname"  value={{$sellerinfo->sellesurname}} required>

        </div>

    </div>
    <div class="form-group row">
        <label id="form" for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" value={{$sellerinfo->email}}  required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="Password" placeholder="Password" required name="Password">

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="ConfirmPassword" class="col-sm-2 col-form-label">Confirm password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Password" required>

        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <label id="form" class="col-form-legend col-sm-2">Gender</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label id="form" class="form-check-label" style="padding-right: 1rem;">
                        <input class="form-check-input" type="radio" name="Gender" <?php echo ($sellerinfo->sellergender=='M')?'checked':'' ?> id="gridRadios1" value="M" > Male
                    </label>

                    <label id="form" class="form-check-label" style="padding-right: 1rem;">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="F"> Female
                    </label>

                    <label id="form" class="form-check-label">
                        <input class="form-check-input" type="radio" name="Gender" id="gridRadios3" value="O"> Other

                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <label id="form" for="Tel" class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Tel" placeholder="Tel" name="Tel" value={{$sellerinfo->sellertel}} required>

        </div>
    </div>
		<div class="form-group row">
				<label id="form" for="IMGURL" class="col-sm-2 col-form-label">Image URL</label>
				<div class="col-sm-10 container1">
						<input type="file" class="col-sm-5 form-control" id="IMGURL" placeholder="Link URL" required name="IMGURL[]" style="width: 50%;">

        </div>
    </div>
    <div class="form-group">
        <label id="form" for="Address">Address</label>
        <textarea class="form-control" id="Address" rows="3" name="Address" required></textarea>

    </div>
    <div class="form-group row">
        <div class="col-md-12">
            <button type="submit" class="btn" style="font-size: 1.2rem;
    width: 100%;
    border-radius: 0px;
    background-color: #fda30e;
    color:white;">SIGN UP</button>
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
