<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function brand_seeAll(){
        return view('front.pages.menu.brands', [
            'brands' => Brands::orderBy('id', 'DESC')->get()
        ]);
    }
}
