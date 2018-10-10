<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public  function  myProfile(){
        $id = Auth::id();
        $user = User::find($id);
        return view('myProfile')->with('user', $user);
    }
}





