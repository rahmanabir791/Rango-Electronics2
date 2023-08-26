@extends('back.master')
@section('title')
   Edit Installation & Service
@endsection

@section('body')
    <div class="main-panel">

        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Service</h4>
                        <p class="card-description">Add Your Service Name Choose Category Option, and upload an image for the Service</p>
                        <form method="post" action="{{ route('update-service' , ['id' => $service->id]) }}" class="form-inline" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group mb-2 mr-sm-2">
                                <label class="sr-only" for="ServiceName">Service Name</label>
                                <input type="text" name="ServiceName" value="{{$service->ServiceName}}" class="form-control mb-2 mr-sm-2" id="serviceName" placeholder="Brand Name" required/>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <label class="sr-only" for="categoryName">Service Type</label>
                                <select class="form-control mb-2 mr-sm-2" name="ServiceCategory" aria-label="Default select example" required>
                                    <option selected disabled>Open this select Service Category</option>
                                    <option value="1" {{ $service->ServiceCategory == 1 ? 'selected' : '' }}>Air Condition</option>
                                    <option value="2" {{ $service->ServiceCategory == 2 ? 'selected' : '' }}>Refrigerator</option>
                                    <option value="3" {{ $service->ServiceCategory == 3 ? 'selected' : '' }}>Installation Service </option>
                                    <option value="4" {{ $service->ServiceCategory == 4 ? 'selected' : '' }}>Others</option>
                                </select>
                            </div>

                            <img src="{{ asset($service->ServiceImage) }}" alt="" style="height: 100px; width: 100px">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Service Image</div>
                                </div>
                                <input type="file" name="ServiceImage" class="form-control" id="ServiceImage" accept="image/*" >
                            </div>

                            <div class="form-group">
                                <label for="description">Service description</label>
                                <textarea  class="form-control" name="description" id="description" rows="4">{{ $service->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Service Specifications</label>
                                <textarea  class="form-control" name="specification" id="specification" rows="4">{{ $service->specification }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mb-2">Edit Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
