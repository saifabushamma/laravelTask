<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use Illuminate\Support\Facades\Redirect;

class EditItemController extends Controller
{




    public function editItem($itemID)

    {       $itemID = Item::find($itemID);

            $categories = Category::category()->get();
        if ($itemID == null)
            abort('404');
        return view('editItem')->with('item',$itemID)
            ->with('categories',$categories);
    }





    public function updateItem(Request $request,$itemID)
    {
        $item = Item::find($itemID);
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->country = $request->input('country');
        $item->image = $request->input('image');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('public/img/', $filename);
            $item->image = $filename;
        }

        $item->save();

        return Redirect::route('myItem');
    }
    public function deleteItem($itemID)
    {
        $item =  Item::find($itemID);
        if ($item != null)
        {
            $item->delete();
        }

        return Redirect::back();
    }
}
