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
        if ($request->input('password') == $user->password) {

        }else{
            $user->password = Hash::make($request->input('password'));

        }
        $user->image = User::storeFiles('image');

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

    public function status($id)
    {
        try {
            $user = User::find($id);
            if( isset($user)==NULL)
            {
                abort(404);
            }

         if($user->deleted_by!=NULL )
         {
             abort(404);
            }


            if ($user->status == 1)
                $user->status = 0;
            else
                $user->status = 1;
            $user->save();
            return redirect()->route('userlist');
        } catch (Exception $e) {
            return redirect()->route('home');

        }

    }

}
