<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newBuyer;

class BuyerController extends Controller
{

  public function __construct()
  {

      $this->middleware('auth:newBuyer');
  }

    public function index()
    {
      $buyerinfo = newBuyer::get();
      return view('buyer.index',compact('buyerinfo')) ;
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
