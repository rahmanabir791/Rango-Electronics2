<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Back\Order\OrderSubmit;
use Illuminate\Support\Facades\Storage;


class CheckoutController extends Controller
{

    public function checkOut ()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('front.pages.cart.checkout', compact('cartItems'));

    }


    public function checkOutSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            // Add validation rules for other form fields if needed
        ]);
        $invoiceNumber = 'RAN' . date('Ymd') . '-' . rand(10,1000);

        $productData = $request->input('products');

        foreach ($productData as $productIndex => $product) {
            $productName = $product['name'];
            $productQuantity = $product['quantity'];
            $productPrice = $product['price'];

            $orderItem = new OrderItem();
            $orderItem->name = $productName;
            $orderItem->quantity = $productQuantity;
            $orderItem->price = $productPrice;
            $orderItem->user_id = Auth::user()->id;
            $orderItem->p_status = $request->p_status;
            $orderItem->invoiceNumber = $invoiceNumber;
            $orderItem->save();
        }

        $data = [
            'productData' => $productData,

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'zip' => $request->zip,
            'address' => $request->address,
            // Add other form field data to $data array

            'totalAmount' => $request->totalAmount,
            'p_status' => $request->p_status,
            'remainAmount' => $request->remainAmount,
            'A_payment' => $request->A_payment,
            'f_service' => $request->f_service,
            'Transaction_num' => $request->Transaction_num,
            'invoiceNumber' => $invoiceNumber,
            'currentDate' => date('F j, Y'),
        ];

        // Generate PDF (uncomment if you're ready to use PDF generation)

//        $pdf = PDF::loadView('back.forClient.rangoInvoice', $data);
//        $pdfFileName = "{$invoiceNumber}_Rango_Electronics.pdf";
//        $pdfFilePath = storage_path("invoice/{$pdfFileName}");
//        Storage::makeDirectory(dirname($pdfFilePath));
//        $pdf->save($pdfFilePath);

        Mail::send('back.forClient.rangoEmail', $data, function($message) use ($data  ) {
            $message->to($data['email'])
                ->subject('Thanks for placing your Order');
//                ->attach($pdfFilePath, ['as' => $pdfFileName, 'mime' => 'application/pdf']);
        });

        OrderSubmit::newOrder($request , $invoiceNumber);
        \Cart::clear();
        return redirect()->back()->with('success', 'Your order has been successfully placed. A confirmation email has been sent to your email address. Please check your email inbox, including the Spam folder. We will be in touch with you as soon as possible. Thank you for your order!');

    }






}
