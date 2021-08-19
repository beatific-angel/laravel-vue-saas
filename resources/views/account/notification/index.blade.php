@extends('account.layouts.default')
@section('title', 'My Notifications')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card card-default">
                <div class="card-header border-0">
                    <h2 class="mb-0"> <i class="fas fa-bell"></i> My NotificationS
                        
                    </h2>
                </div>
                @if($notifications->isEmpty())
                <h3 class="text-center">You have not yet any Notification.</h3>
                @else
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(auth()->user()->notifications as $notification)
                                @php($data = json_decode($notification))
                            <tr>
                                <td>
                                    {{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                                </td>
                                <td>
                                    <h5>{{ $data->data->subject }}</h5>
                                    <p>{{ $data->data->body }}</p>
                                    <i>{{ $data->data->thanks }}</i>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if($notification->read_at != NULL)
                                        <span class="badge badge-info"> Read</span>
                                        @else
                                        <span class="badge badge-danger"> Not Read</span>
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-placement="top" title="Mark as read">
                                            <i class="fas fa-eye text-info" style="font-size:16px; padding:5px"></i>
                                        </span>
                                    </a>
                                    <a href="#">
                                        <span data-toggle="tooltip" data-placement="top" title="Delete notification">
                                            <i class="fas fa-trash text-danger" style="font-size:16px; padding:5px"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection