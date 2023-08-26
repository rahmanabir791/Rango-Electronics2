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
            margin: 0;
            padding: 0;
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
        .order-details {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .order-details ul {
            list-style: none;
            padding: 0;
        }
        .order-details li {
            margin: 5px 0;
        }
        .signature {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
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
        <p>Your order has been Confirmed.</p>
        <p>Thank you for choosing Rango Electronics for your recent purchase. We're thrilled to have you as our customer!</p>
        <div class="order-details">
            <p>Your order details:</p>
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
        </div>
        <br>
        <p>If you have any questions or need further assistance, feel free to contact us. We hope you enjoy your new electronics!</p>
    </div>
    <div class="signature">
        <p>Contact us:</p>
        <p>Phone: +88 017 985 65001</p>
        <p>Address: House: 5, Road: 12, DIT project, Merul Badda, Dhaka</p>
        <p>Email: electronics.rango@gmail.com</p>
    </div>
    <div class="thank-you">
        <p>Thank you for choosing Rango Electronics!</p>
    </div>
</div>
</body>
</html>
