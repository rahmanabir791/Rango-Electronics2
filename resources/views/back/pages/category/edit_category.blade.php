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
                        <form method="post" action="{{ route('update-Category',['id' => $Category->id]) }}" class="form-inline" enctype="multipart/form-data">
                            @csrf
                            <label class="sr-only" for="categoryName">Category Name</label>
                            <input type="text" name="CategoryName" value="{{$Category->CategoryName}}" class="form-control mb-2 mr-sm-2" id="categoryName" placeholder="Category Name" required>
                            <br>
                            <label class="sr-only" for="focusKey">Focus Keyword</label>
                            <input type="text" name="focusKey" value="{{$Category->focusKey}}" class="form-control mb-2 mr-sm-2" id="focusKey" placeholder="Focus Keyword" >
                            <br>
                            <label class="sr-only" for="metaKey">Meta Keyword</label>
                            <input type="text" name="metaKey" value="{{$Category->metaKey}}" class="form-control mb-2 mr-sm-2" id="metaKey" placeholder="Meta Keyword" >
                            <br>
                            <label class="sr-only" for="metaTag">Meta Tag</label>
                            <input type="text" name="metaTag" value="{{$Category->metaTag}}" class="form-control mb-2 mr-sm-2" id="metaKey" placeholder="Meta Tags" >
                            <br>
                            <div class="form-group">
                                <label for="Metadescription">Meta Description</label>
                                <textarea  class="form-control" name="Metadescription" id="Metadescription" rows="4">{{$Category->Metadescription}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="catDescription">Category Description</label>
                                <textarea  class="form-control" name="catDescription" id="catDescription" rows="4">{{$Category->catDescription}}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ImgAlt">Image alt Tag</label>
                                <input type="text" name="ImgAlt" value="{{$Category->ImgAlt}}" class="form-control" id="ImgAlt" placeholder="Image Alt Tag">
                            </div>
                            <label class="sr-only" for="categoryName">Category Image</label>
                            <img src="{{asset($Category->CategoryImage)}}" alt="" style="height: 100px; width: 100px;">
                            <input type="file" name="CategoryImage" class="form-control mb-2 mr-sm-2" id="categoryName" placeholder="Image" accept="image/*" >

                            <button type="submit" class="btn btn-gradient-primary mb-2">Edit Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
