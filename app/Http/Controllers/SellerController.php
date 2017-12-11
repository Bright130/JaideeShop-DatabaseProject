<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newSeller;
use Auth;
use App\Shop;

class SellerController extends Controller
{
    // get all seller to display in allseller page
    public function __construct()
    {

        $this->middleware('auth:newSeller');
    }

      public function index()
      {
        $id = Auth::User()->id;
        $shops = Shop::select('shopname','ShopID')->where('sellerid','=',Auth::User()->id)->orderBy('shopname','ASC')->get();

        $thisEmail = Auth::User()->email ;
        $sellerinfo = newSeller::where('id','LIKE',$id)->get();
        return view('seller.index',['sellerinfo'=>$sellerinfo,'id'=>$id,'shops'=>$shops]) ;
      }

      public function edit()
    {
        $sellerinfo = newSeller::where('id','LIKE',Auth::User()->id)->get()->first();
          return view('seller.edit',['sellerinfo'=>$sellerinfo]) ;

    }

    public function update(Request $request)
    {
      $seller = newSeller::where('id','LIKE',Auth::User()->id)->get()->first()->update($request-all());
        return redirect('/');

    }


}
