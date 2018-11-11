<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Currency extends Model
{
    protected $table = 'currency';
    protected $fillable = [
      'country_en',
        'country_ar',
        'currency_en',
        'currency_ar',
        'value',
    ];
    protected $primaryKey = 'currencyID';
    public static function CoverToUSD($amount){
        $USD = $amount / Session::get('currency')[0]->vlaue;

        return $USD;
    }
    public static function ConvertFromUSD($USD)
    {
        $amount = $USD * Session::get('currency')[0]->value;

        return $amount;
    }
}
