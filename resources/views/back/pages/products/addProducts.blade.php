@extends('back.master')
@section('title')
    Add Products
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
                            <form action="{{route('new-product')}}" method="post"  class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" name="productName" class="form-control" id="productName" placeholder="Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="productName">Focus Keyword</label>
                                    <input type="text" name="focusKey" class="form-control" id="focusKey" placeholder="Focus Keyword">
                                </div>
                                <div class="form-group">
                                    <label for="productName">Meta Keyword</label>
                                    <input type="text" name="metaKey" class="form-control" id="metaKey" placeholder="Meta Keyword">
                                </div>
                                <div class="form-group">
                                    <label for="metaTag">Meta Tag</label>
                                    <input type="text" name="metaTag" class="form-control" id="metaTag" placeholder="Meta Tag">
                                </div>

                                <div class="form-group">
                                    <label for="productCategory">Category</label>
                                    <select class="form-control" id="productCategory" name="category_id" required>
                                        @foreach($Categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        $('#productCategory').on('change', function() {
                                            var selectedCategory = $(this).val();
                                            var brandSelect = $('#productBrand');

                                            brandSelect.empty();
                                            brandSelect.append($('<option>').text('Select a Brand').attr('value', ''));

                                            if (selectedCategory !== '') {
                                                @foreach($Brands as $brand)
                                                if ('{{ $brand->category_id }}' == selectedCategory) {
                                                    brandSelect.append($('<option>').text('{{ $brand->BrandName }}').attr('value', '{{ $brand->id }}'));
                                                }
                                                @endforeach
                                            }
                                        });
                                    });
                                </script>


                                <div class="form-group">
                                    <label for="productBrand">Brand</label>
                                    <select class="form-control" id="productBrand" name="brand_id" >
                                        <option value="">Select a Category first</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="productType">Type of Product</label>
                                    <input type="text" name="product_type" class="form-control" id="productType" placeholder="Type of Product">
                                </div>
                                <div class="form-group">
                                    <label for="productMRP">MRP Price</label>
                                    <input type="text" name="MRP_price" class="form-control" id="productMRP" placeholder="MRP Price">
                                </div>
                                <div class="form-group">
                                    <label for="productPrice">Offer Price</label>
                                    <input type="text" name="O_price" class="form-control" id="productPrice" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label for="productWarranty">Product Image</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Product Image</div>
                                        </div>
                                        <input type="file" name="image" class="form-control" id="productImage"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ImgAlt">Image alt Tag</label>
                                    <input type="text" name="ImgAlt" class="form-control" id="ImgAlt" placeholder="Image Alt Tag">
                                </div>
                                <div class="form-group">
                                    <label for="productWarranty">Warranty Details</label>
                                    <textarea  class="form-control" name="warranty" id="productWarranty" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="productWarranty">Key Features</label>
                                    <textarea  class="form-control" name="features" id="keyFeatures" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="productSpecifications">Product Specifications</label>
                                    <textarea  class="form-control" name="specifications" id="productSpecifications" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="description">Product Description</label>
                                    <textarea  class="form-control" name="description" id="description" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Metadescription">Meta Description</label>
                                    <textarea  class="form-control" name="Metadescription" id="Metadescription" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Special offer Product</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="special_offer" id="inSpecialOffer" value="1" >
                                            In Special Offer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="special_offer" id="outOfSpecialOffer" value="0" checked >
                                            Out of Special Offer
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Stock Availability</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="stockAvailability" id="inStock" value="1" checked>
                                            In Stock
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="stockAvailability" id="outOfStock" value="0">
                                            Out of Stock
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
