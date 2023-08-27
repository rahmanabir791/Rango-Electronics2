<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use Illuminate\Http\Request;

class CategoryBarController extends Controller
{
    public function CategoryAll($id)
    {
        return view('front.pages.categoryBarView.category_wise-brand' , [
            'Category' => Category::find($id),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function CBrandProducts($id)
    {
        return view('front.pages.categoryBarView.single_brand_all' , [
            'Brands' => Brands::find($id),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function typeOfProducts($id)
    {
        return view('front.pages.categoryBarView.typeOfProducts' , [
            'product' => Products::find($id),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }
}
