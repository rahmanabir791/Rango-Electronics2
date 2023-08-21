<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.pages.home', [
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
            'products' => Products::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function checkOut ()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('front.pages.cart.checkout', compact('cartItems'));

    }
}
