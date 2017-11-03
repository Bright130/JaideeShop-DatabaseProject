<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerController extends Controller
{
    // get all seller to display in allseller page
    public function allSeller()
    {
        $sellers = Seller::get();
        return view('seller',compact('sellers'));
    }

    // get signup page
    public function getSellerSignup()
    {
        return view('seller-signup');
    }

    // insert info into db in signup page
    public function postSellerSignup(Request $request)
    {
       
        Seller::create(['SellerEmail'=>$request->input('Email'),
        'SellerPW'=>$request->input('Password'),
        'SellerName'=>$request->input('Name'),
        'SellerSurname'=>$request->input('Surname'),
        'SellerAddress'=>$request->input('Address'),
        'SellerTel'=>$request->input('Tel'),
        'SellerImg'=>$request->input('IMGURL'),
        'SellerGender'=>$request->input('Gender')]) ;
        //dd($request.parameters) ;
        return redirect('/');
    }
}
