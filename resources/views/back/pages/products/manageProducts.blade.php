@extends('back.master')
@section('title')
    Manage Products
@endsection

@section('body')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover border-5">
                            <thead>
                            <tr class="border-5">
                                <th class="border-5">#</th>
                                <th class="border-5">Product Name</th>
                                <th class="border-5">Type</th>
                                <th class="border-5">MRP Price</th>
                                <th class="border-5">Offer Price</th>
                                <th class="border-5">Warranty</th>
                                <th class="border-5">Stock</th>
                                <th class="border-5">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $Brand )
                                @php
                                    $Products = $products->where('brand_id', $Brand->id);
                                @endphp

                                @if($Products->isNotEmpty())
                                    <tr>
                                        <td colspan="10"><h4>Brand Name: {{ $Brand->BrandName }}</h4></td>
                                    </tr>
                                    @foreach($Products as $product)
                                        <tr>
                                            <td class="border-5">{{ $loop->iteration }}</td>
                                            <td class="border-5">{{ $product->productName }}</td>
                                            <td class="border-5">{{ $product->product_type }}</td>
                                            <td class="border-5">{{ $product->MRP_price }}</td>
                                            <td class="border-5">{{ $product->O_price }}</td>
                                            <td class="border-5" style="text-align: center; padding: 10px;">
                                            <span style="font-weight: bold; color: {{ $product->special_offer == 1 ? 'green' : 'red' }};">
                                                {{ $product->special_offer == 1 ? 'In Special Offer' : 'Out Of Special Offer' }}
                                            </span>
                                                <form method="POST" action="{{ route('update-special_Offer', ['id' => $product->id]) }}" style="display: inline;">
                                                    @csrf
                                                    <input type="hidden" name="special_offer" value="{{ $product->special_offer == 1 ? 0 : 1 }}">
                                                    <button type="submit" class="btn btn-sm {{ $product->special_offer == 1 ? 'btn-danger' : 'btn-success' }}" style="margin-top: 5px;">
                                                        {{ $product->special_offer == 1 ? 'Set Out of Special Offer' : 'Set In Special Offer' }}
                                                    </button>
                                                </form>
                                            </td>

                                            <td class="border-5" style="text-align: center; padding: 10px;">
                                            <span style="font-weight: bold; color: {{ $product->stockAvailability == 1 ? 'green' : 'red' }};">
                                                {{ $product->stockAvailability == 1 ? 'In Stock' : 'Out Of Stock' }}
                                            </span>
                                                <form method="POST" action="{{ route('update-stockAvailability', ['id' => $product->id]) }}" style="display: inline;">
                                                    @csrf
                                                    <input type="hidden" name="stockAvailability" value="{{ $product->stockAvailability == 1 ? 0 : 1 }}">
                                                    <button type="submit" class="btn btn-sm {{ $product->stockAvailability == 1 ? 'btn-danger' : 'btn-success' }}" style="margin-top: 5px;">
                                                        {{ $product->stockAvailability == 1 ? 'Set Out of Stock' : 'Set In Stock' }}
                                                    </button>
                                                </form>
                                            </td>


                                            <td class="border-5">
                                                {{-- Edit and delete buttons --}}
                                                                                    <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                                <br>
                                                                                    <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure Delete this Brand?')">Delete</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach

                            <!-- Display products without a brand -->
                            @foreach($products as $product)
                                @if(empty($product->brand_id))
                                    <tr>
                                        <h2>This product has no brand!!!</h2>
                                    </tr>
                                    <tr>
                                        <td class="border-5">{{ $loop->iteration }}</td>
                                        <td class="border-5">{{ $product->productName }}</td>
                                        <td class="border-5">{{ $product->product_type }}</td>
                                        <td class="border-5">{{ $product->MRP_price }}</td>
                                        <td class="border-5">{{ $product->O_price }}</td>
                                        <td class="border-5" style="text-align: center; padding: 10px;">
    <span style="font-weight: bold; color: {{ $product->special_offer == 1 ? 'green' : 'red' }};">
        {{ $product->special_offer == 1 ? 'In Special Offer' : 'Out Of Special Offer' }}
    </span>
                                            <form method="POST" action="{{ route('update-special_Offer', ['id' => $product->id]) }}" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="special_offer" value="{{ $product->special_offer == 1 ? 0 : 1 }}">
                                                <button type="submit" class="btn btn-sm {{ $product->special_offer == 1 ? 'btn-danger' : 'btn-success' }}" style="margin-top: 5px;">
                                                    {{ $product->special_offer == 1 ? 'Set Out of Special Offer' : 'Set In Special Offer' }}
                                                </button>
                                            </form>
                                        </td>


                                        <td class="border-5" style="text-align: center; padding: 10px;">
                                            <span style="font-weight: bold; color: {{ $product->stockAvailability == 1 ? 'green' : 'red' }};">
                                                {{ $product->stockAvailability == 1 ? 'In Stock' : 'Out Of Stock' }}
                                            </span>
                                            <form method="POST" action="{{ route('update-stockAvailability', ['id' => $product->id]) }}" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="stockAvailability" value="{{ $product->stockAvailability == 1 ? 0 : 1 }}">
                                                <button type="submit" class="btn btn-sm {{ $product->stockAvailability == 1 ? 'btn-danger' : 'btn-success' }}" style="margin-top: 5px;">
                                                    {{ $product->stockAvailability == 1 ? 'Set Out of Stock' : 'Set In Stock' }}
                                                </button>
                                            </form>
                                        </td>


                                        <td class="border-5">
                                            {{-- Edit and delete buttons --}}
                                            <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                            <br>
                                            <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure Delete this Brand?')">Delete</a>

                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection



