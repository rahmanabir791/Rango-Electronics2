<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Category\Category;
use App\Models\Back\Order\OrderSubmit;
use App\Models\Front\Contact\Contacts;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    protected $client;
    protected $item;
    public function dashboard ()
    {
        return view('back.pages.home', [
            'clients' => OrderSubmit::orderBy('id' , 'DESC')->get()->all(),
            'items'   => OrderItem::orderBy('id' , 'DESC')->get()->all(),
        ]);
    }


    public function Delivery (Request $request, $id)
    {
        OrderSubmit::deliveryReport($request, $id);
        return redirect()->back()->with('message', 'Delivery Done successfully');
    }

    public function deleteClient($invoiceNumber)
    {
        try {
            // Find the client by invoice number
            $client = OrderSubmit::where('invoiceNumber', $invoiceNumber)->first();

            if (!$client) {
                return redirect()->back()->with('message-for-delete', 'Client not found');
            }

            // Delete associated order items
            OrderItem::where('invoiceNumber', $client->invoiceNumber)->delete();

            // Delete the client
            $client->delete();

            return redirect()->back()->with('message-for-delete', 'Client and associated items deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('message-for-delete', 'An error occurred while deleting: ' . $e->getMessage());
        }
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

    public function contactInfo ()
    {
        return view('back.pages.contacts.contacts' , [
            'messages' => Contacts::orderBy('id' , 'DESC')->get()->all(),
        ]);
    }

    public function contactInfoDelete ($id)
    {
        $this->events = Contacts::find($id);
        if (file_exists($this->events->image))
        {
            unlink($this->events->image);
        }
        $this->events->delete();
        return redirect()->back()->with('message-for-delete', 'Message Deleted successfully');
    }
}
