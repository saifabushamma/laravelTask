<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;
use function PHPSTORM_META\elementType;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showProducts(Request $request)
    {
        if($request->segment(4) != null)
        {
            $categories = Category::category()->where('categoryID',$request->segment(4))->first();
            if ($categories == null)
                abort(404);
            $name = $categories->name;
            $items = Item::all()->where('category_categoryID', $categories->categoryID);
            return view('home')->with('items', $items)->with('name',$name);

        }else
        {

            $items = Item::where('status', '=', '0')->get();
            return view('home')->with('items', $items);


        }


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
