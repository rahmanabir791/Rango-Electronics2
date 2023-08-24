@extends('back.master')
@section('title')
    Dashboard
@endsection

@section('body')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Clients Orders Cash on delivery</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Sl NO. </th>
                                        <th> Name </th>
                                        <th> Products </th>
                                        <th> Total Amount </th>
                                        <th> Address </th>
                                        <th> Mobile NO </th>
                                        <th> Status </th>
                                        <th> Order placed Time</th>
                                        <th> Email</th>
                                        <th> Tracking ID </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        @if($client->p_status == 1)
                                            <tr>
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $client->name }} </td>

                                                <td>
                                                    @foreach($items as $item)
                                                        @if($item->p_status == 1)
                                                            @if($item->invoiceNumber == $client->invoiceNumber)
                                                                {{ $loop->iteration }}. {{ $item->name }}<br> Quantity: {{$item->quantity}} , Price:{{$item->price}}<br>
                                                                <br>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td> {{$client->totalAmount}} </td>
                                                <td> {{$client->address}} </td>
                                                <td> {{$client->phone}} </td>
                                                <td>
                                                    <label class="badge badge-gradient-success">DONE</label>
                                                </td>
                                                <td> {{$client->created_at}} </td>
                                                <td> {{ $client->email }} </td>
                                                <td><a href="{{route('downloadInvoice' , ['invoiceNumber' => $client->invoiceNumber ])}}">{{ $client->invoiceNumber }}</a></td>
                                                <td>

                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <img src="{{asset('/')}}assets/back-asset/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td> High loading time </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <label class="badge badge-gradient-warning">PROGRESS</label>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td> Dec 12, 2017 </td>--}}
                                    {{--                                        <td> WD-12346 </td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <img src="{{asset('/')}}assets/back-asset/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td> Website down for one week </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <label class="badge badge-gradient-info">ON HOLD</label>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td> Dec 16, 2017 </td>--}}
                                    {{--                                        <td> WD-12347 </td>--}}
                                    {{--                                    </tr>--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <img src="{{asset('/')}}assets/back-asset/images/faces/face4.jpg" class="me-2" alt="image"> John Doe--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td> Loosing control on server </td>--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <label class="badge badge-gradient-danger">REJECTED</label>--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td> Dec 3, 2017 </td>--}}
                                    {{--                                        <td> WD-12348 </td>--}}
                                    {{--                                    </tr>--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Clients Orders With Advance Payment</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th> Sl NO. </th>
                                        <th> Name </th>
                                        <th> Products </th>
                                        <th> Total Amount </th>
                                        <th> Address </th>
                                        <th> Mobile NO </th>
                                        <th> Status </th>
                                        <th> Order placed Time</th>
                                        <th> Advance Payment</th>
                                        <th> Remain Amount</th>
                                        <th> MFS</th>
                                        <th> Email</th>
                                        <th> Tracking ID </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        @if($client->p_status == 0)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $client->name }} </td>

                                        <td>
                                            @foreach($items as $item)
                                                @if($item->p_status == 0)
                                                    @if($item->invoiceNumber == $client->invoiceNumber)
                                                {{ $loop->iteration }}. {{ $item->name }}<br> Quantity: {{$item->quantity}} , Price:{{$item->price}}<br>
                                                <br>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td> {{$client->totalAmount}} </td>
                                        <td> {{$client->address}} </td>
                                        <td> {{$client->phone}} </td>
                                        <td>
                                            <label class="badge badge-gradient-success">DONE</label>
                                        </td>
                                        <td> {{$client->created_at}} </td>
                                        <td> {{ $client->A_payment }} </td>
                                        <td> {{ $client->remainAmount }} </td>
                                        <td> {{ $client->f_service }} </td>
                                        <td> {{ $client->email }} </td>
                                        <td><a href="{{route('downloadInvoice' , ['invoiceNumber' => $client->invoiceNumber ])}}">{{ $client->invoiceNumber }}</a></td>
                                        <td>

                                        </td>

                                    </tr>
                                    @endif
                                    @endforeach
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <img src="{{asset('/')}}assets/back-asset/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson--}}
{{--                                        </td>--}}
{{--                                        <td> High loading time </td>--}}
{{--                                        <td>--}}
{{--                                            <label class="badge badge-gradient-warning">PROGRESS</label>--}}
{{--                                        </td>--}}
{{--                                        <td> Dec 12, 2017 </td>--}}
{{--                                        <td> WD-12346 </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <img src="{{asset('/')}}assets/back-asset/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel--}}
{{--                                        </td>--}}
{{--                                        <td> Website down for one week </td>--}}
{{--                                        <td>--}}
{{--                                            <label class="badge badge-gradient-info">ON HOLD</label>--}}
{{--                                        </td>--}}
{{--                                        <td> Dec 16, 2017 </td>--}}
{{--                                        <td> WD-12347 </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <img src="{{asset('/')}}assets/back-asset/images/faces/face4.jpg" class="me-2" alt="image"> John Doe--}}
{{--                                        </td>--}}
{{--                                        <td> Loosing control on server </td>--}}
{{--                                        <td>--}}
{{--                                            <label class="badge badge-gradient-danger">REJECTED</label>--}}
{{--                                        </td>--}}
{{--                                        <td> Dec 3, 2017 </td>--}}
{{--                                        <td> WD-12348 </td>--}}
{{--                                    </tr>--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
@endsection
