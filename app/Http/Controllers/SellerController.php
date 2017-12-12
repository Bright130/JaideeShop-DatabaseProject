<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newSeller;
use Auth;
use App\Shop;
use Hash;

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

        $input['urlimage'] = newSeller::where('id','LIKE',Auth::User()->id)->get()->first()->sellerimg;


if($request->IMGURL!=null){

                     foreach($request->IMGURL as $img )
                     {

                    $input['urlimage'] = Auth::User()->id.'_seller_'.'.' .$img->getClientOriginalExtension();

                    $img->move(public_path('urlimage'), $input['urlimage']);

                     }

            }

$passw = Hash::make($request->input('Password'));
if($request->input('Password')==NULL){
 $passw =  newSeller::where('id','LIKE',Auth::User()->id)->get()->first()->password;

}
      $seller = newSeller::where('id','LIKE',Auth::User()->id)->get()->first()->update([
        'password'=>$passw,
        'sellername'=>$request->input('Name'),
        'sellersurname'=>$request->input('Surname'),
        'selleraddress'=>$request->input('Address'),
        'sellertel'=>$request->input('Tel'),
        'sellerimg'=>$input['urlimage'],
        'sellergender'=>$request->input('Gender')


      ]);
        return redirect('/seller');

    }


}
