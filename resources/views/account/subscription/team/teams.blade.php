@extends('account.layouts.default')

@section('content')
<div class="card">

    <div class="card-body">
        <h4 class="card-title">My teams</h4>

        <ul class="list-group list-group-flush list my--3">
            @forelse ($team_users as $team_user )
            <li class="list-group-item px-0">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <!-- Avatar -->
                        <a href="#" class="avatar rounded-circle">
                            <img alt="Image placeholder" src="{{ asset('storage'. $team_user->profile_image) }}">
                        </a>
                    </div>
                    <div class="col ml--2">
                        <h4 class="mb-0">
                            <a href="#!">{{ $team_user->first_name }} {{ $team_user->last_name }}</a>
                        </h4>
                        <h5>
                            <i>{{ $team_user->email }}</i>
                        </h5>
                        <span class="text-success">●</span>
                        <small>Online</small>
                    </div>
                    <div class="col-auto">
                        
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-primary">
                                <i class="fas fa-envelope"></i> Send message</button>
                    </div>
                </div>
            </li>
            @empty
                <p class="card-subtitle mt-3">There is no user yet associate to this team.</p> 
            @endforelse

            @if (\Auth::user()->team->owner)
                <div class="text-center pt-3 pb-3 ">
                    <a href="{{ route('account.subscription.team.index') }}" type="button" class="btn btn-default btn-sm"><i class="fas fa-users"></i> Manage Team</a>
                </div>
            @endif
            
        </ul>

    </div>
</div>
@endsection