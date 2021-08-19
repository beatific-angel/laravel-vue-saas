@extends('account.layouts.default')
@section('title', 'My Invoices')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card card-default">
                <div class="card-header border-0">
                    <h2 class="mb-0"> <i class="fas fa-file-invoice-dollar"></i> My Invoices
                        
                    </h2>
                </div>
                @if($invoices->isEmpty())
                <h3 class="text-center">You have not yet any invoices.</h3>
                @else
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $invoice)
                            <tr>
                                <td>
                                    <h5>{{ $invoice->date()->toFormattedDateString() }}</h5>
                                </td>
                                <td>
                                    {{ $invoice->total() }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if($invoice->paid == true)
                                        <span class="badge badge-info"> Paid</span>
                                        @else
                                        <span class="badge badge-danger"> Not paid</span>
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    {{-- <a target="__blank" href="{{ $invoice->invoice_pdf }}"><i class="fas fa-download"></i> Download</a> --}}
                                    <a href="/account/subscription/invoice/invoice/{{ $invoice->id }}"><i class="fas fa-download"></i> Download</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection