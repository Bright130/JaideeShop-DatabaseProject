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
use App\Orders;
use App\Orderdetail;
use App\Account;

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
    $bid = Auth::User()->id;
    $bname = Auth::User()->buyername;
    $bsurname = Auth::User()->buyersurname;
    $baddress = Auth::User()->buyeraddress;
     $data = $request->all();
     $decoded = json_decode($request->name, true);
    $shiptype = Shippingtype::where('shippingtype','LIKE',"{$request->input('shiptype')}%")->get();
     $owners = [];
     $owner = [];
     $surname = [];
     $shopd = [];
     $shopi = [];
     $sq = [];
     $accname = [];
     $bkk = [];

    foreach ($decoded as $decode) { $shopown = Product::select('shopid')->where('productid','=',$decode["id"])->get();
     foreach ($shopown as $shopo) { $sellerown = Shop::where('shopid','=',$shopo->shopid)->get();
       foreach ($sellerown as $sellero) { $owners[] = newSeller::where('id','=',$sellero->sellerid)->get(); $shopd[] = $sellero;
         # code...
       }
     }
      // $owner[] = newSeller::where('id','=',$sellerown)->get();
    }
    foreach ($owners as $ow) { foreach ($ow as $o) { $owner[] = $o->sellername; $surname[] = $o->sellersurname; $sid[] = $o->id;
      # code...
    }
      # code...
    }

    foreach ($shopd as $shd) { $shopi[] = $shd->shopid; $sq[] = Account::where('shopid','=',$shd->shopid)->get();
      # code...
    }
    foreach ($sq as $sw) { foreach ($sw as $se) { $accname[] = $se->accountno; $bankname[] = $se->bankname;
      # code...
    }
      # code...
    }
    foreach ($bankname as $bk) { if ($bk == 1) { $bkk[] = "Bangkok Bank" ;}   if ($bk == 2) { $bkk[] = "Krungsri Ayuthaya Bank";}  if ($bk == 3) { $bkk[] = "Kasikorn Bank";}
      if ($bk == 4) { $bkk[] = "TMB";}   if ($bk == 5) { $bkk[] = "Siam Commercial Bank";}
      # code...
    }
    foreach ($shiptype as $ship) {
      $i = 0; date_default_timezone_set('Asia/Bangkok');
      $date = date('Y/m/d h:i:s', time());
      foreach ($decoded as $lists ) {
        Orders::create(['totalprice'=>(($lists["price"]*$lists["quantity"]*0.07)+($lists["price"]*$lists["quantity"])),
        'vat'=>($lists["price"]*$lists["quantity"]*0.07),
        'shopid'=>$shopi[$i],
        'buyerid'=>$bid,
        'shippingtime'=>$date,
        'shippingaddress'=>$baddress,
        'shippingtype'=>$ship->shippingtype,
        'reciepttime'=>$date,
        'trackingid'=>"0"]);
        $orderid = Orders::select('orderid')->orderBy('orderid','DESC')->get()->first();

        Orderdetail::create(['productid'=>$lists["id"],
        'orderamount'=>$lists["quantity"],
        'orderid'=>$orderid->orderid,
        'totalpriceorder'=>(($lists["price"]*$lists["quantity"]*0.07)+($lists["price"]*$lists["quantity"]))]);
         $i = $i+1;
      }
    }
    return view('order',['decoded'=>$decoded,'shiptype'=>$shiptype,'bname'=>$bname,'bsurname'=>$bsurname,'baddress'=>$baddress,'owner'=>$owner,'surname'=>$surname,'accname'=>$accname,'bkk'=>$bkk]);
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
