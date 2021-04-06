<?php

namespace App\Http\Controllers;

use App\Models\Disques;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){

        $cartItems=Cart::content();
        return view("card.index",['cartItems' => $cartItems]);
    }

    public function addItem($id){
        $disque=Disques::findOrFail($id);
      Cart::add($id,$disque->title,1,$disque->author,['img'=>$disque->image],$disque->price);

            return back();
    }
}
