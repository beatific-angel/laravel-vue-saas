@extends('admin.layouts.default')

@section('admin.breadcrumb')
    <li class='breadcrumb-item active'>Users</li>
@endsection

@section('admin.content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <strong>Users</strong>
                <a class="pull-right" href="{{ route('admin.users.create') }}">Add new user</a>
            </div>

            <div class="my-1">
                <p class="h5">Filters</p>

                <div class="row">
                    <div class="col-sm-12">
                        @include('admin.users.partials._filters')
                    </div>
                </div>
            </div>
        </div>

        @if($users->total())
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="selectAll">
                            <label class="custom-control-label" for="selectAll"></label>
                        </label>
                    </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Verified</th>
                    <th></th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="user{{ $user->id }}">
                                <label class="custom-control-label" for="user{{ $user->id }}"></label>
                            </label>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>{{ $user->activated ? 'True' : 'False' }}</td>
                        <td>
                            <a href="{{ route('admin.users.roles.index', $user) }}">Manage roles</a>
                        </td>
                        <td>
                            <span class="float-right" style="font-size:18px;">
                                <a href="{{ URL::to('admin/users/' . $user->id . '/edit') }}"><i style="padding-right:10px;" class="fa fa-edit" title="Edit user"></i></a>
                                {{-- <a href="#"><i style="color:#f86c6b;" class="fa fa-user-times" title="Disable user"></i></a> --}}
                            </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card-body">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <div class="card-text">No users found.</div>
            </div>
        @endif
    </div>
@endsection