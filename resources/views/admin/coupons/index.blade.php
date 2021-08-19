@extends('admin.layouts.default')

@section('admin.breadcrumb')
<li class='breadcrumb-item active'>Plans</li>
@endsection

@section('admin.content')
<div class="clearfix">
    <div class="col-lg">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Coupons
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Percent off</th>
                            <th>Coupon Code</th>
                            <th>Duration</th>
                            <th>Date</th>
                            {{-- <th>Status</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupons as $coupon )
                        <tr>
                            <td>{{ $coupon->name }}</td>
                            <td><span class="badge badge-info">{{ $coupon->percent_off }}</span> </td>
                            <td><span class="badge badge-success" style="font-size:14px">{{ $coupon->gateway_id }}</span> </td>
                            <td>{{ $coupon->duration }}</td>
                            <td>{{ $coupon->created_at->diffForHumans() }}</td>
                            {{-- <td>
                                @if ($plan->active === 1)
                                <span class="badge badge-success"> Active</span>
                                @else
                                <span class="badge badge-danger"> Inactive</span>
                                @endif
                            </td> --}}
                            <td>
                                <a href="{{ URL::to('admin/coupons/' . $coupon->id . '/edit') }}">
                                {{-- <a class="btn btn-info" href="{{ route('admin.plans.edit',$plan->id)}}"> --}}
                                    <i class="fa fa-edit "></i>
                                </a>
                                {{-- <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a> --}}
                                <form action="{{ route('admin.coupons.destroy', $coupon->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o "></i></b>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection