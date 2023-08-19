<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Category\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard (){
        return view('back.pages.home');
    }
}
