<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Producttype;
use App\Productimage;
use Auth;
use App\Shop;
use Validator;
use Session;

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
      $shop = Shop::select('shopname','ShopID')->where('sellerid','=',Auth::User()->id)->orderBy('shopname','ASC')->get();
      return view('product-add',['producttypes'=>$producttypes,'shops'=>$shop]);

    }


    // insert info into db in signup page
    public function postNewProduct(Request $request)
    {

       // dd($request);
       // $validator = Validator::make($request->all(), [
       //
       //   'IMGURL' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       // ]);
       //
        Product::create(['productname'=>$request->input('pname'),
        'producttypeid'=>$request->input('ptype'),
        'productdesc'=>$request->input('desc'),
        'productprice'=>$request->input('price'),
        'shopid'=>$request->input('sid'),
        'productview'=>0,
        'quantity'=>$request->input('quantity')]);

        $product = Product::orderBy('productid', 'DESC')->first();

$i=1;

         foreach($request->IMGURL as $img ){

        $input['urlimage'] = $request->input('sid').'_'.time() .'_'.$i .'.' .$img->getClientOriginalExtension();

        $img->move(public_path('urlimage'), $input['urlimage']);

           ProductImage::create(['productid'=>$product->productid,
            'urlimage'=> $input['urlimage']
          ]);
          $i++;
         }


        return redirect('/');
    }

    public function edit($id)
    {
      $product = Product::where('productid','=',$id)->get()->first();
//d($product);
      $producttypes = Producttype::get();
      $shop = Shop::select('shopname','ShopID')->where('sellerid','=',Auth::User()->id)->orderBy('shopname','ASC')->get();
      return view('product-edit',['producttypes'=>$producttypes,'shops'=>$shop,'product'=>$product]);

    }


    public function update($id,Request $request)
    {

       // dd($request);
       // $validator = Validator::make($request->all(), [
       //
       //   'IMGURL' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       // ]);




       //
        Product::where('productid',$id)->get()->first()->update(['productname'=>$request->input('pname'),
        'producttypeid'=>$request->input('ptype'),
        'productdesc'=>$request->input('desc'),
        'productprice'=>$request->input('price'),
        'shopid'=>$request->input('sid'),
        'productview'=>0,
        'quantity'=>$request->input('quantity')]);

        $product = Product::orderBy('productid', 'DESC')->first();

$i=1;

       if($request->IMGURL!=null)
       {
         ProductImage::where('productid', $id)->delete();

         foreach($request->IMGURL as $img ){

        $input['urlimage'] = $id.'_'.time() .'_'.$i .'.' .$img->getClientOriginalExtension();

        $img->move(public_path('urlimage'), $input['urlimage']);

           ProductImage::create(['productid'=>$id,
            'urlimage'=> $input['urlimage']
          ]);
          $i++;
         }
        }


        return redirect('/');
    }
}
