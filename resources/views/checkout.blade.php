@extends('_headerfooter')
@section('page_title','Seller Registration')
@section('content')
<script>simpleCart({
checkout: {
	type: "SendForm" ,
	url: "/checkout" ,
	method: "POST" ,
}
});</script>
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout" style="text-">
	<div class="container" style="text-align: -webkit-center;font-size: x-large;">
		<h3>My Shopping Bag</h3>
		<table class="table table-hover" data-wow-delay=".5s" style="display: block;">
			<table class="simpleCart_items"></table>
		</table>
	</div>
	<form form class="container" id="needs-validation" novalidate style="width:75%; margin:0 auto;" action="/checkout" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="container" style="text-align: -webkit-center;font-size: x-large;width:25%;" >
		<select class="form-control" name="shiptype">
				@foreach($shippingtypes as $shippingtype)
				@php $num = number_format($shippingtype->shipprice, 2, '.', ''); @endphp
				<option value= {{$shippingtype->shippingtype}}>{{$shippingtype->shippingtype}} ${{$num}} {{$shippingtype->duration}} </option>
				@endforeach
			</select>
	</div>
	<div class="col-md-9 header-right  footer-bottom">
		<button type="submit" class="btn btn-danger square-btn-adjust simpleCart_checkout" style="font-size: 18px;"><img style="vertical-align: bottom;" src="{{ url('/') }}/images/checkout.png"><i><b> CHECKOUT</b></i></button>
	</div>
</form>
</div>
<!-- //check out -->

@stop
