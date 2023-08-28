@extends('back.master')
@section('title')
    ADD & Manage Brand
@endsection

@section('body')
    <div class="main-panel">

        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Brand</h4>
                        <p class="card-description">Select the category name, brand name, and upload an image for the brand</p>
                        <form method="post" action="{{route('new-Brands')}}" class="form-inline" enctype="multipart/form-data">
                            @csrf
                            <label class="sr-only" for="categoryName">Category Name</label>
                            <select class="form-control mb-2 mr-sm-2" name="category_id" aria-label="Default select example" required>
                                <option selected disabled>Open this select Product Category</option>
                                @foreach($allCategorys as $allCategory)
                                    <option value="{{$allCategory->id}}">{{$allCategory->CategoryName}}</option>
                                @endforeach
                            </select>

                            <label class="sr-only" for="brandName">Brand Name</label>
                            <input type="text" name="BrandName" class="form-control mb-2 mr-sm-2" id="brandName" placeholder="Brand Name" required>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Brand Image  {height: 350px;  width:250px;}</div>
                                </div>
                                <input type="file" name="BrandImage" class="form-control" id="brandImage" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mb-2">Add brands to categories</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Slider Details</h4>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Brands Name</th>
                            <th>Brands Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $currentCategory = null;
                        @endphp

                        @foreach($newBrands as $newBrand)
                            @foreach ($allCategorys as $category)
                                @if ($newBrand->category_id == $category->id)
                                    @if ($currentCategory != $category->CategoryName)
                                        @php
                                            $currentCategory = $category->CategoryName;
                                        @endphp
                                        <tr>
                                            <td colspan="4">
                                                <h3>{{ $currentCategory }}</h3>
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $newBrand->BrandName }}</td>
                                        <td>
                                            <img src="{{ asset($newBrand->BrandImage) }}" alt="brand_image" style="height: 100px; width: 100px">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit-Brands', ['id' => $newBrand->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                            <br>
                                            <a href="{{ route('delete-brands', ['id' => $newBrand->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this Brand?')">Delete</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>



@endsection
