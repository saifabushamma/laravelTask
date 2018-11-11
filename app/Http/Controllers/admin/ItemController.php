<?php

namespace App\Http\Controllers\admin;
use App\Category;
use App\User;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function showitem(){



        $items = Item::all();
        foreach($items as $item)
        {
            $item['addedBy'] = User::find($item->users_id)->userName;
        }

        return view('admin.items.itemsList')->with('items', $items);
    }

    public function additems(){

        $categories = Category::category()->get();
        return view('admin.items.addItems')->with('categories',$categories);
    }

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
    return redirect()->route('itemlist');
    }

    public function edititem($itemID){
        $itemID = Item::find($itemID);
        if ($itemID == null)
            abort('404');
        $categories = Category::category()->get();
        return view('admin.items.edit')->with('item',$itemID)
                ->with('categories',$categories);
    }

    public function submitedit(Request $request,$itemID)
    {
        $item = Item::find($itemID);
        if ($item == null)
            abort('404');
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

        return redirect()->route('itemlist');
    }



    public function deleteitem($id){
        $item = Item::find($id);
        if ($item == null)
            abort('404');
        $category = Category::category()->where('categoryID',$item->category_categoryID)->first();
        $user = User::find($item->users_id);
        return view('admin.items.delete')->with('item', $item)
            ->with('user',$user)->with('category',$category);
    }

        public function destroy($id){
        $item = Item::find($id);
            if ($item == null)
                abort('404');
        if($item != null)
            $item->delete();
        return redirect()->route('itemlist');
        }

    public function itemdetails($id){
        $item = Item::find($id);
        if ($item == null)
            abort('404');
        $category = Category::category()->where('categoryID',$item->category_categoryID)->first();
        $user = User::find($item->users_id);

        return view('admin.items.details')->with('item', $item)
            ->with('user',$user)->with('category',$category);

        }



    public function status($itemID)
    {
        try {
            $item = Item::find($itemID);
            if( isset($item)==NULL)
            {
                abort(404);
            }

            if($item->deleted_by!=NULL )
            {
                abort(404);
            }


            if ($item->status == 1)
                $item->status = 0;
            else
                $item->status = 1;
            $item->save();
            return redirect()->route('itemlist');
        } catch (Exception $e) {
            return redirect()->route('home');

        }

    }
}
