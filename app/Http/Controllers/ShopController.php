<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{

    // get signup page
    public function getNewShop()
    {
        return view('shopcreate');
    }

    // insert info into db in signup page
    public function postNewShop(Request $request)
    {
       
        Shop::create(['ShopName'=>$request->input('shopname'),
        'SellerId'=>$request->input('name','1'),
        'ShoptypeId'=>$request->input('shoptype'),
        'ShopDesc'=>$request->input('desc'),
        'ShopImg'=>$request->input('IMGURL'),
        'ShopView'=>$request->input('name','0')]);

        Account::create(['accountno'=>$request->input('bankacc'),
        'accountname'=>$request->input('name','Peat'),
        'bankname'=>$request->input('bankname'),
        'ShopID'=>$request->input('name','1')]);
        //dd($request.parameters) ;
        return redirect('/');
    }
}
