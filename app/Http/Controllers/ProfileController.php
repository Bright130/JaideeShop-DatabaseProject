<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session ;

class ProfileController extends Controller
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
    public function profile()
    {
        return view('profile');
    }

    public function logout()
    {
      Auth::logout();
      Session::flush();
      return redirect()->intended(route('/'));
    }
}
