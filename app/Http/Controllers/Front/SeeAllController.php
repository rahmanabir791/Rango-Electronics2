<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use Illuminate\Http\Request;

class SeeAllController extends Controller
{
    public function SpecialOffer_seeAll(){
        return view('front.pages.view_all_pages.special_offer' , [
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }


    public function allProduct_seeAll()
    {
        return view('front.pages.view_all_pages.all_product' , [
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),

        ]);
    }

    public function Category_seeAll($id)
    {
        return view('front.pages.view_all_pages.category_wise' , [
            'Category' => Category::find($id),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }


    public function brandAllProducts($ids)
    {
        $brandIds = explode(',', $ids); // Split comma-separated IDs into an array
        $products = Products::whereIn('brand_id', $brandIds)->orderBy('id', 'DESC')->get();

        return view('front.pages.view_all_pages.brand_wise', [
            'productss' => $products,
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }

}
