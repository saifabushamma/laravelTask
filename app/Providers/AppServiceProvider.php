<?php

namespace App\Providers;

use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;
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
        app()->setLocale($request->segment(1));

        view()->composer('layouts.app', function($view)
        {

            $categories = Category::category()->get();
            $id = Auth::id();
            $user = User::find($id);

            $view->with('user', $user)
                ->with('categories',$categories);

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
