<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;

class BuyerController extends Controller
{

    // get signup page
    public function getbuyer()
    {
        return view('buyer-signup');
    }

    // insert info into db in signup page
    public function postBuyerSignup(Request $request)
    {
       
        Buyer::create(['BuyerEmail'=>$request->input('Email'),
        'BuyerPW'=>$request->input('Password'),
        'BuyerName'=>$request->input('Name'),
        'BuyerSurname'=>$request->input('Surname'),
        'BuyerAddress'=>$request->input('Address'),
        'BuyerTel'=>$request->input('Tel'),
        'BuyerImg'=>$request->input('IMGURL'),
        'BuyerGender'=>$request->input('Gender')]) ;
        //dd($request.parameters) ;
        return redirect('/');
    }
}
