<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\newBuyer ;

class BuyerAuthController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:newBuyer');
    }

    public function loginForm()
    {
      return view('auth.buyer-login');
    }

    // get signup page
    public function signupForm()
    {
        return view('auth.buyer-signup');
    }

    // insert info into db in signup page
    public function signup(Request $request)
    {

        $passw = Hash::make($request->input('Password'));
        newBuyer::create(['email'=>$request->input('Email'),
        'password'=>$passw,
        'buyername'=>$request->input('Name'),
        'buyersurname'=>$request->input('Surname'),
        'buyeraddress'=>$request->input('Address'),
        'buyertel'=>$request->input('Tel'),
        'buyerimg'=>$request->input('IMGURL'),
        'buyergender'=>$request->input('Gender')]) ;
        //dd($request.parameters) ;
        return redirect('/');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('newBuyer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('buyer.dashboard'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email'));
    }
}
