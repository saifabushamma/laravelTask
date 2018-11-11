<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    public static function GetProductIDs($id)
    {
        $cartItems = Session::get('cart');

        $cartItems = array_values($cartItems);
        for ($i = 0; $i < count($cartItems); $i++)
        {
            $item = explode(':',$cartItems[$i]);
            if($item[0] == $id)
            {
                return $id;
            }
        }
        return 0;
    }

    public static function GetProductID($productcart)
    {
        $productcarts = array_values($productcart);
        $result = [];

        for($i=0; $i< count($productcarts); $i++) {


            array_push($result, explode(':', $productcarts[$i])[0]);

        }
        return $result;


    }

    public static function GetProductQty($id)
    {
        $cart = Session::get('cart');

        $cart = array_values($cart);
        for ($i = 0; $i < count($cart); $i++)
        {
            $item = explode(':',$cart[$i]);
            if($item[0] == $id)
            {
                return $item[1];
            }
        }
        return 0;
    }

    public static function RemoveFromCart($id)
    {
        $ProductsCart = Session::get('cart');
        if (($key = array_search($id, $ProductsCart)) !== false) {
            unset($ProductsCart[$key]);
            session()->pull('cart.' . $key);
        }
    }


}
