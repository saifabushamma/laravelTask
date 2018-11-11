<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CurrencyController extends Controller
{
    public function ChangeCurrency($currencyID)
    {
        Session::forget('currency');
        $currency = Currency::where('currencyID',$currencyID)->first();
        Session::push('currency',$currency);
        return redirect()->back();
    }
}
