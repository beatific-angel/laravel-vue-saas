@extends('account.layouts.default')

@section('content')
    <div class="card">
        <!-- Card header -->
        <div class="card-header">
                <!-- Title -->
                <h5 class="h3 mb-0">Update Card : <span><img src="{{ asset('cards/'.auth()->user()->card_brand.'.png') }}" width="45"/> ****** {{ auth()->user()->card_last_four }}</span></h5>
        </div>
        <div class="card-body">
            <p class="card-subtitle mb-5">You can securely update your credit card information for future payments.</p>

            <form method="POST" action="{{ route('account.subscription.card.store') }}" id="card-form">
                {{ csrf_field() }}

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="update">
                        Update card
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script>
        let handler = StripeCheckout.configure({
            key: '{{ config('services.stripe.key') }}',
            locale: 'auto',
            token: function (token) {
                let form = $('#card-form')

                $('#update').prop('disabled', true)

                $('<input>').attr({
                    type: 'hidden',
                    name: 'token',
                    value: token.id,
                }).appendTo(form)

                form.submit();
            }
        })

        $('#update').click(function (e) {
            handler.open({
                name: 'Laravel SaaS',
                currency: '{{ config('settings.cashier.currency') }}',
                key: '{{ config('services.stripe.key') }}',
                email: '{{ auth()->user()->email }}',
                panelLabel: 'Update card'
            })

            e.preventDefault();
        })
    </script>
@endsection
