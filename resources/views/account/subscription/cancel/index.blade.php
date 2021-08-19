@extends('account.layouts.default')

@section('content')
    <div class="card">
         <!-- Card header -->
         <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0"> Cancel subscription</h5>
        </div>
        <div class="card-body">
            <p class="card-subtitle mb-4">You can cancel your subscription Here !</p>

            <form method="POST" action="{{ route('account.subscription.cancel.store') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
