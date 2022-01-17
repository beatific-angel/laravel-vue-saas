@extends('account.layouts.default')

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Tickets</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">0</span>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                aria-valuemax="100" style="width: 30%;"></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="{{ route('ticket.index') }}" class="text-nowrap text-white font-weight-600">Go to tickets</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Projects</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">20</span>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Items sold</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">5622</span>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Notifications</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">9500</span>
                        <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="card">
        <div class="card-header bg-transparent">
          <div class="row align-items-center">
            <div class="col">
              <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
              <h5 class="h3 mb-0">Total orders</h5>
            </div>
          </div>
        </div>
        <div class="card-body">
          <!-- Chart -->
          <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="chart-bars1" class="chart-canvas chartjs-render-monitor" width="341" height="350" style="display: block; width: 341px; height: 350px;"></canvas>
          </div>
        </div>
      </div>
</div>
@endsection

@section('scripts')
<script>
new Chart(document.getElementById("chart-bars1"), {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [
        {
          label: "Orders",
          backgroundColor: "#3e95cd",
          data: [933,221,983,2478, 2600,2700,2800,2900,1734,1800,1850,1900]
        }, {
          label: "Sales",
          backgroundColor: "#8e5ea2",
          data: [1608,947,2675,934,2800,850,1900,1600, 2600,2700,2800,2900]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Total Orders and Sales (Month)'
      }
    }
});
</script>
@endsection