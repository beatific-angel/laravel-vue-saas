@extends('account.layouts.default')

@section('content')
 <!-- Header -->
 <div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6">
                <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Full calendar</h6>
                <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                  </ol>
                </nav>
              </div>
              <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
                <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                  <i class="fas fa-angle-left"></i>
                </a>
                <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                  <i class="fas fa-angle-right"></i>
                </a>
                <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
                <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Week</a>
                <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Day</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection