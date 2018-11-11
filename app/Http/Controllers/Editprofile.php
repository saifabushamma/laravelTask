<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Editprofile extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function editprofileForm()
    {
        $id = Auth::id();
        $user = User::find($id);
        if ($user == null)
            abort('404');
        return view('editprofile')->with('user', $user);
    }


    public function editprofile(Request $request)
    {


        $id = Auth::id();
        $user = User::find($id);
        $user->userName = $request->input('userName');
        $user->email = $request->input('email');
        if ($request->input('password') == $user->password) {

        }else{
            $user->password = Hash::make($request->input('password'));

        }
        $user->image = User::storeFiles('image');



        $user->save();
        return redirect(route('myprofile'));
    }

}
