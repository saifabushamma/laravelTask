<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected function validateThis($request)
    {
        $this->validate($request,[
            'username'=>'required|unique:users',
            'email' => 'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);
    }


    public function showusers(){
            $users=User::all();

        return view('admin.users.userList')->with('users',$users);
    }

    public function addusers(){
        return view('admin.users.addUser');
    }


    public function store(request $request)
    {

        $this->validateThis($request);

        User::store($request->all());
        return redirect()->route('userlist');
    }

    public function showuser(Request $request){
        $newuser = new User();
        $newuser->userName = $request->input('username');
        $newuser->email = $request->input('email');
        $newuser->save();
        return view('admin.users.userList');
    }

    public function edituser($id){
        $user=User::find($id);
        if ($user == null)
            abort('404');
        return view('admin.users.edit')->with('user', $user);

    }


    public function submitedit(Request $request, $id)
    {
        $user = User::find($id);
        if ($user == null)
            abort('404');
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
        return redirect(route('userlist'));
    }

    public function deleteuser($id){
        $user = User::find($id);
        if ($user == null)
            abort('404');
        return view('admin.users.delete')->with('user',$user);

    }

    public function destroy($id){
        $user = User::find($id);
        if($user != null)
            $user->delete();
        return redirect()->route('userlist');
    }

    public function userdetails($id){
        $user = User::find($id);
        if ($user == null)
            abort('404');

        return view('admin.users.details')->with('user', $user);

    }


        //
}
