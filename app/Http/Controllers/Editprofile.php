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
        return view('editprofile')->with('user', $user);
    }


    public function editprofile(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->userName = $request->input('userName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->image = $request->input('image');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('public/img/', $filename);
            $user->image = $filename;
        }

        $user->save();
        return redirect(route('myprofile'));
    }

}
