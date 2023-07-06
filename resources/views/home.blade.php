@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="avatar-sm float-right">
                        <span class="avatar-title bg-soft-primary rounded-circle">
                            <i class="bx bx-layer m-0 h3 text-primary"></i>
                        </span>
                    </div>
                    <h6 class="text-muted text-uppercase mt-0">Project Income</h6>
                    <h3 class="my-3">$4,514</h3>
                    <span class="badge badge-soft-primary mr-1"> +11% </span> <span class="text-muted">From previous period</span>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="avatar-sm float-right">
                        <span class="avatar-title bg-soft-primary rounded-circle">
                            <i class="bx bx-dollar-circle m-0 h3 text-primary"></i>
                        </span>
                    </div>
                    <h6 class="text-muted text-uppercase mt-0">Net Revenue</h6>
                    <h3 class="my-3">$85,365</h3>
                    <span class="badge badge-soft-primary mr-1"> -29% </span> <span class="text-muted">This Month</span>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="avatar-sm float-right">
                        <span class="avatar-title bg-soft-primary rounded-circle">
                            <i class="bx bx-analyse m-0 h3 text-primary"></i>
                        </span>
                    </div>
                    <h6 class="text-muted text-uppercase mt-0">New Leads</h6>
                    <h3 class="my-3">$<span data-plugin="counterup">9.94</span></h3>
                    <span class="badge badge-soft-primary mr-1"> 0% </span> <span class="text-muted">This Month</span>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="avatar-sm float-right">
                        <span class="avatar-title bg-soft-primary rounded-circle">
                            <i class="bx bx-basket m-0 h3 text-primary"></i>
                        </span>
                    </div>
                    <h6 class="text-muted text-uppercase mt-0">Quoted </h6>
                    <h3 class="my-3" data-plugin="counterup">5,842</h3>
                    <span class="badge badge-soft-primary mr-1"> +89% </span> <span class="text-muted">This Month</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-animate">
            <div class="card-body">
                <h4 class="card-title d-inline-block">My Schemes</h4>
                <div class="table-responsive">
                    <table class="table table-borderless table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Scheme</th>
                                <th>Balance</th>
                                <th>Account Status</th>
                                <th>Last Transaction Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SHARE CAPITAL</td>
                                <td>40,000</td>
                                <td>ACTIVE</td>
                                <td>DATE</td>
                            </tr>
                            <tr>
                                <td>DEPOSIT</td>
                                <td>40,000</td>
                                <td>ACTIVE</td>
                                <td>DATE</td>
                            </tr>
                            <tr>
                                <td>NORMAL LOAN</td>
                                <td>40,000</td>
                                <td>ACTIVE</td>
                                <td>DATE</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            </div>
        </div> <!-- end col -->
    </div>
</div>
@endsection
