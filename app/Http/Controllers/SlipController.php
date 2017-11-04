<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slip ;
class SlipController extends Controller
{
    // // get all seller to display in allseller page
    // public function allSeller()
    // {
    //     $sellers = Seller::get();
    //     return view('seller',compact('sellers'));
    // }

    // get signup page
    public function getSlipForm()
    {
        return view('slip-form');
    }

    // insert info into db in signup page
    public function postSlipForm(Request $request)
    {
      
        Slip::create(['orderid'=>$request->input('OrderID'),
        'accountno'=>$request->input('AccountNo'),
        'amountmoney'=>$request->input('Amount'),
        'transfertype'=>$request->input('Type'),
        'transferfrom'=>$request->input('accFrom'),
        'sliptime'=>$request->input('Slip')]) ;
        //dd($request.parameters) ;
        return redirect('/');
    }
}
