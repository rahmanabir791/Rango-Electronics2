<?php

namespace App\Http\Controllers\Back\Category;

use App\Http\Controllers\Controller;
use App\Models\Back\Brands\Brands;
use App\Models\Back\Category\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;




class CategoryController extends Controller
{



    public function addManageCategory()
    {
        return view('back.pages.category.Add_ManageCategory', [
            'newCategorys' => Category::orderBy('id', 'ASC')->get()->all(),
        ]);
    }

    public function newCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'CategoryName' => 'required|string|max:255|unique:categories,CategoryName',
            // Add more validation rules as needed
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, create and save the new category
        Category::newCategorys($request);

        return redirect()->back()->with('message', 'Category created successfully.');
    }



    public function editCategory($id)
    {
        return view('back.pages.category.edit_category', [
            'Category'   => Category::find($id),
        ]);
    }

    public function updateCategory (Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect()->back()->with('message', 'Category updated successfully');
    }

    public function deleteCategory($id)
    {
        $this->events = Category::find($id);
        if (file_exists($this->events->image))
        {
            unlink($this->events->image);
        }
        $this->events->delete();
        return redirect()->back()->with('message-for-delete', 'Category Deleted successfully');
    }



    public function addManageBrands()
    {
        return view('back.pages.brands.Add_manageBrands', [
            'allCategorys' => Category::orderBy('id' , 'ASC')->get()->all(),
            'newBrands' => Brands::orderBy('id', 'ASC')->get()->all(),
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
            'allCategorys' => Category::orderBy('id' , 'ASC')->get()->all(),
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
