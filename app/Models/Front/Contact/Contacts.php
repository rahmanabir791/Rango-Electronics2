<?php

namespace App\Models\Front\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
 protected static $message;
    public static function newMessage($request)
    {
        self::$message               = new Contacts();
        self::$message->name         = $request->name;
        self::$message->email        = $request->email;
        self::$message->subject      = $request->subject;
        self::$message->message      = $request->message;
        self::$message->save();
    }

}
