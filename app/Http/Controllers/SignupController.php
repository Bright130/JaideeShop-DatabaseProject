<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session ;

class SignupController extends Controller
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
        return view('mainsignup');
    }

    public function logout()
    {
      Auth::logout();
      Session::flush();
      return redirect()->intended(route('/'));
    }
}
