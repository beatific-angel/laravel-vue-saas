@extends('account.layouts.default')

@section('content')
    <div class="card">

        <div class="card-body">
            <h4 class="card-title">Swap subscription - Upgrading or Downgrading plan</h4>
            <p class="card-subtitle mb-2">
                You are currently on the <strong>{{ auth()->user()->plan->name }}</strong> plan, at a rate of:
                <strong>({{ config('settings.cashier.currency.symbol') }}{{ auth()->user()->plan->price }})</strong>
            </p>

            <form method="POST" action="{{ route('account.subscription.swap.store') }}">
                {{ csrf_field() }}

                <div class="form-group row{{ $errors->has('plan') ? ' has-error' : '' }}">
                    <label for="plan" class="col-md-4 control-label">Plan</label>

                    <div class="col-md-6">

                        <select name="plan" id="plan"
                                class="form-control custom-select{{ $errors->has('plan') ? ' is-invalid' : '' }}"
                                required>
                            @foreach($plans as $plan)
                                <option value="{{ $plan->gateway_id }}"
                                        {{ request('plan') === $plan->slug ||
                                        old('plan') === $plan->gateway_id ? 'selected' : '' }}>
                                    {{ $plan->name }} (${{ $plan->price }})
                                </option>
                            @endforeach
                        </select>

                        @if ($errors->has('plan'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('plan') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
