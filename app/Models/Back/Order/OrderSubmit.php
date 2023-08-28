<?php

namespace App\Models\Back\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderSubmit extends Model
{
    use HasFactory;
    protected static $order;



//
    public static function newOrder($request , $invoiceNumber)
    {



        self::$order                   =       new OrderSubmit();
        self::$order->user_id          =       Auth::user()->id;
        self::$order->totalAmount      =       $request->totalAmount;
        self::$order->p_status         =       $request->p_status;
        self::$order->remainAmount     =       $request->remainAmount;
        self::$order->A_payment        =       $request->A_payment;
        self::$order->f_service        =       $request->f_service;
        self::$order->Transaction_num  =       $request->Transaction_num;
        self::$order->name             =       $request->name;
        self::$order->email            =       $request->email;
        self::$order->phone            =       $request->phone;
        self::$order->city             =       $request->city;
        self::$order->zip              =       $request->zip;
        self::$order->address          =       $request->address;
        self::$order->invoiceNumber    =       $invoiceNumber;
            // Save the model
        self::$order->save();
        }


    public static function deliveryReport ($request, $id)
    {
        self::$order                    =      OrderSubmit::find($id);
        self::$order->delivered         =      $request->delivered;
        self::$order->save();
    }


}
