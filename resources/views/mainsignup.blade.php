@extends('_headerfooter')
@section('page_title','Index')
@section('content')

<style>

.button {
  display: inline-block;
  border-radius: 9px;
  background-color: orange;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 100px;
  margin-top: 150px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<div class="wrapper" style="text-align: center;">


  <a href="{{ route('buyer.signup') }}"   <i class="fa fa-user-plus" aria-hidden="true"></i>   <button class="button" style="vertical-align:middle">    <span>Be a Shopper</span>    </button> </a>
  <a href="{{ route('seller.signup') }}"    <button class="button" style="vertical-align:middle">    <span>Be a Shopper</span>    </button> </a>

</div>





@stop
