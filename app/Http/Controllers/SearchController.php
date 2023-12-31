<?php

namespace App\Http\Controllers;

use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use App\Models\Back\Service\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function frontSearch(Request $request)
    {
        $query = $request->input('query');

        $categoryResults = Category::where('CategoryName', 'LIKE', "%$query%")->get();
        $brandResults = Brands::where('BrandName', 'LIKE', "%$query%")->get();

        $categoryIds = $categoryResults->pluck('id')->toArray();
        $brandIds = $brandResults->pluck('id')->toArray();

        $productss = Products::where('productName', 'LIKE', "%$query%")
            ->orWhere('product_type', 'LIKE', "%$query%")
            ->orWhere('focusKey', 'LIKE', "%$query%")
            ->orWhere('metaKey', 'LIKE', "%$query%")
            ->orWhere('metaTag', 'LIKE', "%$query%")
            ->orWhere('specifications', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->orWhere('warranty', 'LIKE', "%$query%")
            // ... other product search criteria ...
            ->orWhereIn('category_id', $categoryIds)
            ->orWhereIn('brand_id', $brandIds)
            ->with('category', 'brand')
            ->get();

        $services = Service::where('serviceName', 'LIKE', "%$query%")->get();
        $products = Products::inRandomOrder()->get();
        $categories = Category::orderBy('id', 'ASC')->get();
        $brands = Brands::orderBy('id', 'ASC')->get();

        return view('front.pages.searchView.searchResult', compact('categoryResults', 'brandResults', 'productss', 'services', 'products', 'categories', 'brands'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $categoryResults = Category::where('CategoryName', 'LIKE', "%$query%")->get();
        $brandResults = Brands::where('BrandName', 'LIKE', "%$query%")->get();

        $categoryIds = $categoryResults->pluck('id')->toArray();
        $brandIds = $brandResults->pluck('id')->toArray();

        $productss = Products::where('productName', 'LIKE', "%$query%")
            ->orWhere('product_type', 'LIKE', "%$query%")
            ->orWhere('warranty', 'LIKE', "%$query%")
            // ... other product search criteria ...
            ->orWhereIn('category_id', $categoryIds)
            ->orWhereIn('brand_id', $brandIds)
            ->with('category', 'brand')
            ->get();

        $services = Service::where('serviceName', 'LIKE', "%$query%")->get();
        $products = Products::inRandomOrder()->get();
        $categories = Category::orderBy('id', 'ASC')->get();
        $brands = Brands::orderBy('id', 'ASC')->get();

        return view('search_results', compact('categoryResults', 'brandResults', 'productss', 'services', 'products', 'categories', 'brands'));
    }

}
