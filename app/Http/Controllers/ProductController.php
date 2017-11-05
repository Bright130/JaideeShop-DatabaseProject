<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    // get signup page
    public function getNewProduct()
    {
        return view('product-add');
    }

    // insert info into db in signup page
    public function postNewProduct(Request $request)
    {
       
        Product::create(['Productname'=>$request->input('pname'),
        'ProductTypeID'=>$request->input('ptype'),
        'ProductDesc'=>$request->input('desc'),
        'ProductPrice'=>$request->input('price'),
        'Quantity'=>$request->input('quantity')]);

        //dd($request.parameters) ;
        return redirect('/');
    }
}
