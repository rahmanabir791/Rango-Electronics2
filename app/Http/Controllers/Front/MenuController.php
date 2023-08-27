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
            'brands' => Brands::orderBy('id', 'DESC')->get(),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),


        ]);
    }

    public function installation ()
    {
        return view('front.pages.menu.installationSevice' , [
            'services' => Service::inRandomOrder()->first()->get(),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function installationDetails ($id)
    {
        return view('front.pages.details_pages.installation_Details' , [
            'service' => Service::find($id),
            'cartItems' => \Cart::getContent(),
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function contact ()
    {
        return view('front.pages.menu.contact',[
            'products' => Products::inRandomOrder()->first()->get(),
            'categories' => Category::orderBy('id', 'DESC')->get(),
            'brands' => Brands::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function sendMessage (Request $request)
    {
        Contacts::newMessage($request);
        return redirect()->back()->with('message', 'Service Created successfully.');
    }
}
