<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rango Electronics - Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .invoice {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-title {
            font-size: 32px;
            margin-bottom: 5px;
            color: #333;
        }
        .invoice-details p {
            margin: 5px 0;
            color: #555;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table th, .invoice-table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .invoice-table th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }
        .invoice-total {
            text-align: right;
            font-weight: bold;
        }
        .thank-you {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>
<div class="invoice">
    <div class="invoice-header">
        <h1 class="invoice-title">Rango Electronics Invoice</h1>
        <p>Your Trusted Electronics Store</p>
    </div>
    <div class="invoice-details">
        <p><strong>Invoice Number:</strong> {!! $invoiceNumber !!}</p>
        <p><strong>Date:</strong> {!! $currentDate !!}</p>
        <p><strong>Billed To:</strong></p>
        <p>{!! $name !!}</p>
        <p>{!! $address !!}</p>
        <p>{!! $city !!}, {!! $zip !!} Country</p>
    </div>
    <table class="invoice-table">
        <thead>
        <tr>
            <th>Description</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($productData as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>৳{{ $product['price'] }}</td>
                <td>৳{{ $product['quantity'] * $product['price'] }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3" class="invoice-total">Total:</td>
            <td>৳{{$totalAmount}}</td>
        </tr>
        @if($p_status == 0)
            <tr>
                <td colspan="3" class="invoice-total">Advance Payment:</td>
                <td>৳{!! $A_payment !!}</td>
            </tr>
            <tr>
                <td colspan="3" class="invoice-total">Remain Total Amount:</td>
                <td>৳{!! $remainAmount !!}</td>
            </tr>
            <tr>
                <td colspan="4">Payment Method: {{ $f_service }}</td>
            </tr>
            <tr>
                <td colspan="4">Transaction Number: {{ $Transaction_num }}</td>
            </tr>
        @endif
        </tfoot>
    </table>
    <div class="thank-you">
        <p>Thank you for choosing Rango Electronics!</p>
    </div>
</div>
</body>
</html>

