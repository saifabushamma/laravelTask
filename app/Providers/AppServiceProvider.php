<?php

namespace App\Providers;

use App\Category;
use App\Currency;
use App\Item;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $Currency = Currency::where('currency_en','SAR')->first();
        if (Session::get('currency') == null)
        {
            Session::push('currency',$Currency);
        }


        app()->setLocale($request->segment(1));

        $user=User::where('username',$request->username)->first();
        If($user!=NULL)
            if($user->status == 1||$user->deleted_by != NULL)
            {
                abort(404);
            }

        view()->composer('layouts.app', function($view)
        {
            $currencies = Currency::select('currencyID','country_'.App::getLocale() . " " . "as country_en",
                'country_' .  App::getLocale() . " " ."as currency_en",
                'currency_en', 'value', 'created_at','updated_at')->get();
            $categories = Category::category()->get();
            $id = Auth::id();
            $user = User::find($id);

            $view->with('user', $user)
                ->with('categories',$categories)->with('currencies',$currencies);

        });
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }



}
