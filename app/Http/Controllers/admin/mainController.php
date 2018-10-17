<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mainController extends Controller
{
    public function showadmin()
    {

        $countusers = Count(User::all());
        $countitems = Count(Item::all());
        $countcategory = Count(Category::all());


        $stats= [
            'userC'=>$countusers,
            'itemC'=>$countitems,
            'categoryC'=>$countcategory,
        ];
        return view('admin.main')->with('stats',$stats);
    }



}