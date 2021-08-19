@extends('admin.layouts.default')

@section('admin.breadcrumb')
    <li class='breadcrumb-item active'>Tickets</li>
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
            <h2 class="mb-0">#{{ $ticket->ticket_id }} - {{ $ticket->title }}</h2>
        </div>
        <!-- Card body -->
        <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="ticket-info">
                        <blockquote class="blockquote">
                        <h4>{{ $ticket->message }}</h4>
                        <footer class="blockquote-footer" style="font-size:14px;">
                            Category: {{ $ticket->category->name }} | 
                                <span>
                                    @if($ticket->status == "Open")
                                    Status: <i class="bg-success" style="width: 0.5rem; height: 0.5rem;"></i> <span class="status"> {{ $ticket->status }}</span>
                                    @else
                                    Status: <i class="bg-danger" style="height: 0.5rem; width: 0.5rem"></i> <span class="status">{{ $ticket->status }}</span>
                                    @endif
                                </span>  | 
                                <cite>Created : {{ $ticket->created_at->diffForHumans() }}</cite>
                            </footer>
                        </blockquote>
                    </div>
                    <hr>
                    @include('tickets.comments')
                    <hr>
                    @include('tickets.reply')
            </div>
        </div>
    </div>

@endsection