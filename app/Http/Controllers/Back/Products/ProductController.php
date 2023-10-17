<?php

namespace App\Http\Controllers\Back\Products;

use App\Http\Controllers\Controller;
use App\Models\Back\Products\Products;
use Illuminate\Http\Request;
use App\Models\Back\Category\Category;
use App\Models\Back\Brands\Brands;

class ProductController extends Controller
{
    protected $product;
    public function addProduct()
    {
        return view('back.pages.products.addProducts',[
            'Categories' => Category::orderBy('id' , 'ASC')->get(),
            'Brands' => Brands::orderBy('id' , 'ASC')->get(),
        ]);
    }

    public function newProduct(Request $request)
    {
        Products::newProduct($request);
        return redirect()->back()->with('message', 'Product Uploaded successfully.');
    }

    public function manageProduct($category_id)
    {
        $brands = Brands::orderBy('id', 'ASC')->get(); // Retrieve brands

        $products = Products::where('category_id', $category_id)
            ->orderBy('id', 'DESC')
            ->get(); // Retrieve products for the specified category_id

        return view('back.pages.products.manageProducts', compact('brands', 'products', 'category_id'));
    }


    public function editProduct($id)
    {
        return view('back.pages.products.editProducts', [
            'product'   => Products::find($id),
            'Categories' => Category::orderBy('id' , 'ASC')->get(),
            'Brands' => Brands::orderBy('id' , 'ASC')->get(),
        ]);
    }

    public function updateProduct (Request $request, $id)
    {
        Products::updateProduct($request, $id);
        return redirect()->back()->with('message', 'product updated successfully');
    }

    public function stockAvailability (Request $request, $id)
    {
        Products::stockAvailabilityUpdate($request, $id);
        return redirect()->back()->with('message', 'Stock Availability updated successfully');
    }

    public function specialOffer (Request $request, $id)
    {
        Products::specialOffer($request, $id);
        return redirect()->back()->with('message', 'Update Special Offer successfully');
    }

    public function deleteProduct($id)
    {
        $this->product = Products::find($id);
        if (file_exists($this->product->image))
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('message-for-delete', 'product deleted successfully');
    }

}
