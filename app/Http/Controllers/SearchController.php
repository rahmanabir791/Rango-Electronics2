<?php

namespace App\Http\Controllers;

use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use App\Models\Back\Products\Products;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $categories = Category::where('CategoryName', 'LIKE', "%$query%")->get();
        $brands = Brands::where('BrandName', 'LIKE', "%$query%")->get();
        $products = Products::where('productName', 'LIKE', "%$query%")
            ->orWhere('MRP_price', 'LIKE', "%$query%")
            ->orWhere('O_price', 'LIKE', "%$query%")
            ->orWhere('product_type', 'LIKE', "%$query%")
            ->get();

        return view('search_results', compact('categories', 'brands', 'products'));
    }
}
