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
<!-- //typography -->


<div class="bs-example" data-example-id="table-within-panel">
	 <div class="panel panel-default">
<table class="table">
	<thead>
		<tr> <th>Number ID</th>
			<th> Name</th>
			<th> description</th>
			 </tr>
		</thead>
		<tbody>
@foreach($shoptypes as $shoptype)
			<tr> <th scope="row">{{$shoptype->shoptypeid}}</th> <td>{{$shoptype->shoptypename}}</td>  <td>{{$shoptype->shoptypedesc}}</td>  </tr>
@endforeach
			 </tbody> </table> </div> </div>





<!-- //product-nav -->
<!-- //login -->
@stop
