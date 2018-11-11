<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function showadmin(){

        return view('admin.admins.adminList');
    }

    public function addadmin(){

        return view('admin.admins.addAdmin');
    }
}
