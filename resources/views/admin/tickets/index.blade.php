@extends('admin.layouts.default')

@section('admin.breadcrumb')
    <li class='breadcrumb-item active'>Tickets</li>
@endsection

@section('admin.content')
<div class="clearfix">
        <div class="card mb-3">
            <div class="card-body">
                <div class="card-title">
                    <strong>Tickets</strong>
                </div>


            <div class="panel-body">
                @if ($tickets->isEmpty())
                <p>There are currently no tickets.</p>
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Last Updated</th>
                            <th style="text-align:center" colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <tr>
                            <td>
                                {{ $ticket->category->name }}
                            </td>
                            <td>
                                <a href="{{ url('admin/tickets/'. $ticket->ticket_id) }}">
                                    #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                </a>
                            </td>
                            <td>
                                @if ($ticket->status === 'Open')
                                <span class="badge badge-info"> {{ $ticket->status }}</span>
                                @else
                                <span class="badge badge-danger"> {{ $ticket->status }}</span>
                                @endif
                            </td>
                            <td>{{ $ticket->updated_at->diffForHumans() }}</td>
                            <td class="float-right">
                                @if($ticket->status === 'Open')
                                <a href="{{ url('admin/tickets/' . $ticket->ticket_id) }}" class="btn btn-info"><i class="fa fa-commenting"></i></a>

                                <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}" method="POST" style="display: inline-block;">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-window-close-o"></i></button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $tickets->render() }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection