<?php

namespace App\Models\Back\Slider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected static $slider;

    protected static $slidImage;
    protected static $slidImageName;
    protected static $slidImageDirectory;
    protected static $slidImageUrl;

    public static function imageUpload ($request, $slider=null)
    {
        self::$slidImage = $request->file('slidImage');
        if (self::$slidImage)
        {
            if (isset($slider))
            {
                if (file_exists($slider->image))
                {
                    unlink($slider->image);
                }
            }
            self::$slidImageName = time().rand(10,1000).'.'.self::$slidImage->getClientOriginalExtension();
            self::$slidImageDirectory = 'Back-Image/Slider-Image/';
            self::$slidImage->move(self::$slidImageDirectory, self::$slidImageName);
            self::$slidImageUrl = self::$slidImageDirectory.self::$slidImageName;
        } else {
            self::$slidImageUrl = $slider->image;
        }
        return self::$slidImageUrl;
    }

    public static function newSlider($request)
    {
        self::$slider                      = new Slider();
        self::$slider->sliderStext         = $request->sliderStext;
        self::$slider->sliderBtext         = $request->sliderBtext;
        self::$slider->slidImage           = self::imageUpload($request);
        self::$slider->save();
    }


}
