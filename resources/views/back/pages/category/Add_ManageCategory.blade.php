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
                                <br>
                                <label class="sr-only" for="focusKey">Focus Keyword</label>
                                <input type="text" name="focusKey" class="form-control mb-2 mr-sm-2" id="focusKey" placeholder="Focus Keyword" required>
                                <br>
                                <label class="sr-only" for="metaKey">Meta Keyword</label>
                                <input type="text" name="metaKey" class="form-control mb-2 mr-sm-2" id="metaKey" placeholder="Meta Keyword" required>
                                <br>
                                <label class="sr-only" for="metaTag">Meta Tag</label>
                                <input type="text" name="metaTag" class="form-control mb-2 mr-sm-2" id="metaKey" placeholder="Meta Tags" required>
                                <br>
                                <div class="form-group">
                                    <label for="Metadescription">Meta Description</label>
                                    <textarea  class="form-control" name="Metadescription" id="Metadescription" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="catDescription">Category Description</label>
                                    <textarea  class="form-control" name="catDescription" id="catDescription" rows="4"></textarea>
                                </div>
                                <br>
                                <label class="sr-only" for="categoryName">Category Image</label>
                                <input type="file" name="CategoryImage" class="form-control mb-2 mr-sm-2" id="categoryName" placeholder="Image" accept="image/*" >
                                <br>
                                <div class="form-group">
                                    <label for="ImgAlt">Image alt Tag</label>
                                    <input type="text" name="ImgAlt" class="form-control" id="ImgAlt" placeholder="Image Alt Tag">
                                </div>
                                <button type="submit" class="btn btn-gradient-primary mb-2">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Category Details</h4>

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
                                    <td>
                                        @if($newCategory->CategoryImage)
                                        <img src="{{ asset($newCategory->CategoryImage) }}" alt="Category_image" style="height: 100px; width: 100px">
                                        @else
<bold>No Image</bold>
                                        @endif
                                    </td>
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
