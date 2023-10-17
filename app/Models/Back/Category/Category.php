<?php

namespace App\Models\Back\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected static $newCategorys;


    protected static $CategoryImage;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function uploadCategoryImage($request, $Category = null)
    {
        self::$CategoryImage = $request->file('CategoryImage');

        if (self::$CategoryImage) {
            // Delete the previous image if it exists
            if ($Category && file_exists($Category->CategoryImage)) {
                unlink($Category->CategoryImage);
            }

            self::$imageName = time() . rand(10, 1000) . '.' . self::$CategoryImage->getClientOriginalExtension();
            self::$imageDirectory = 'Back-Image/Category-Image/';
            self::$CategoryImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory . self::$imageName;
        } elseif ($Category) {
            self::$imageUrl = $Category->CategoryImage;
        } else {
            // Handle the case when $Category is null and there is no image
            self::$imageUrl = null; // Or provide a default image URL
        }

        return self::$imageUrl;
    }



    public static function newCategorys($request)
    {
        self::$newCategorys                              = new Category();
        self::$newCategorys->CategoryName                = $request->CategoryName;
        self::$newCategorys->focusKey                    = $request->focusKey;
        self::$newCategorys->metaKey                     = $request->metaKey;
        self::$newCategorys->metaTag                     = $request->metaTag;
        self::$newCategorys->Metadescription             = $request->Metadescription;
        self::$newCategorys->catDescription              = $request->catDescription;
        self::$newCategorys->ImgAlt                      = $request->ImgAlt;
        self::$newCategorys->CategoryImage               = self::uploadCategoryImage($request, null);
        self::$newCategorys->save();
    }

    public static function updateCategory ($request, $id)
    {
        self::$newCategorys                              = Category::find($id);
        self::$newCategorys->CategoryName                = $request->CategoryName;
        self::$newCategorys->focusKey                    = $request->focusKey;
        self::$newCategorys->metaKey                     = $request->metaKey;
        self::$newCategorys->metaTag                     = $request->metaTag;
        self::$newCategorys->Metadescription             = $request->Metadescription;
        self::$newCategorys->catDescription              = $request->catDescription;
        self::$newCategorys->ImgAlt                      = $request->ImgAlt;
        self::$newCategorys->CategoryImage               = self::uploadCategoryImage($request, self::$newCategorys);
        self::$newCategorys->save();
    }
}
