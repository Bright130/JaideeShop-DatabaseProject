<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session ;
use App\Product;
use App\Productimage;

class CheckoutController extends Controller
{
  public function __construct()
  {

      $this->middleware('auth:newBuyer');
  }

  public function checkout()
  {
      return view('checkout');
  }
}
