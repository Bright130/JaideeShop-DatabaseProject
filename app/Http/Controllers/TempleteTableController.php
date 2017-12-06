<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Shoptype;
use App\Account;

class TempleteTableController extends Controller
{

    // get signup page
    public function getTable()
    {

        $shoptypes = Shoptype::get();
        return view('templete-table',compact('shoptypes'));
    }

    // insert info into db in signup page

}
