@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Website Analytics</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="analyticsOptions" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                        <div class="user-analytics text-center me-2">
                            <i class="bx bx-user me-1"></i>
                            <span>Users</span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="success" data-series="35">
                                </div>
                                <h3 class="mb-0">61K</h3>
                            </div>
                        </div>
                        <div class="sessions-analytics text-center me-2">
                            <i class="bx bx-pie-chart-alt me-1"></i>
                            <span>Sessions</span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="warning" data-series="76">
                                </div>
                                <h3 class="mb-0">92K</h3>
                            </div>
                        </div>
                        <div class="bounce-rate-analytics text-center">
                            <i class="bx bx-trending-up me-1"></i>
                            <span>Bounce Rate</span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="danger" data-series="65">
                                </div>
                                <h3 class="mb-0">72.6%</h3>
                            </div>
                        </div>
                    </div>
                    <div id="analyticsBarChart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
