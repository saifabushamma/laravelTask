<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     protected $redirectTo = '/shop/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->redirectTo = route('home');
    }


    public function socialLogin($social)

    {

        return Socialite::driver($social)->redirect();

    }


    public function handleProviderCallback($social)

    {

        $userSocial = Socialite::driver($social)->user();

        if ($userSocial->getEmail() != null) {

            $user = User::where(['email' => $userSocial->getEmail()])->first();

            if ($user) {

                Auth::login($user);

                return Redirect::route('home');

            } else {

                $user = new User;
                $user->username = $userSocial->getName();
                $user->email = $userSocial->getEmail();
                $user->password = Hash::make(str_random(8));
                $user->save();

                Auth::Login($user);
                return Redirect::route('home');
            }
        }else{
            return Redirect::route('home');
        }
    }


}
