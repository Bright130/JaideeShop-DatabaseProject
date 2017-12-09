<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Shoptype;
use App\Account;
use App\newSeller;
use Auth;
use Hash;

class ShopController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:newSeller');
    }
    // get signup page
    public function getNewShop()
    {
        $id = Auth::User()->id;
        $shoptypes = Shoptype::get();
        return view('shopcreate',compact('shoptypes'));
    }

    // insert info into db in signup page
    public function postNewShop(Request $request)
    {
       //ดึง seller ID มา
       $uid = Auth::User()->id;


if(Hash::check($request->input('pw'), Auth::User()->password))
      {  Shop::create(['ShopName'=>$request->input('shopname'),
        'sellerid'=>$uid,
        'shoptypeid'=>$request->input('shoptype'),
        'ShopDesc'=>$request->input('desc'),
        'ShopImg'=>$request->input('IMGURL'),
        'ShopView'=>0]);

        //ดึง shop ID มา

        $sid = Shop::select('shopid')->where('shopname','LIKE',$request->input('shopname'))->first()->shopid;

        Account::create(['accountno'=>$request->input('bankacc'),
        'accountname'=>$request->input('name','Peat'),
        'bankname'=>$request->input('bankname'),
        'ShopID'=>$sid]);
        //dd($request.parameters) ;
        return redirect('/');
      }
        return redirect()->back();
    }
}
