@extends('back.master')
@section('title')
    Installation & Service
@endsection

@section('body')
    <div class="main-panel">

        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Service</h4>
                        <p class="card-description">Add Your Service Name Choose Category Option, and upload an image for the Service</p>
                        <form method="post" action="{{route('new-service')}}" class="form-inline" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group mb-2 mr-sm-2">
                            <label class="sr-only" for="ServiceName">Service Name</label>
                            <input type="text" name="ServiceName" class="form-control mb-2 mr-sm-2" id="serviceName" placeholder="Service Name" required/>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <label class="sr-only" for="ServiceName">Service Price</label>
                                <input type="text" name="ServicePrice" class="form-control mb-2 mr-sm-2" id="servicePrice" placeholder="Service Price" required/>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                            <label class="sr-only" for="categoryName">Service Type</label>
                            <select class="form-control mb-2 mr-sm-2" name="ServiceCategory" aria-label="Default select example" required>
                                <option selected disabled>Open this select Service Category</option>
                                    <option value="1">Air Condition</option>
                                    <option value="2">Refrigerator</option>
                                    <option value="3">Installation Service </option>
                                    <option value="4">Others</option>
                            </select>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Service Image</div>
                                </div>
                                <input type="file" name="ServiceImage" class="form-control" id="ServiceImage" accept="image/*" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Service description</label>
                                <textarea  class="form-control" name="description" id="description" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Service Specifications</label>
                                <textarea  class="form-control" name="specification" id="specification" rows="4"></textarea>
                            </div>



                            <button type="submit" class="btn btn-gradient-primary mb-2">Add Service</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Slider Details</h4>
                        <div class="table-responsive">
                            <table class="table table-hover border-5">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Name</th>
                                    <th>Service Category</th>
                                    <th>Service Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($Services as $Service)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $Service->ServiceName }}</td>
                                        <td>
                                            {{ $Service->ServiceCategory == 1 ? 'Air Condition' : '' }}
                                            {{ $Service->ServiceCategory == 2 ? 'Refrigerator' : '' }}
                                            {{ $Service->ServiceCategory == 3 ? 'Installation Service' : '' }}
                                            {{ $Service->ServiceCategory == 4 ? 'Others' : '' }}
                                        </td>
                                        <td>
                                            <img src="{{asset($Service->ServiceImage)}}" alt="Service_image" style="height: 100px; width: 100px">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit-Service', ['id' => $Service->id]) }}" class="btn btn-sm btn-secondary btn-outline-info">Edit</a>
                                            <br>
                                            <a href="{{ route('delete-Service', ['id' => $Service->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this Service?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>



@endsection
