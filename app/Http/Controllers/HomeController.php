<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session ;
use App\Product;
use App\Productimage;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function showElect()
    {
      $product = Product::where('producttypeid','=','3')->get();
      $pimg = Productimage::get();
        return view('catalogue.electronics',compact('product'),compact('pimg'));
    }
    public function showVoucher()
    {
      $product = Product::where('producttypeid','=','6')->get();
      $pimg = Productimage::get();
        return view('catalogue.voucher',compact('product'),compact('pimg'));
    }
    public function showClothing()
    {
      $product = Product::where('producttypeid','=','2')->get();
      $pimg = Productimage::get();
        return view('catalogue.clothing',compact('product'),compact('pimg'));
    }
    public function showAccessories()
    {
      $product = Product::where('producttypeid','=','10')->get();
      $pimg = Productimage::get();
        return view('catalogue.accessories',compact('product'),compact('pimg'));
    }
    public function showConsumable()
    {
      $product = Product::where('producttypeid','=','8')->get();
      $pimg = Productimage::get();
        return view('catalogue.consumables',compact('product'),compact('pimg'));
    }
    public function showStationary()
    {
      $product = Product::where('producttypeid','=','13')->get();
      $pimg = Productimage::get();
        return view('catalogue.stationary',compact('product'),compact('pimg'));
    }
    public function showBeauty()
    {
      $product = Product::where('producttypeid','=','1')->get();
      $pimg = Productimage::get();
        return view('catalogue.beauty',compact('product'),compact('pimg'));
    }
    public function showChildbaby()
    {
      $product = Product::where('producttypeid','=','4')->get();
      $pimg = Productimage::get();
        return view('catalogue.childbaby',compact('product'),compact('pimg'));
    }
    public function showFurniture()
    {
      $product = Product::where('producttypeid','=','5')->get();
      $pimg = Productimage::get();
        return view('catalogue.furniture',compact('product'),compact('pimg'));
    }
    public function showSport()
    {
      $product = Product::where('producttypeid','=','7')->get();
      $pimg = Productimage::get();
        return view('catalogue.sport',compact('product'),compact('pimg'));
    }
    public function showFood()
    {
      $product = Product::where('producttypeid','=','9')->get();
      $pimg = Productimage::get();
        return view('catalogue.food',compact('product'),compact('pimg'));
    }
    public function showGadgets()
    {
      $product = Product::where('producttypeid','=','11')->get();
      $pimg = Productimage::get();
        return view('catalogue.gadgets',compact('product'),compact('pimg'));
    }
    public function showEntertainment()
    {
      $product = Product::where('producttypeid','=','12')->get();
      $pimg = Productimage::get();
        return view('catalogue.entertainment',compact('product'),compact('pimg'));
    }
    public function showOffice()
    {
      $product = Product::where('producttypeid','=','14')->get();
      $pimg = Productimage::get();
        return view('catalogue.office',compact('product'),compact('pimg'));
    }

    public function signup()
    {
        return view('mainsignup');
    }

    public function logout()
    {
      Auth::logout();
      Session::flush();
      return redirect()->intended(route('home'));
    }
}
