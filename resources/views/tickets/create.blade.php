@extends('account.layouts.default')
@section('title', 'Open Ticket')
@section('content')
<div class="container-fluid mt--6">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h2 class="mb-0"><i class="fas fa-ticket-alt"></i> Create New Ticket</h2>
        </div>
        <!-- Card body -->
        <div class="card-body">
                
            <form class="form-horizontal offset-sm-2" role="form" method="POST">
                {!! csrf_field() !!}

                <div class="form-group row {{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-2 col-form-label form-control-label">Title</label>
                    <div class="col-md-7">
                        <input id="title" type="text" class="form-control" name="title"
                            value="{{ old('title') }}">

                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('category') ? ' has-error' : '' }}">
                    <label for="category" class="col-md-2 col-form-label form-control-label">Category</label>

                    <div class="col-md-7">
                        <select id="category" type="category" class="form-control" name="category">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('category'))
                        <span class="help-block">
                            <span class="text-danger">{{ $errors->first('category') }}</sp>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('priority') ? ' has-error' : '' }}">
                    <label for="priority" class="col-md-2 col-form-label form-control-label">Priority</label>

                    <div class="col-md-7">
                        <select id="priority" type="" class="form-control" name="priority">
                            <option value="">Select Priority</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>

                        @if ($errors->has('priority'))
                        <span class="help-block">
                            <span class="text-danger">{{ $errors->first('priority') }}</span>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('message') ? ' has-error' : '' }}">
                    <label for="message" class="col-md-2 col-form-label form-control-label">Message</label>

                    <div class="col-md-7">
                        <textarea rows="5" id="message" class="form-control" name="message"></textarea>

                        @if ($errors->has('message'))
                        <span class="help-block">
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-md-offset-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-ticket-alt"></i> Open Ticket
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection