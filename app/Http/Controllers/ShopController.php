<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Shoptype;
use App\Account;
use App\newSeller;
use Auth;
use Hash;

class ShopController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth:newSeller');
    }
    // get signup page
    public function index($id=null)
    {
      if($id == null)
      {
        return redirect()->intended(route('seller.dashboard'));
      }

      $sid = Auth::User()->id;

      $shops = Shop::select('shopname','ShopID')->where('sellerid','=',Auth::User()->id)->orderBy('shopname','ASC')->get();

      $thisEmail = Auth::User()->email ;


      $sellerinfo = newSeller::where('id','LIKE',$sid)->get()->first();



      $detail = Shop::where([['ShopID','=',$id],['sellerid','=',$sid]])->get()->first();


// if($detail->isEmpty())
// {
//     return redirect()->intended(route('seller.dashboard'));
// }

      return view('seller.shop',['detail'=>$detail,'sellerinfo'=>$sellerinfo,'id'=>$sid,'shops'=>$shops]);




    }

    public function getNewShop()
    {
        $id = Auth::User()->id;
        $shoptypes = Shoptype::get();
        return view('seller.shopcreate',compact('shoptypes'));
    }


    public function destroy($id)
    {
        $id = Auth::findOrfail($id);
        $shoptypes->delete();
        return redirect('seller.shopcreate',compact('shoptypes'));
    }


    // insert info into db in signup page
    public function postNewShop(Request $request)
    {
       //ดึง seller ID มา
       $uid = Auth::User()->id;
       $uname = Auth::User()->sellername;


if(Hash::check($request->input('pw'), Auth::User()->password))
      {
        $i=1;

                 foreach($request->IMGURL as $img ){

                $input['urlimage'] = $request->input('sid').'_'.time() .'_'.$i .'.' .$img->getClientOriginalExtension();

                $img->move(public_path('urlimage'), $input['urlimage']);

                  $i++;
                 }


         Shop::create(['ShopName'=>$request->input('shopname'),
        'sellerid'=>$uid,
        'shoptypeid'=>$request->input('shoptype'),
        'ShopDesc'=>$request->input('desc'),
        'ShopImg'=>$input['urlimage'],
        'ShopView'=>0]);

        //ดึง shop ID มา

        $sid = Shop::select('shopid')->where('shopname','LIKE',$request->input('shopname'))->first()->shopid;

        Account::create(['accountno'=>$request->input('bankacc'),
        'accountname'=>$uname,
        'bankname'=>$request->input('bankname'),
        'ShopID'=>$sid]);
        //dd($request.parameters) ;
        return redirect('/');
      }
        return redirect()->back();
    }



        public function edit($id)
        {

            $sid = Auth::User()->id;

            $shops = Shop::select('shopname','ShopID')->where('sellerid','=',Auth::User()->id)->orderBy('shopname','ASC')->get();

            $shoptypes = Shoptype::get();


            $sellerinfo = newSeller::where('id','LIKE',$sid)->get()->first();



            $detail = Shop::where([['ShopID','=',$id],['sellerid','=',$sid]])->get()->first();

      $acc = Account::where([['ShopID','=',$id]])->first();


            if($detail==null)
            {
                return redirect()->intended(route('seller.dashboard'));
            }

            return view('seller.shopedit',['detail'=>$detail,'sellerinfo'=>$sellerinfo,'id'=>$sid,'shops'=>$shops,'shoptypes'=>$shoptypes,'acc'=>$acc]);



        }

        public function update($id , Request $request)
        {

            $input['urlimage'] = Shop::where('shopid','=',$id)->get()->first()->shopimg;


              if($request->IMGURL!=null)
              {

                  foreach($request->IMGURL as $img )
                  {

                      $input['urlimage'] = Auth::User()->id.'_seller_'.'.' .$img->getClientOriginalExtension();

                      $img->move(public_path('urlimage'), $input['urlimage']);

                  }
              }

    $iid =$id;
          Shop::where('shopid',$iid)->get()->first()->update([
                            'ShopName'=>$request->input('shopname'),

                            'shoptypeid'=>$request->input('shoptype'),
                            'ShopDesc'=>$request->input('desc'),
                            'ShopImg'=>$input['urlimage']


                      ]);

    //
    //
    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    //
    // $sql = "UPDATE Account SET ShopName="+$request->input('shopname')+" WHERE shopid="+$id;
    //
    // if ($conn->query($sql) === TRUE) {
    //     echo "Record updated successfully";
    // } else {
    //     echo "Error updating record: " . $conn->error;
    // }
    //
    // $conn->close();
    //
    //






            Account::where('shopid','=',$iid)->get()->first()->update([
                      'accountno'=>$request->input('bankacc'),
                      'accountname'=>$request->input('name','Peat'),
                      'bankname'=>$request->input('bankname')]);
            return redirect('/seller');

        }

}
