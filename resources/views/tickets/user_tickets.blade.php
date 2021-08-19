@extends('account.layouts.default')
@section('title', 'My Tickets')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card card-default">
                <div class="card-header border-0">
                    <h2 class="mb-0"> <i class="fas fa-ticket-alt"></i> My Tickets
                        <span class="float-right">
                            <a href="/account/new-ticket" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> Create New Ticket
                            </a>
                        </span>
                    </h2>
                </div>
                @if($tickets->isEmpty())
                <h3 class="text-center">You have not created any tickets.</h3>
                @else
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                            <tr>
                                <td>
                                    <h5>{{ $ticket->category->name }}</h5>
                                </td>
                                <td>
                                    <a href="{{ url('account/tickets/' . $ticket->ticket_id) }}">
                                        #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if($ticket->status == "Open")
                                        <span class="badge badge-info"> {{ $ticket->status }}</span>
                                        @else
                                        <span class="badge badge-danger"> {{ $ticket->status }}</span>
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($ticket->updated_at)->diffForHumans() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $tickets->render() }}
                @endif
            </div>
        </div>
    </div>
</div>
{{-- New ticket modal --}}
<div class="col-md-4">
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Create new ticket</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection