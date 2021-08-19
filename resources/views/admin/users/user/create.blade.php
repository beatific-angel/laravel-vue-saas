@extends('admin.layouts.default')

@section('admin.breadcrumb')
<li class='breadcrumb-item active'>New User</li>
@endsection

@section('admin.content')
<div class="clearfix">
    <div class="card">
        <div class="card-header">
            <strong>Create new User</strong> 
            <span class="center"> </span>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST" class="form-horizontal offset-sm-2">
                    {!! csrf_field() !!}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">First name</label>
                    <div class="col-md-6">
                        <input type="text" id="firts_name" name="firts_name" class="form-control"
                            placeholder="Enter first name" required
                            value="{{ old('firts_name') }}">

                            @if ($errors->has('firts_name'))
                                <span class="text-danger">{{ $errors->first('firts_name') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Last Name</label>
                    <div class="col-md-6">
                        <input type="text" id="last_name" name="last_name" class="form-control"
                            placeholder="Enter Last name .." required
                            value="{{ old('name') }}">

                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">User name</label>
                    <div class="col-md-6">
                        <input type="text" id="username" name="username" class="form-control"
                            placeholder="Enter user name" required
                            value="{{ old('user') }}">

                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Email</label>
                    <div class="col-md-6">
                        <input type="text" id="email" name="email" class="form-control"
                            placeholder="Enter email" required
                            value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Phone</label>
                    <div class="col-md-6">
                        <input type="text" id="phone" name="phone" class="form-control"
                            placeholder="Enter phone"
                            value="{{ old('phone') }}">

                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Password</label>
                    <div class="col-md-6">
                        <input type="text" id="password" name="password" class="form-control"
                            placeholder="Enter a default password"
                            value="{{ old('password') }}">

                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Create new user</button>
            </form>
        </div>
        {{-- <div class="card-footer">
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div> --}}
    </div>
</div>
@endsection