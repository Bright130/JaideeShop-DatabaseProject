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
@php $i = 0; date_default_timezone_set('Asia/Bangkok');
$date = date('m/d/Y h:i:s a', time()); @endphp
@foreach($decoded as $lists)
	<div class="col-md-12" style="text-align: center;">
	<table class="table table-hover"  style="text-align: center;">
		<thead>
			<tr class="headerRow"  style="text-align: center;">
				<th class="item-id"  style="text-align: center;">ProductID</th>
				<th class="item-name" style="text-align: center;">Name</th>
				<th class="item-price" style="text-align: center;">Price</th>
				<th class="item-quantity" style="text-align: center;">Qty</th>
				<th class="item-name" style="text-align: center;">Ship Type</th>
				<th class="item-price"  style="text-align: center;">Ship Price</th>
				<th class="item-quantity"  style="text-align: center;">VAT 7%</th>
				<th class="item-total" style="text-align: center;">Total</th>
				<th class="item-price" style="text-align: center;">Seller</th>
				<th class="item-price" style="text-align: center;">Buyer</th>
				<th class="item-price" style="text-align: center;">Ship Time</th>
				<th class="item-price" style="text-align: center;">Ship address</th>
				<th class="item-price" style="text-align: center;">TrackingID</th>
			</tr>
		</thead>
		<tbody>
			<tr class="itemRow"  style="text-align: center;">
				<td class="item-id">{{$lists["id"]}}</td>
				<td class="item-name">{{$lists["name"]}}</td>
				<td class="item-price">{{$lists["price"]}}</td>
				<td class="item-quantity">{{$lists["quantity"]}}</td>
				<td class="item-name">{{$ship->shippingtype}}</td>
				<td class="item-price">{{$ship->shipprice}}</td>
				<td class="item-id">{{$lists["price"]*$lists["quantity"]*0.07}}</td>
				<td class="item-id">{{($lists["price"]*$lists["quantity"]*0.07)+($lists["price"]*$lists["quantity"])}}</td>
				<td class="item-id">{{$owner[$i]}}{{$surname[$i]}}</td>
				<td class="item-id">{{$bname}}{{$bsurname}}</td>
				<td class="item-id">{{$date}}</td>
				<td class="item-id">{{$baddress}}</td>
				<td class="item-id">{{"-"}}</td>
			</tr>
		</tbody>
	</table>
</div>
		@php $i = $i+1; @endphp
	 @endforeach
@endforeach

<h3>Transaction Detail</h3>
<div class="col-md-12" style="text-align: center;">
	@php $i = 0; @endphp
@foreach($decoded as $lists)
<table class="table table-hover"  style="text-align: center;">
	<thead>
		<tr class="headerRow"  style="text-align: center;">
			<th class="item-id"  style="text-align: center;">Transaction Amount</th>
			<th class="item-name" style="text-align: center;">Bank Name</th>
			<th class="item-price" style="text-align: center;">Account Number</th>

		</tr>
	</thead>
	<tbody>
		<tr class="itemRow"  style="text-align: center;">
			<td class="item-id">{{($lists["price"]*$lists["quantity"]*0.07)+($lists["price"]*$lists["quantity"])}}</td>
			<td class="item-name">{{$bkk[$i]}}</td>
			<td class="item-price">{{$accname[$i]}}</td>

		</tr>
	</tbody>
</table>
	@php $i = $i+1; @endphp
@endforeach
</div>
@stop
