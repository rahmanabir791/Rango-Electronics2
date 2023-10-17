<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use App\Models\Back\Service\Service;
use App\Models\Front\Contact\Contacts;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function brand_seeAll(){
        return view('front.pages.menu.brands', [
            'brands' => Brands::orderBy('id', 'ASC')->get(),
            'products' => Products::inRandomOrder()->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),


        ]);
    }

    public function installation ()
    {
        return view('front.pages.menu.installationService' , [
            'services' => Service::inRandomOrder()->get(),
            'products' => Products::inRandomOrder()->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'brands' => Brands::orderBy('id', 'ASC')->get(),
        ]);
    }

    public function installationDetails ($id)
    {
        return view('front.pages.details_pages.installation_Details' , [
            'service' => Service::find($id),
            'cartItems' => \Cart::getContent(),
            'products' => Products::inRandomOrder()->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'brands' => Brands::orderBy('id', 'ASC')->get(),
        ]);
    }

    public function contact ()
    {
        return view('front.pages.menu.contact',[
            'products' => Products::inRandomOrder()->get(),
            'categories' => Category::orderBy('id', 'ASC')->get(),
            'brands' => Brands::orderBy('id', 'ASC')->get(),
        ]);
    }

    public function sendMessage (Request $request)
    {
        Contacts::newMessage($request);
        return redirect()->back()->with('message', 'Message Send successfully. as  soon as possible we will connect you');
    }
}
