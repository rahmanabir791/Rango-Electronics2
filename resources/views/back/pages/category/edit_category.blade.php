@extends('back.master')
@section('title')
    ADD Category
@endsection

@section('body')
    <div class="main-panel">

        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Category</h4>
                        <p class="card-description">Enter the category name and submit</p>
                        <form method="post" action="{{ route('update-Category',['id' => $Categorys->id]) }}" class="form-inline" enctype="multipart/form-data">
                            @csrf
                            <label class="sr-only" for="categoryName">Category Name</label>
                            <input type="text" name="CategoryName" value="{{$Categorys->CategoryName}}" class="form-control mb-2 mr-sm-2" id="categoryName" placeholder="Category Name" required>

                            <button type="submit" class="btn btn-gradient-primary mb-2">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
