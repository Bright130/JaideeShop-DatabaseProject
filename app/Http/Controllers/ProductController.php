<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Producttype;

class ProductController extends Controller
{

    // get signup page
    public function getNewProduct()
    {
        $producttypes = Producttype::get();
        return view('product-add',compact('producttypes'));
    }

    // insert info into db in signup page
    public function postNewProduct(Request $request)
    {
        
        Product::create(['Productname'=>$request->input('pname'),
        'ProductTypeID'=>$request->input('ptype'),
        'ProductDesc'=>$request->input('desc'),
        'ProductPrice'=>$request->input('price'),
        'ShopID'=>$request->input('name','1'),
        'Productview'=>$request->input('name','0'),
        'Quantity'=>$request->input('quantity')]);

        
        return redirect('/');
    }
}
