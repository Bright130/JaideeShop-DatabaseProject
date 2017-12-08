<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newSeller;

class SellerController extends Controller
{
    // get all seller to display in allseller page
    public function __construct()
    {

        $this->middleware('auth:newSeller');
    }

      public function index()
      {
        $thisEmail = Auth::User()->email ;
        $sellerinfo = newSeller::get();
        return view('seller.index',compact('sellerinfo')) ;
      }
}
