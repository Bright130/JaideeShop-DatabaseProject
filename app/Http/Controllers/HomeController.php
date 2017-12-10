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
        return view('electronics',compact('product'),compact('pimg'));
    }
    public function checkout()
    {
        return view('checkout');
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
