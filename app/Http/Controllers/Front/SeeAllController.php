<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use Illuminate\Http\Request;

class SeeAllController extends Controller
{
    public function SpecialOffer_seeAll(){
        return view('front.pages.view_all_pages.special_offer' , [
            'products' => Products::inRandomOrder()->first()->get(),
        ]);
    }


    public function allProduct_seeAll()
    {
        return view('front.pages.view_all_pages.all_product' , [
            'products' => Products::inRandomOrder()->first()->get(),
        ]);
    }

    public function Category_seeAll($id)
    {
        return view('front.pages.view_all_pages.category_wise' , [
            'Category' => Category::find($id),
            'products' => Products::inRandomOrder()->first()->get(),
        ]);
    }

}
