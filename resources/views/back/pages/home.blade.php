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
                                                    <label class="badge {{ $client->delivered == 1 ? 'badge-gradient-success' : 'badge-gradient-danger' }}">
                                                        {{ $client->delivered == 1 ? 'Delivered' : 'Not Delivered' }}
                                                    </label>
                                                </td>

                                                <td> {{$client->created_at}} </td>
                                                <td> {{ $client->email }} </td>
                                                <td><a href="{{route('downloadInvoice' , ['invoiceNumber' => $client->invoiceNumber ])}}">{{ $client->invoiceNumber }}</a></td>
                                                <td>
                                                    <a href="{{ route('delete-clint', ['invoiceNumber' => $client->invoiceNumber]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure Delete this Client Details ?')">Delete</a>
                                                    <form method="POST" action="{{ route('update-Delivery', ['id' => $client->id]) }}" style="display: inline;">
                                                        @csrf
                                                        <input type="hidden" name="delivered" value="{{ $client->delivered == 1 ? 0 : 1 }}">
                                                        <button type="submit" class="btn btn-sm {{ $client->delivered == 1 ? 'btn-danger' : 'btn-success' }}" style="margin-top: 5px;">
                                                            {{ $client->delivered == 1 ? 'Set Not Delivered' : 'Set Delivered' }}
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach

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
                                            <label class="badge {{ $client->delivered == 1 ? 'badge-gradient-success' : 'badge-gradient-danger' }}">
                                                {{ $client->delivered == 1 ? 'Delivered' : 'Not Delivered' }}
                                            </label>
                                        </td>
                                        <td> {{$client->created_at}} </td>
                                        <td> {{ $client->A_payment }} </td>
                                        <td> {{ $client->remainAmount }} </td>
                                        <td> {{ $client->f_service }} </td>
                                        <td> {{ $client->email }} </td>
                                        <td><a href="{{route('downloadInvoice' , ['invoiceNumber' => $client->invoiceNumber ])}}">{{ $client->invoiceNumber }}</a></td>
                                        <td>
                                            <a href="{{ route('delete-clint', ['invoiceNumber' => $client->invoiceNumber]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure Delete this Client Details ?')">Delete</a>
                                            <form method="POST" action="{{ route('update-Delivery', ['id' => $client->id]) }}" style="display: inline;">
                                                @csrf
                                                <input type="hidden" name="delivered" value="{{ $client->delivered == 1 ? 0 : 1 }}">
                                                <button type="submit" class="btn btn-sm {{ $client->delivered == 1 ? 'btn-danger' : 'btn-success' }}" style="margin-top: 5px;">
                                                    {{ $client->delivered == 1 ? 'Set Not Delivered' : 'Set Delivered' }}
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endif
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- content-wrapper ends -->

    </div>
    <!-- main-panel ends -->
@endsection
