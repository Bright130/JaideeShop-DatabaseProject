<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session ;
use App\Product;
use App\Productimage;
use App\Shippingtype;
use App\Cart;

class CheckoutController extends Controller
{
  public function __construct()
  {

      $this->middleware('auth:newBuyer');
  }

  public function checkout()
  {
      $shippingtypes = Shippingtype::get();
      return view('checkout',compact('shippingtypes'));
  }
  public function postShip(Request $request)
  {
     $data = $request->json();
     dd($data);
    $shiptype = Shippingtype::where('shippingtype','LIKE',"{$request->input('shiptype')}%")->get();
    // dd($shiptype);
    return view('order',compact('shiptype'));
  }
  public function orders()
  {
      return view('order');
  }
  public function toCart(Request $request)
  {
      $product = Product::get();
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($product,$product->productid);

      $request->session()->put('cart',$cart);
      dd($request->session()->get('cart'));
      return redirect()->route('home');
  }
}
