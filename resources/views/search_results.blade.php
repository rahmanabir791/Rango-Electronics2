@extends('back.master')

@section('body')
    <style>
        /* Style for the search results */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        h3 {
            font-size: 24px;
            margin-top: 30px;
            color: #555;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }

        li {
            font-size: 18px;
            margin-bottom: 5px;
            color: #777;
        }

        /* Add more styles as needed */

        /* Style for the search form */
        form {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>


        <div class="container">
            <h2>Search Results</h2>

            <h3>Categories</h3>
            <ul>
                @foreach ($categories as $category)
                    <li>{{ $category->CategoryName }}</li>
                @endforeach
            </ul>

            <h3>Brands</h3>
            <ul>
                @foreach ($brands as $brand)
                    <li>{{ $brand->BrandName }}</li>
                @endforeach
            </ul>

            <h3>Products</h3>
            <ul>
                @foreach ($products as $product)
                    <li>{{ $product->productName }} (MRP: {{ $product->MRP_price }}, Offer Price: {{ $product->O_price }}) </li>
                    <!-- Add other fields as needed -->
                @endforeach
            </ul>
        </div>



@endsection
