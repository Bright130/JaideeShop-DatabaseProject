<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session ;
use App\Product;
use App\Productimage;
use App\Shippingtype;
use App\Cart;
use App\newSeller;
use App\Shop;

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
    $bname = Auth::User()->buyername;
    $bsurname = Auth::User()->buyersurname;
    $baddress = Auth::User()->buyeraddress;
     $data = $request->all();
     $decoded = json_decode($request->name, true);
    $shiptype = Shippingtype::where('shippingtype','LIKE',"{$request->input('shiptype')}%")->get();
     $owners = [];
     $owner = [];
     $surname = [];
    foreach ($decoded as $decode) { $shopown = Product::select('shopid')->where('productid','=',$decode["id"])->get();
     foreach ($shopown as $shopo) { $sellerown = Shop::where('shopid','=',$shopo->shopid)->get();
       foreach ($sellerown as $sellero) { $owners[] = newSeller::where('id','=',$sellero->sellerid)->get();
         # code...
       }
     }
      // $owner[] = newSeller::where('id','=',$sellerown)->get();
    }
    foreach ($owners as $ow) { foreach ($ow as $o) { $owner[] = $o->sellername; $surname[] = $o->sellersurname;
      # code...
    }
      # code...
    }
    return view('order',['decoded'=>$decoded,'shiptype'=>$shiptype,'bname'=>$bname,'bsurname'=>$bsurname,'baddress'=>$baddress,'owner'=>$owner,'surname'=>$surname]);
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
      dd($request->all());
      return redirect()->route('home');
  }
}
