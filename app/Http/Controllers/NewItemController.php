<?php

namespace App\Http\Controllers;
use App\Category;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewItemController extends Controller
{
  public function newItem(){
      $categories = Category::category()->get();
      return view('newItem')
          ->with('categories',$categories);}



    public function createNewItem(Request $request)
    {
        $id = Auth::id();
        $newItem = new Item();
        $newItem->name = $request->input('name');
        $newItem->description = $request->input('description');
        $newItem->price = $request->input('price');
        $newItem->country = $request->input('country');
        $newItem->category_categoryID = $request->input('category');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('public/img/', $filename);
            $newItem->image = $filename;
        }
        $newItem->users_id = $id;
        $newItem->save();

        return redirect(route('home'));
    }


}
