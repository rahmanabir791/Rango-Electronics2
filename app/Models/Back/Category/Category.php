<?php

namespace App\Models\Back\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected static $newCategorys;




    public static function newCategorys($request)
    {
        self::$newCategorys                              = new Category();
        self::$newCategorys->CategoryName                = $request->CategoryName;
        self::$newCategorys->save();
    }

    public static function updateCategory ($request, $id)
    {
        self::$newCategorys                              = Category::find($id);
        self::$newCategorys->CategoryName                = $request->CategoryName;
        self::$newCategorys->save();
    }
}
