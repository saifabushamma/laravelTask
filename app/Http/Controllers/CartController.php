<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
//    public static function viewCart(){
//        return view('cart');
//    }
    public function Cart(){
        if (Session::get('cart') != null){
            $cartitems = Session::get('cart');
            $cartitems = array_values($cartitems);
            $carts =  Item::whereIn('itemID',$cartitems)->get();

            $cartcount = count($carts);

            for ($i = 0; $i < count($carts); $i++) {
                $carts[$i]['qty'] = Cart::GetProductQty($carts[$i]->itemID);
            }

            $total = 0;
            foreach ($carts as $cart) {

                $total += $cart->price * Cart::GetProductQty($cart->itemID);
            }

        }else{
            $carts = 0;
            $total = 0;
            $cartcount = 0;
        }

        return view('cart')
            ->with('items',$carts)
            ->with('total',$total)
            ->with('cartcount',$cartcount);
    }
    public function AddToCart(request $request,$productID)
    {
        $product = $productID;
        $quantity = $request['quantity'];
        if (Session::get('cart') != null) {

            $arraysearch = in_array(Cart::GetProductIDs($product), Cart::GetProductID(Session::get('cart')));
            if ($arraysearch == true)
            {

                $oldquantity = Cart::GetProductQty($product);

                Cart::RemoveFromCart($product . ':' . $oldquantity);



                Session::push('cart', $product . ":" . ($oldquantity + $quantity));

            }
            else
            {
                Session::push('cart', $product . ":" . $quantity);

            }
        }else{
            Session::push('cart', $product . ":" . $quantity);
        }
        return Redirect::Route('getCart');
    }

    public static function RemoveFromCart($id)
    {
        Cart::RemoveFromCart($id);
        return Redirect::back();
    }

}
