<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Category\Category;
use App\Models\Back\Order\OrderSubmit;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function dashboard ()
    {
        return view('back.pages.home', [
            'clients' => OrderSubmit::orderBy('id' , 'DESC')->get()->all(),
            'items'   => OrderItem::orderBy('id' , 'DESC')->get()->all(),
        ]);
    }


    public function downloadInvoice($invoiceNumber)
    {
        $filePath = storage_path("invoice/{$invoiceNumber}_Rango_Electronics.pdf");

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            // Handle the case when the file does not exist
            return response()->json(['error' => 'File not found'], 404);
        }
    }



}
