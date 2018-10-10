<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyItemController extends Controller
{
    public function myItem(){

        return view('myItem');
    }

    public function viewMyItems()
    {
        $id = Auth::id();
        $items = Item::all()->where('users_id', $id);
        return view('myItem')->with('items', $items);

    }

}



