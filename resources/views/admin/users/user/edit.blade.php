@extends('admin.layouts.default')

@section('admin.breadcrumb')
<li class='breadcrumb-item active'>Edit user</li>
@endsection

@section('admin.content')
<div class="clearfix">
    <div class="card">
        <div class="card-header">
            <strong>Edit user</strong>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="form-horizontal offset-sm-2">
                    {!! csrf_field() !!}
                    @method('PUT')
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">First Name</label>
                    <div class="col-md-6">
                        <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $user->first_name }}"
                            >

                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Last name</label>
                    <div class="col-md-6">
                        <input type="text" id="last_name" name="last_name" class="form-control"
                            value="{{ $user->last_name }}">

                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">User name</label>
                    <div class="col-md-6">
                        <input type="text" id="username" name="username" class="form-control"
                            value="{{ $user->username }}">

                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Email</label>
                    <div class="col-md-6">
                        <input type="text" id="trial" name="email" class="form-control"
                            value="{{ $user->email }}">

                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Phone</label>
                    <div class="col-md-6">
                        <input type="text" id="trial" name="phone" class="form-control"
                            value="{{ $user->phone }}">

                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                    </div>
                </div>
                
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Update user</button>
            </form>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
</div>
@endsection