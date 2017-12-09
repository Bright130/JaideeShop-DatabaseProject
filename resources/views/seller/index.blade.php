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
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
@section('content')
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
                <a class="navbar-brand" href="index.html"style="color: #ffffff;
							font-weight: bold;">My Profile</a>
            </div>
        </nav>
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

									<li class="text-center"  style = "top: 60px;">
										<img src="images/user.png" class="user-image img-responsive"/>
									</li>
                  <li style = "top: 60px;">
                    <a class="active-menu"  href="#"><i class="fa fa-dashboard fa-3x"></i> Personal information</a>
                  </li>
                </ul>
            </div>

        </nav>
@foreach($sellerinfo as $seller)
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" style="color: #FDA30E;
									float: left;
									font-size: 16px;
									font-weight: bold;">
                     <h2>Welcome Back</h2>
                        <div style="color: #000000;
											float: left;
											font-size: 16px;
											font-weight: bold;">Welcome <b>{{$seller->sellername}}</b> , Love to see you back. </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon" style="margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px;">
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
                <span class="icon-box bg-color-green set-icon" style="margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px;">
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
                <span class="icon-box bg-color-blue set-icon" style="margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px;">
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
                <span class="icon-box bg-color-brown set-icon" style="margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px;">
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
											  <table class="table table-hover table-dark">
		 		                      <thead>
		 		                        <h2 style="color: #FDA30E;">Recently</h2>
		 		                        <tr>
		 		                          <th scope="col">#</th>
		 		                          <th scope="col">Shop</th>
		 		                          <th scope="col">Product</th>
		 		                          <th scope="col">Date</th>
		 		                        </tr>
		 		                      </thead>
		 		                      <tbody>
		 		                        <tr>
		 		                          <th scope="row">1</th>
		 		                          <td>Mark</td>
		 		                          <td>Otto</td>
		 		                          <td>@mdo</td>
		 		                        </tr>
		 		                        <tr>
		 		                          <th scope="row">2</th>
		 		                          <td>Jacob</td>
		 		                          <td>Thornton</td>
		 		                          <td>@fat</td>
		 		                        </tr>
		 		                        <tr>
		 		                          <th scope="row">3</th>
		 		                          <td colspan="2">Larry the Bird</td>
		 		                          <td>@twitter</td>
		 		                        </tr>
		 		                      </tbody>
		 		                    </table>
             </div>
             </div>







             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
@endforeach
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>

@stop
