<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('page_title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ url('/') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ url('/') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ url('/') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ url('/') }}/js/simpleCart.min.js"></script>
	<style type="text/css">
	.simpleCart_items .headerRow div, .simpleCart_items .itemRow div {
		float:left;
		width: 20%;
	}
	.simpleCart_items .itemRow {
		clear: both;

	}

</style>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ url('/') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>

</head>
<style>
    #form{
    color: #535353;
    font-size: 14px;
    font-weight: 400;
    }
    .form-control {
        border-radius: 0px;
    }
</style>
<body>
<!-- header -->
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="{{ route('home') }}"><img src="{{ url('/') }}/images/JAIDEE.jpg"></a></h1>
		</div>
		<div class="col-md-5 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Beauty Items</option>
						<option value="AX">Clothes</option>
						<option value="AX">Electronics</option>
						<option value="AX">Child and Baby</option>
						<option value="AX">Furniture</option>
						<option value="AX">Books</option>
						<option value="AX">Sport and Recreation</option>
						<option value="AX">Consumtion</option>
						<option value="AX">Food</option>
						<option value="AX">Accessories</option>
						<option value="AX">Gadgets</option>
						<option value="AX">Entertainments</option>
						<option value="AX">Stationary</option>
						<option value="AX">Office Equipment</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
			<!-- <div class="clearfix"></div> -->
			</form>
		</div>
		<div class="col-md-4 header-right footer-bottom" style="color: #FDA30E;
	padding: 0px 0px 20px 100px;
	font-size: 14px;
	font-weight: bold;">
			<ul>
				<li><b>BUYER: </b></li>
				<li><a class="keylogin" href="{{ route('buyer.login') }}"></a></li>
				<li><a href="{{ route('buyer.dashboard') }}" class="use1" action="{{ route('buyer.dashboard') }}"></a></li>
				<li><img src="{{ url('/') }}/images/notepad.png"></li>
				<li><b>SELLER: </b></li>
				<li><a class="keylogin" href="{{ route('seller.login') }}"></a></li>
				<li><a href="{{ route('seller.dashboard') }}" class="use1" action="{{ route('seller.dashboard') }}"></a></li>
				<li><img src="{{ url('/') }}/images/notepad.png"></li>
			</ul>
			<ul>
				<a href="{{ route('mainsignup') }}" class="btn btn-danger square-btn-adjust">Signup Now</a>
			  <a href="{{ route('logout') }}" class="btn btn-danger square-btn-adjust">Logout</a>
			</ul>
		</div>
		<!-- <div class="clearfix" style=" width: 1500px;"></div> -->
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route('show.Clothing') }}">Clothing</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route('show.elec') }}">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route('show.Accessories') }}">Accessories</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route('show.Consumable') }}">Consumables</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route('show.Voucher') }}">Voucher & E-Books</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{ route('show.Stationary') }}">Stationary</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown"   role="button" aria-haspopup="true" aria-expanded="false">MORE <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ route('show.Beauty') }}">Beauty Items</a></li>
											<li><a href="{{ route('show.Childbaby') }}">Child & Baby</a></li>
											<li><a href="{{ route('show.Furniture') }}">Furniture</a></li>
											<li><a href="{{ route('show.Sport') }}">Sport & Recreation</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{ route('show.Food') }}">Food</a></li>
											<li><a href="{{ route('show.Gadgets') }}">Gadgets</a></li>
											<li><a href="{{ route('show.Entertainment') }}">Entertainment</a></li>
											<li><a href="{{ route('show.Office') }}">Office Equipment</a></li>
										</ul>
									</div>
									<img src="images/user.png" class="user-image img-responsive text-center"/>
								</div>
							</ul>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="{{ route('checkout') }}" class="simpleCart_checkout" >
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)</div>

							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- endbanner -->

@yield('content')


<!-- //footer -->




<!-- login -->

<!-- //login -->
</body>
</html>
