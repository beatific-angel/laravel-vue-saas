@extends('admin.layouts.default')

@section('admin.breadcrumb')
<li class='breadcrumb-item active'>Coupons</li>
@endsection

@section('admin.content')
<div class="clearfix">
    <div class="card">
        <div class="card-header">
            <strong>Create a Coupons / Discount</strong> 
            <span class="float-right text-info"> Coupon will automaticaly create on your stripe dashboard </span>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.coupons.store') }}" method="POST" class="form-horizontal offset-sm-2">
                    {!! csrf_field() !!}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Coupon name</label>
                    <div class="col-md-6">
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Coupon name.."
                            value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-name">Coupon Code</label>
                        <div class="col-md-6">
                            <input type="text" id="code_id" name="gateway_id" class="form-control"
                                placeholder="Exp: 25OFF"
                                value="{{ old('gateway_id') }}" required>
    
                                @if ($errors->has('gateway_id'))
                                    <span class="text-danger">{{ $errors->first('gateway_id') }}</span>
                                @endif
                        </div>
                    </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Percentage Off</label>
                    <div class="col-md-6">
                        <input type="text" id="price" name="percent_off" class="form-control"
                            placeholder="Enter Plan price.."
                            value="{{ old('percent_off') }}" required>

                            @if ($errors->has('percent_off'))
                                <span class="text-danger">{{ $errors->first('percent_off') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Duration</label>
                    <div class="col-md-6">
                            <select id="duration" type="" class="form-control" name="duration" required>
                                <option value="">Select Duration</option>
                                <option value="once">Once</option>
                                <option value="repeating">Repeating</option>
                                <option value="forever">Forever</option>
                            </select>

                            @if ($errors->has('duration'))
                                <span class="text-danger">{{ $errors->first('duration') }}</span>
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="hf-name">Duration in months</label>
                        <div class="col-md-6">
                            <input type="text" id="duration_in_months" name="duration_in_months" class="form-control"
                                placeholder="Duration ..."
                                value="{{ old('duration_in_months') }}">
                                <span style="font-size:11px;"><i class="fa fa-question-circle"></i> Required only if duration is repeating, in which case it must be a positive integer that specifies the number of months the discount will be in effect.</span>
    
                                @if ($errors->has('duration_in_months'))
                                    <span class="text-danger">{{ $errors->first('duration_in_months') }}</span>
                                @endif
                        </div>
                    </div>
                
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Create</button>
            </form>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
</div>
@endsection