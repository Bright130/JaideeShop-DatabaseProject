@extends('_headerfooter')
@section('page_title','Index')

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<h1 style="color: #FDA30E;
float: left;
font-size: 20px;
font-weight: bold;">Login as Seller</h1>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ url('/') }}/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{ url('/') }}/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ url('/') }}/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
	 <!-- cart -->
	 <!-- for bootstrap working -->
	 	<script type="text/javascript" src="{{ url('/') }}/js/bootstrap-3.1.1.min.js"></script>
	 <!-- //for bootstrap working -->
	 <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	 <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	 <script src="{{ url('/') }}/js/jquery.easing.min.js"></script>

</head>
@section('content')
@foreach($sellerinfo as $seller)
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"style="color: #ffffff;
							font-weight: bold;">My Profile</a>
            </div>
        </nav>
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

									<li class="text-center"  style = "top: 60px;">
										<img src="{{url('/').'/'.'urlimage/'.$seller->sellerimg}}" class="user-image img-responsive"/>
									</li>
                  <li style = "top: 60px;">
                    <a class="active-menu"  href="#" style="font-size: 20px;"><img src="{{ url('/') }}/images/notepad.png"></i> Personal information</a>
                  </li>
									@foreach($shops as $shop)
									<li style = "top: 100px;">
										<a class="active-menu"  href="/seller/shop/{{$shop->ShopID}}" style="font-size: 20px;"><img src="{{ url('/') }}/images/shop.png"></i> {{$shop->shopname}}</a>
									</li>
									@endforeach
                </ul>
            </div>

        </nav>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" style="color: #FDA30E;
									float: left;
									font-size: 16px;
									font-weight: bold;">
										<div class="col-md-6 col-sm-6 col-xs-6">
                     <h2>Welcome Back</h2>
                    <div style="color: #000000;float: left;font-size: 16px;font-weight: bold;">Welcome <b>{{$seller->sellername}} </b> , Love to see you back. </div>
                    </div>
										<div class="col-md-3 col-sm-6 col-xs-6  header-right footer-bottom">
											<a href="{{ route('seller.edit') }}" class="btn btn-danger square-btn-adjust" style="font-size: 24px;"><img style="vertical-align: text-top;" src="{{ url('/') }}/images/settings.png"><i>  EDIT PROFILE</i></a>
										</div>
										<div class="col-md-3 col-sm-6 col-xs-6 header-right  footer-bottom">
											<a href="{{ route('shop.create') }}" class="btn btn-danger square-btn-adjust" style="font-size: 24px;"><img style="vertical-align: text-top;" src="{{ url('/') }}/images/add.png"><i>  ADD SHOP</i></a>
											<a href="{{ route('product.add') }}" class="btn btn-danger square-btn-adjust" style="font-size: 24px;"><img style="vertical-align: text-top;" src="{{ url('/') }}/images/add.png"><i>  ADD PRODUCT</i></a>
										</div>

									</div>

                </div>

                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon" style="margin-bottom: 10px; padding-bottom: 15px; padding-top: 15px;">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>

                </div>
             </div>
         </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon" style="margin-bottom: 10px; padding-bottom: 15px; padding-top: 15px;">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon" style="margin-bottom: 10px; padding-bottom: 15px; padding-top: 15px;">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon" style="margin-bottom: 10px; padding-bottom: 15px; padding-top: 15px;">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">3 Orders</p>
                    <p class="text-muted">Pending</p>
                </div>
             </div>
         </div>
        </div>

         <div>
            <div>
                    <h2 style="color: #FDA30E;">Profile</h2>
										<table class="table">
											<thead>
												<tr> <th>Firstname</th>
													<th> Lastname</th>
													<th> Address</th>
													<th> TelNo.</th>
													<th> Email</th>
													 </tr>
												</thead>
												<tbody>
													<tr> <th scope="row">{{$seller->sellername}}</th> <td>{{$seller->sellersurname}}</td>  <td>{{$seller->selleraddress}}</td>
													 <td>{{$seller->sellertel}}  <td>{{$seller->email}}</td></td>  </tr>
													 </tbody> </table> </div> </div>

													 <div>
															<div>
																			<h2 style="color: #FDA30E;">ALL seller gender</h2>
																			<table class="table table-hover table-dark">
																				<thead>
																					<tr> <th>Gender</th>
																						<th> Total</th>

																						 </tr>
																					</thead>
																					<tbody>
																						@foreach($sellergender as $b)
																						<tr> <th scope="row">{{$b->sellergender}}</th> <td>{{$b->total}}</td>  </tr>
																						@endforeach
																						 </tbody> </table> </div> </div>

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
@endforeach
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ url('/') }}/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ url('/') }}/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{ url('/') }}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{ url('/') }}/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ url('/') }}/assets/js/custom.js"></script>


</body>
</html>

@stop
