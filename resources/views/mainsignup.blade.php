@extends('_headerfooter')
@section('page_title','Index')
@section('content')

<div class="wrapper" style="text-align: center;">
        <a href="{{ route('buyer.signup') }}" class="btn btn-danger btn-lg btn-block btn-huge" style="position: absolute;
    top: 35%;">Signup As Buyer</a>
    <a href="{{ route('seller.signup') }}" class="btn btn-danger btn-lg btn-block btn-huge" style="position: absolute;
top: 50%;">Signup As Seller</a>
</div>



@stop
