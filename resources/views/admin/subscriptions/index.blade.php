@extends('admin.layouts.default')

@section('admin.breadcrumb')
<li class='breadcrumb-item active'>Subscriptions</li>
@endsection

@section('admin.content')
<div class="clearfix">
    <div class="col-lg">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Subscriptions
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                        <tr>
                            <th>User</th>
                            {{-- <th>Slug</th> --}}
                            <th>Plan</th>
                            <th>Trial end</th>
                            {{-- <th>Trial Day</th> --}}
                            <th>Plan end</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscriptions as $subscription )
                        <tr>
                            <td>{{ $subscription->user_id }}</td>
                            {{-- <td>{{ $plan->slug }}</td> --}}
                            <td>{{ $subscription->stripe_plan }}</td>
                            <td>{{ $subscription->trial_ends_at }}</td>
                            {{-- <td>{{ $plan->trial_period_days }}</td> --}}
                            <td>
                                
                                {{ $subscription->ends_at }}
                            </td>
                             <td>{{ \Carbon\Carbon::parse($subscription->updated_at)->diffForHumans() }}</td>
                            <td>{{ \Carbon\Carbon::parse($subscription->created_at)->diffForHumans() }}</td>
                            <td>
                                {{-- {{ $subscription->stripe_status }}  --}}
                            </td>
                            <td>
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