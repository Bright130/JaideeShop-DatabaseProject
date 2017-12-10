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
    public function index($id=null)
    {
      if($id == null)
      {
        return redirect()->intended(route('seller.dashboard'));
      }

      $sid = Auth::User()->id;

      $shops = Shop::select('shopname','ShopID')->where('sellerid','=',Auth::User()->id)->orderBy('shopname','ASC')->get();

      $thisEmail = Auth::User()->email ;


      $sellerinfo = newSeller::where('id','LIKE',$sid)->get()->first();



      $detail = Shop::where([['ShopID','=',$id],['sellerid','=',$sid]])->get()->first();


// if($detail->isEmpty())
// {
//     return redirect()->intended(route('seller.dashboard'));
// }

      return view('seller.shop',['detail'=>$detail,'sellerinfo'=>$sellerinfo,'id'=>$sid,'shops'=>$shops]);



    }

    public function getNewShop()
    {
        $id = Auth::User()->id;
        $shoptypes = Shoptype::get();
        return view('seller.shopcreate',compact('shoptypes'));
    }

    // insert info into db in signup page
    public function postNewShop(Request $request)
    {
       //ดึง seller ID มา
       $uid = Auth::User()->id;


if(Hash::check($request->input('pw'), Auth::User()->password))
      {
        $i=1;

                 foreach($request->IMGURL as $img ){

                $input['urlimage'] = $request->input('sid').'_'.time() .'_'.$i .'.' .$img->getClientOriginalExtension();

                $img->move(public_path('urlimage'), $input['urlimage']);

                  $i++;
                 }


         Shop::create(['ShopName'=>$request->input('shopname'),
        'sellerid'=>$uid,
        'shoptypeid'=>$request->input('shoptype'),
        'ShopDesc'=>$request->input('desc'),
        'ShopImg'=>$input['urlimage'],
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
