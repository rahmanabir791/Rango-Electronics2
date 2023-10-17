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
            'products' => Products::orderBy('id', 'ASC')->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'brands' => Brands::orderBy('id', 'ASC')->get(),
        ]);
    }

    public function CBrandProducts($id)
    {
        return view('front.pages.categoryBarView.single_brand_all' , [
            'Brands' => Brands::find($id),
            'products' => Products::orderBy('id', 'ASC')->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'brands' => Brands::orderBy('id', 'ASC')->get(),
        ]);
    }



    public function typeOfProducts($ids)
    {
        $idsArray = explode(',', $ids);

        $products = Products::whereIn('id', $idsArray)->get();

        return view('front.pages.categoryBarView.typeOfProducts', [
            'products' => $products,
            // Other variables you need to pass
            'product' => Products::orderBy('id', 'ASC')->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'brands' => Brands::orderBy('id', 'ASC')->get(),
        ]);
    }


}
