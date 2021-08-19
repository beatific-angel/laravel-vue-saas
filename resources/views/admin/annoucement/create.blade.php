@extends('admin.layouts.default')

@section('admin.breadcrumb')
    <li class='breadcrumb-item active'>Annoucement</li>
@endsection

@section('admin.content')
<div class="container-fluid mt--6">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">New annoucement</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">

            <form action="{{ route('admin.annoucement.store') }}" method="POST" class="form-horizontal offset-sm-2">
                    {!! csrf_field() !!}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Subject *</label>
                    <div class="col-md-6">
                        <input type="text" id="subject" required name="subject" class="form-control"
                            placeholder="Enter subject"
                            value="{{ old('subject') }}">

                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Message *</label>
                    <div class="col-md-6">
                        <textarea id="body" name="body" required class="form-control"
                            placeholder="Enter Message.."
                            value="{{ old('body') }}">
                        </textarea>

                            @if ($errors->has('body'))
                                <span class="text-danger">{{ $errors->first('body') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Action Text</label>
                    <div class="col-md-6">
                        <input type="text" id="action" name="action" class="form-control"
                            placeholder="Enter Plan name.."
                            value="{{ old('action') }}">

                            @if ($errors->has('action'))
                                <span class="text-danger">{{ $errors->first('action') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">URL</label>
                    <div class="col-md-6">
                        <input type="url" id="url" name="url" class="form-control"
                            placeholder="Enter link when click to url text"
                            value="{{ old('url') }}">

                            @if ($errors->has('url'))
                                <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-name">Message footer *</label>
                        <div class="col-md-6">
                            <input type="text" id="thanks" required name="thanks" class="form-control"
                                placeholder="Enter Thanks message"
                                value="{{ old('thanks') }}">
    
                                @if ($errors->has('thanks'))
                                    <span class="text-danger">{{ $errors->first('thanks') }}</span>
                                @endif
                        </div>
                    </div>
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Add annoucement</button>
            </form>

        </div>
    </div>
</div>

@endsection