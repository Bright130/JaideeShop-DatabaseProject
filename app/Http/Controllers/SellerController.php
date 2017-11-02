<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerController extends Controller
{
    public function allSeller()
    {
        $sellers = Seller::get();
     
        return view('seller',compact('sellers'));
    }

    public function getSellerSignup()
    {
        return view('seller-signup');
    }

    public function postSellerSignup(Request $request)
    {
        dd($request) ;
        return view('index');
    }
}
