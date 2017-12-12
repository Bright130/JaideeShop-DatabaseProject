<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newBuyer;
use Auth;
use Hash;

class BuyerController extends Controller
{

  public function __construct()
  {

      $this->middleware('auth:newBuyer');
  }

    public function index()
    {
      $uid = Auth::User()->id;
      $thisEmail2 = Auth::User()->email ;

      $buyerinfo = newBuyer::where('id','=',$uid)->get();
      return view('buyer.index',compact('buyerinfo')) ;
    }

    public function edit()
  {
      $buyerinfo = newBuyer::where('id','LIKE',Auth::User()->id)->get()->first();
        return view('buyer.edit',['buyerinfo'=>$buyerinfo]) ;

  }

  public function update(Request $request)
  {

      $input['urlimage'] = newBuyer::where('id','LIKE',Auth::User()->id)->get()->first()->buyerimg;




if($request->IMGURL!=null){

                   foreach($request->IMGURL as $img )
                   {

                    $input['urlimage'] = Auth::User()->id.'_buyer_'.'.' .$img->getClientOriginalExtension();

                  $img->move(public_path('urlimage'), $input['urlimage']);

                   }

                 }


$passw = Hash::make($request->input('Password'));
if($request->input('Password')==NULL){
$passw =  newBuyer::where('id','LIKE',Auth::User()->id)->get()->first()->password;

}
    $buyer = newBuyer::where('id','LIKE',Auth::User()->id)->get()->first()->update([
      'password'=>$passw,
      'buyername'=>$request->input('Name'),
      'buyersurname'=>$request->input('Surname'),
      'buyeraddress'=>$request->input('Address'),
      'buyertel'=>$request->input('Tel'),
      'buyerimg'=>$input['urlimage'],
      'buyergender'=>$request->input('Gender')


    ]);
      return redirect('/buyer');

  }
    // // get signup page
    // public function signup()
    // {
    //     return view('auth.buyer-signup');
    // }
    //
    // // insert info into db in signup page
    // public function postBuyerSignup(Request $request)
    // {
    //
    //     $passw = Hash::make($request->input('Password'));
    //     newBuyer::create(['email'=>$request->input('Email'),
    //     'password'=>$passw,
    //     'BuyerName'=>$request->input('Name'),
    //     'BuyerSurname'=>$request->input('Surname'),
    //     'BuyerAddress'=>$request->input('Address'),
    //     'BuyerTel'=>$request->input('Tel'),
    //     'BuyerImg'=>$request->input('IMGURL'),
    //     'BuyerGender'=>$request->input('Gender')]) ;
    //     //dd($request.parameters) ;
    //     return redirect('/');
    // }


}
