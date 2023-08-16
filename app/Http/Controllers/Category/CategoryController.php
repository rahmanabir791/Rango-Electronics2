<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\Category\Category;

class CategoryController extends Controller
{
    protected $newCategory;


    public function addManageCategory()
    {
        return view('back.pages.category.Add_ManageCategory', [
            'newCategorys' => Category::orderBy('id', 'DESC')->get()->all(),
        ]);
    }

    public function newCategory(Request $request)
    {
        Category::newCategorys($request);
        return redirect()->back()->with('message', 'Category created successfully.');
    }


    public function editCategory($id)
    {
        return view('back.pages.category.edit_category', [
            'Categorys'   => Category::find($id),
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


}
