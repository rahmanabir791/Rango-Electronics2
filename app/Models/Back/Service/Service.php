<?php

namespace App\Models\Back\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected static $service;

    protected static $serviceImage;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function imageUpload ($request, $service=null)
    {
        self::$serviceImage = $request->file('ServiceImage');
        if (self::$serviceImage)
        {
            if (isset($service))
            {
                if (file_exists($service->ServiceImage))
                {
                    unlink($service->ServiceImage);
                }
            }
            self::$imageName = time().rand(10,1000).'.'.self::$serviceImage->getClientOriginalExtension();
            self::$imageDirectory = 'Back-Image/Service-Image/';
            self::$serviceImage->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        } else {
            self::$imageUrl = $service->ServiceImage;
        }
        return self::$imageUrl;
    }

    public static function newService($request)
    {
        self::$service                      = new Service();
        self::$service->ServiceName         = $request->ServiceName;
        self::$service->ServicePrice        = $request->ServicePrice;
        self::$service->ServiceCategory     = $request->ServiceCategory;
        self::$service->ServiceImage        = self::imageUpload($request);
        self::$service->description         = $request->description;
        self::$service->specification       = $request->specification;
        self::$service->save();
    }

    public static function updateService ($request, $id)
    {
        self::$service                      = Service::find($id);
        self::$service->ServiceName         = $request->ServiceName;
        self::$service->ServicePrice        = $request->ServicePrice;
        self::$service->ServiceCategory     = $request->ServiceCategory;
        self::$service->ServiceImage        = self::imageUpload($request, self::$service);
        self::$service->description         = $request->description;
        self::$service->specification       = $request->specification;
        self::$service->save();
    }
}
