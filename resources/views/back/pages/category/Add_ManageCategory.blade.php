@extends('back.master')
@section('title')
    ADD && Manage Category
@endsection

@section('body')
    <div class="main-panel">

            <div class="content-wrapper">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
                            <p class="card-description">Enter the category name and submit</p>
                            <form method="post" action="{{ route('new-category') }}" class="form-inline" enctype="multipart/form-data">
                                @csrf
                                <label class="sr-only" for="categoryName">Category Name</label>
                                <input type="text" name="CategoryName" class="form-control mb-2 mr-sm-2" id="categoryName" placeholder="Category Name" required>

                                <button type="submit" class="btn btn-gradient-primary mb-2">Add Category</button>
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
                                <th>Category Name</th>
                                <th>Created Date/Time</th>
                                <th>Updated Date/Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($newCategorys as $newCategory)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $newCategory->CategoryName }}</td>
                                    <td>{{ $newCategory->created_at }}</td>
                                    <td>{{ $newCategory->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('edit-categorys', ['id' => $newCategory->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                        <br>
                                        <a href="{{ route('delete-categorys', ['id' => $newCategory->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>



@endsection
