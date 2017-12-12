<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\newSeller ;
use Validator;

class SellerAuthController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:newSeller');
    }

    public function loginForm()
    {
      return view('auth.seller-login');
    }

    // get signup page
    public function signupForm()
    {
        return view('auth.seller-signup');
    }

    // insert info into db in signup page
    public function signup(Request $request)
    {


               foreach($request->IMGURL as $img ){

            $input['urlimage'] = time().'_seller'.'.' .$img->getClientOriginalExtension();

              $img->move(public_path('urlimage'), $input['urlimage']);

               }
        $passw = Hash::make($request->input('Password'));
        newSeller::create(['email'=>$request->input('Email'),
        'password'=>$passw,
        'sellername'=>$request->input('Name'),
        'sellersurname'=>$request->input('Surname'),
        'selleraddress'=>$request->input('Address'),
        'sellertel'=>$request->input('Tel'),
        'sellerimg'=>$input['urlimage'],
        'sellergender'=>$request->input('Gender')]) ;
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
      if (Auth::guard('newSeller')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('seller.dashboard'));
      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email'));
    }
}
