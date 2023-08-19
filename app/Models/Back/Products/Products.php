<?php

namespace App\Models\Back\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected static $product;

    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function imageUpload ($request, $product=null)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            if (isset($product))
            {
                if (file_exists($product->image))
                {
                    unlink($product->image);
                }
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory = 'Back-Image/Product-Image/image/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        } else {
            self::$imageUrl = $product->image;
        }
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        self::$product                      = new Products();
        self::$product->productName           = $request->productName;
        self::$product->category_id           = $request->category_id;
        self::$product->brand_id              = $request->brand_id;
        self::$product->product_type          = $request->product_type;
        self::$product->MRP_price             = $request->MRP_price;
        self::$product->O_price               = $request->O_price;
        self::$product->image                 = self::imageUpload($request);
        self::$product->warranty              = $request->warranty;
        self::$product->features              = $request->features;
        self::$product->specifications        = $request->specifications;
        self::$product->stockAvailability     = $request->stockAvailability;
        self::$product->save();
    }

    public static function updateProduct ($request, $id)
    {
        self::$product                        = Products::find($id);
        self::$product->productName           = $request->productName;
        self::$product->category_id           = $request->category_id;
        self::$product->brand_id              = $request->brand_id;
        self::$product->product_type          = $request->product_type;
        self::$product->MRP_price             = $request->MRP_price;
        self::$product->O_price               = $request->O_price;
        self::$product->image                 = self::imageUpload($request, self::$product);
        self::$product->warranty              = $request->warranty;
        self::$product->features              = $request->features;
        self::$product->specifications        = $request->specifications;
        self::$product->save();
    }

    public static function stockAvailabilityUpdate ($request, $id)
    {
        self::$product                        = Products::find($id);
        self::$product->stockAvailability     = $request->stockAvailability;
        self::$product->save();
    }
}
