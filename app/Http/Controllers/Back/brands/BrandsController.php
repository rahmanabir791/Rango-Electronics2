<?php

namespace App\Http\Controllers\back\brands;

use App\Http\Controllers\Controller;
use App\Models\Back\Category\Category;
use Illuminate\Http\Request;
use App\Models\Back\Brands\Brands;

class BrandsController extends Controller
{

    public function addManageBrands()
    {
        return view('back.pages.brands.Add_ManageBrands', [
            'allCategorys' => Category::orderBy('id' , 'DESC')->get()->all(),
            'newBrands' => Brands::orderBy('id', 'DESC')->get()->all(),
        ]);
    }

    public function newBrands(Request $request)
    {
        Brands::newBrand($request);
        return redirect()->back()->with('message', 'Brand Created successfully.');
    }


    public function editBrand($id)
    {
        return view('back.pages.brands.edit_brands', [
            'Brands'   => Brands::find($id),
            'allCategorys' => Category::orderBy('id' , 'DESC')->get()->all(),
        ]);
    }

    public function updateBrand (Request $request, $id)
    {
        Brands::updateBrand($request, $id);
        return redirect()->back()->with('message', 'Brand updated successfully');
    }

    public function deleteBrand($id)
    {
        $this->events = Brands::find($id);
        if (file_exists($this->events->image))
        {
            unlink($this->events->image);
        }
        $this->events->delete();
        return redirect()->back()->with('message-for-delete', 'Brand Deleted successfully');
    }

}
