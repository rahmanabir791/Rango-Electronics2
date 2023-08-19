<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Category\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.pages.home', [
            'categories' => Category::orderBy('id', 'DESC')->get(),
        ]);
    }
}
