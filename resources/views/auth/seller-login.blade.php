@extends("_headerfooter")
@section('page_title','Seller Login')
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
<!-- body header -->
<div>
    <h1 class="display-4" style="padding-bottom: 2%;
text-align: center;
padding-top: 3%;">Seller Login</h1>
</div>
<!-- //body header -->
<!-- form -->
<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action= {{ route('seller.login.submit') }} method="POST">
    {{ csrf_field() }}

    <div class="form-group row">
        <label id="form" for="Email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>

        </div>
    </div>
    <div class="form-group row">
        <label id="form" for="Password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" placeholder="Password" required name="password">

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
