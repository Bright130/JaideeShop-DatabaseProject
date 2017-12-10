@extends('_headerfooter')
@section('page_title','Seller Registration')
@section('content')
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
	<div class="col-md-9 header-right  footer-bottom">
		<a href="{{ route('order') }}" class="btn btn-danger square-btn-adjust" style="font-size: 18px;"><img style="vertical-align: bottom;" src="{{ url('/') }}/images/checkout.png"><i><b> CHECKOUT</b></i></a>
	</div>
</div>
<!-- //check out -->

@stop
