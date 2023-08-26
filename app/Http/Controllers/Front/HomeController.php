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
        return view('front.pages.home.home', [
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
            'products' => Products::inRandomOrder()->first()->get(),
        ]);
    }

    public function brandAll($ids)
    {
        $brandIds = explode(',', $ids); // Split comma-separated IDs into an array
        $products = Products::whereIn('brand_id', $brandIds)->orderBy('id', 'DESC')->get();

        return view('front.pages.all.brandAll.brandAll', [
            'products' => $products,
        ]);
    }








}
