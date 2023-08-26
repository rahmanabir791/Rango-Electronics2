@extends('back.master')
@section('title')
    Edit Products
@endsection
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Product Upload</h4>
                            <p class="card-description">Upload product details</p>
                            <form action="{{route('update-product' , ['id' => $product->id])}}" method="post"  class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" name="productName" value="{{$product->productName}}" class="form-control" id="productName" placeholder="Product Name">
                                </div>


                                <div class="form-group">
                                    <label for="productCategory">Category</label>
                                    <select class="form-control" id="productCategory" name="category_id" required>
                                        @foreach($Categories as $category)
                                            <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected' : ''}} >{{ $category->CategoryName }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        var selectedBrandId = '{{ $product->brand_id }}';
                                        if (selectedBrandId) {
                                            $('#productBrand').val(selectedBrandId);
                                        }
                                        $('#productCategory').on('change', function() {
                                            var selectedCategory = $(this).val();
                                            var brandSelect = $('#productBrand');

                                            brandSelect.empty();
                                            brandSelect.append($('<option>').text('Select a Brand').attr('value', ''));

                                            var addedBrands = []; // Keep track of added brands

                                            @foreach($Brands as $brand)
                                            if ({{ $brand->category_id }} == selectedCategory && addedBrands.indexOf('{{ $brand->BrandName }}') === -1) {
                                                brandSelect.append($('<option>').text('{{ $brand->BrandName }}').attr('value', '{{ $brand->id }}'));
                                                addedBrands.push('{{ $brand->BrandName }}');
                                            }
                                            @endforeach
                                        });
                                    });
                                </script>

                                <div class="form-group">
                                    <label for="productBrand">Brand</label>
                                    <select class="form-control" id="productBrand" name="brand_id" >
                                        @foreach($Brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->BrandName }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="productType">Type of Product</label>
                                    <input type="text" name="product_type" value="{{$product->product_type}}" class="form-control" id="productType" placeholder="Type of Product">
                                </div>
                                <div class="form-group">
                                    <label for="productMRP">MRP Price</label>
                                    <input type="text" name="MRP_price" value="{{$product->MRP_price}}" class="form-control" id="productMRP" placeholder="MRP Price">
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Offer Price</label>
                                    <input type="text" name="O_price" value="{{$product->O_price}}" class="form-control" id="productPrice" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="productWarranty">Product Image</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Product Image</div>
                                        </div>
                                        <img src="{{asset($product->image)}}" alt="" style="width: 100px; height: 100px">
                                        <input type="file" name="image" class="form-control" id="productImage"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productWarranty">Warranty Details</label>
                                    <textarea  class="form-control" name="warranty"  id="productWarranty" rows="4">{{$product->warranty}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="productWarranty">Key Features</label>
                                    <textarea  class="form-control" name="features" id="keyFeatures" rows="4">{{$product->features}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="productSpecifications">Specifications</label>
                                    <textarea  class="form-control" name="specifications" id="productSpecifications" rows="4">{{$product->specifications}}</textarea>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary me-2">Edit Product Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
