<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Back\Products\Products;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('front.pages.cart.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
//        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->back()->with('message' , 'Product is Added to Cart Successfully !' );
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );



        return redirect()->route('cart.list')->with('message' , 'Item Cart is Updated Successfully !');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
//        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list')->with('message' , 'Item Cart Remove Successfully !');
    }

    public function clearAllCart()
    {
        \Cart::clear();

//        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list')->with('message' , 'All Item Cart Clear Successfully !');
    }
}
