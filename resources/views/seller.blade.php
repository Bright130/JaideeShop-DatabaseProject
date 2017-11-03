@extends('_headerfooter') 
@section('page_title','ShowALL') 
@section('content')
<!-- Display Panel -->
<div class="container" style="    margin-top: 2vw;
    margin-bottom: 2%;">
	<div class="panel panel-default" style="width:75%; margin:0 auto ;">
		<div class="panel-heading">Seller</div>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sellers as $seller)
				<tr>
					<th scope="row">{{$seller->sellerid}}</th>
					<td>{{$seller->selleremail}}</td>
					<td>{{$seller->sellername}}</td>
					<td>{{$seller->sellersurname}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- //Display Panel -->
@stop