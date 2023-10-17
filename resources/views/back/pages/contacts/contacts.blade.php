@extends('back.master')
@section('title')
    Contact Message
@endsection

@section('body')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover border-5">
                            <thead>
                            <tr class="border-5">
                                <th class="border-5">#</th>
                                <th class="border-5">Name</th>
                                <th class="border-5">Email</th>
                                <th class="border-5">Subject</th>
                                <th class="border-5">Message</th>
                                <th class="border-5">Action</th>

                            </tr>
                            </thead>
                            @foreach($messages as $message)
                            <tbody>
                            <tr>
                                <td class="border-5">{{ $loop->iteration }}</td>
                                <td class="border-5">{{ $message->name }}</td>
                                <td class="border-5">{{ $message->email }}</td>
                                <td class="border-5">{{ $message->subject }}</td>
                                <td class="border-5">{{ $message->message }}</td>

                                <td class="border-5">
                                    {{-- Edit and delete buttons --}}
                                    <br>
                                    <a href="{{ route('delete-message', ['id' => $message->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure Delete this Brand?')">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection



