<?php

namespace App\Models\Back\Brands;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected static $brand;

    protected static $BrandImage;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function uploadBrandImage($request, $brand = null)
    {
        self::$BrandImage = $request->file('BrandImage');

        if (self::$BrandImage) {
            // Delete the previous image if it exists
            if ($brand && file_exists($brand->BrandImage)) {
                unlink($brand->BrandImage);
            }

            self::$imageName = time() . rand(10, 1000) . '.' . self::$BrandImage->getClientOriginalExtension();
            self::$imageDirectory = 'Back-Image/Brands-Image/';
            self::$BrandImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory . self::$imageName;
        } elseif ($brand) {
            self::$imageUrl = $brand->BrandImage;
        } else {
            // Handle the case when $brand is null and there is no image
            self::$imageUrl = null; // Or provide a default image URL
        }

        return self::$imageUrl;
    }


    public static function newBrand($request)
    {
        self::$brand = new Brands();

        self::$brand->category_id = $request->category_id;

        self::$brand->BrandName = $request->BrandName;

        self::$brand->BrandImage = self::uploadBrandImage($request, null); // Pass null for $brand when creating a new brand

        self::$brand->save();
    }


    public static function updateBrand ($request, $id)
    {
        self::$brand                      = Brands::find($id);
        self::$brand->category_id         = $request->category_id;
        self::$brand->BrandName           = $request->BrandName;
        self::$brand->BrandImage           = self::uploadBrandImage($request, self::$brand);
        self::$brand->save();
    }

}
