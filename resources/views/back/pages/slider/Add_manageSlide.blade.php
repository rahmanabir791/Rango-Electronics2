@extends('back.master')
@section('title')
   ADD & Manage All Slide
@endsection
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Slider Data</h4>
                            <form action="{{route('newSlider')}}" method="post" class="form-inline" enctype="multipart/form-data">
                                @csrf

                                <input type="text" name="sliderStext" class="form-control mb-2 mr-sm-2"  placeholder="Upper Line / Small Line / offer text">

                                <div class="input-group mb-2 mr-sm-2">

                                    <input type="text" name="sliderBtext" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Below Line | Name ">
                                </div>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Slider Image {Height: 410px;}</div>
                                    </div>
                                    <input type="file" name="slidImage" class="form-control" id="brandImage" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary mb-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            <!-- content-wrapper ends -->


        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Slider Details</h4>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Slider Small Text</th>
                        <th>Slider Big Text</th>
                        <th>Slider Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($SliderDetails as $SliderDetail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $SliderDetail->sliderStext }}</td>
                        <td>{{ $SliderDetail->sliderBtext}}</td>
                        <td>
                            <img src="{{ asset($SliderDetail->slidImage) }}" alt="Slider_image" style="height: 100px; width: 100px">
                        </td>
                        <td>
                            <a href="{{ route('delete-slider', ['id' => $SliderDetail->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
