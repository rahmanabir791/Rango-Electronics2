@extends('back.master')
@section('title')
    Edit Brand
@endsection

@section('body')
    <div class="main-panel">

        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Brand</h4>
                        <p class="card-description">Select the category name, brand name, and upload an image for the brand</p>
                        <form method="post" action="{{route('update-Brand', ['id' => $Brands->id])}}" class="form-inline" enctype="multipart/form-data">
                            @csrf
                            <label class="sr-only" for="categoryName">Category Name</label>
                            <div class="form-group">
                                <label for="category_id">Select Product Category</label>
                                <select class="form-control" name="category_id" id="category_id" required>
                                    <option disabled>Select an option</option>
                                    @foreach ($allCategorys as $category)
                                        <option value="{{ $category->id }}" {{ $Brands->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->CategoryName }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>



                            <label class="sr-only" for="brandName">Brand Name</label>
                            <input type="text" name="BrandName" value="{{$Brands->BrandName}}" class="form-control mb-2 mr-sm-2" id="brandName" placeholder="Brand Name" required>


                            <label class="sr-only" for="brandName">Brand Image</label>
                            <img src="{{asset($Brands->BrandImage)}}" alt="" style="height: 100px; width: 100px;">

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Brand Image</div>
                                </div>
                                <input type="file" name="BrandImage" class="form-control" id="brandImage" accept="image/*" >
                            </div>
                            @if ($errors->has('BrandImage'))
                                <div class="alert alert-danger">{{ $errors->first('BrandImage') }}</div>
                            @endif

                            <button type="submit" class="btn btn-gradient-primary mb-2">Add brands to categories</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
