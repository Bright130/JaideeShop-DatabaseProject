@extends('_headerfooter')
@section('page_title','Seller Registration')
@section('content')
<div class="page-head">
	<div class="container">
		<h3>Order Details</h3>
	</div>
</div>
<h3>Order Summary</h3>

@foreach($shiptype as $ship)
{{$ship->shippingtype}}{{$ship->shipprice + $ship->shipprice }}
@endforeach
<h3>Transaction Detail</h3>
@stop
