<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Producttype;
use App\Productimage;
use Auth;
class ProductController extends Controller
{
  public function __construct()
  {

      $this->middleware('auth:newSeller');
  }
    // get signup page
    public function getNewProduct()
    {
        $producttypes = Producttype::get();
        return view('product-add',compact('producttypes'));
    }

    // insert info into db in signup page
    public function postNewProduct(Request $request)
    {

       // dd($request);

        Product::create(['productname'=>$request->input('pname'),
        'producttypeid'=>$request->input('ptype'),
        'productdesc'=>$request->input('desc'),
        'productprice'=>$request->input('price'),
        'shopid'=>$request->input('name','1'),
        'productview'=>$request->input('name','0'),
        'quantity'=>$request->input('quantity')]);

        $product = Product::orderBy('productid', 'DESC')->first();


         foreach($request->input('IMGURL') as $img ){
           ProductImage::create(['ProductID'=>$product->productid,
            'urlimage'=>$img]);
         }


        return redirect('/');
    }
}
