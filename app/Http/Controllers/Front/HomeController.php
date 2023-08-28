<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use App\Models\Back\Slider\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.pages.home.home', [
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
            'products' => Products::inRandomOrder()->get(),
            'sliders'=> Slider::orderBy('id' , 'DESC')->get(),
        ]);
    }

        public function productDetails($id){
            return view('front.pages.details_pages.product_details' , [
                'product' => Products::find($id),
                'cartItems' => \Cart::getContent(),
                'products' => Products::inRandomOrder()->get(),
                'categories' => Category::orderBy('id', 'DESC')->get(),
                'brands' => Brands::orderBy('id', 'DESC')->get(),

            ]);

    }









}
