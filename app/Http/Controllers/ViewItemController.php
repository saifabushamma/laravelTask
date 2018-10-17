<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewItemController extends Controller
{


        public  function viewItem($id){



            $item = Item::find($id);
            if ($item == null)
                abort('404');
            $category = Category::category()->where('categoryID',$item->category_categoryID)->first();
            $user = User::find($item->users_id);
            $comments = Comment::all()->where('items_itemID', $id);

            foreach ($comments as $comment) {

                $comment['user'] = User::find($comment->users_id);
            }
            return view('viewItem')->with('item', $item)
                ->with('user',$user)->with('comments', $comments)
                ->with('category',$category);
        }

        public function comment(Request $request, $id){
            $userid = Auth::id();
            $comment = new Comment();
            $comment->comment = $request->input('comment');
            $comment->users_id = $userid;
            $comment->items_itemID = $id;
            $comment->save();

            return back();

        }






}
