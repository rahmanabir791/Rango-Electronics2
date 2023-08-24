<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Include your email styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .email-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .email-content {
            margin-bottom: 20px;
        }
        .email-content p {
            margin: 0;
        }
        .thank-you {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <h1 class="email-title">Thank You for Your Purchase</h1>
        <p>Rango Electronics</p>
    </div>
    <div class="email-content">
        <p>Dear {{ $name }} sir/Madam,</p>
        <p>Thank you for choosing Rango Electronics for your recent purchase. We're thrilled to have you as our customer!</p>
        <p>Your order details:</p>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh mail has been sent to your email address.') }}
            </div>
        @endif
        <ul>
            @foreach($productData as $product)
                <li>{{ $product['name'] }} - {{ $product['quantity'] }} x ৳{{ $product['price']  }} = ৳{{ $product['quantity']  * $product['price']  }}</li>
            @endforeach
        </ul>
        <p>Total Amount: ৳{{ $totalAmount }}</p>
        @if ($p_status == 0)
            <p>Advance Payment: ৳{{ $A_payment }}</p>
            <p>Remaining Total Amount: ৳{{ $remainAmount }}</p>
            <p>Payment Method: {{ $f_service }}</p>
            <p>Transaction Number: {{ $Transaction_num }}</p>
        @endif
        <br>
        <h4>Your Invoice Given Below</h4>
        <p>If you have any questions or need further assistance, feel free to contact us. We hope you enjoy your new electronics!</p>
    </div>
    <div class="thank-you">
        <p>Thank you for choosing Rango Electronics!</p>
    </div>
</div>
</body>
</html>

