@extends('index')

@section('title', 'Dashboard')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- Sales last year -->
            <div class="col-xl-3 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Sales</h5>
                        <small class="text-muted">Last Year</small>
                    </div>
                    <div id="salesLastYear"></div>
                    <div class="card-body pt-0">
                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0">175k</h4>
                            <small class="text-danger">-16.2%</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sessions Last month -->
            <div class="col-xl-3 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Sessions</h5>
                        <small class="text-muted">Last Month</small>
                    </div>
                    <div class="card-body">
                        <div id="sessionsLastMonth"></div>
                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0">45.1k</h4>
                            <small class="text-success">+12.6%</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Profit -->
            <div class="col-xl-3 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-danger mb-2 rounded">
                            <i class="ti ti-currency-dollar ti-md"></i>
                        </div>
                        <h5 class="card-title mb-1 pt-2">Total Profit</h5>
                        <small class="text-muted">Last week</small>
                        <p class="mb-2 mt-1">1.28k</p>
                        <div class="pt-1">
                            <span class="badge bg-label-secondary">-12.2%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Sales -->
            <div class="col-xl-3 col-md-4 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i></div>
                        <h5 class="card-title mb-1 pt-2">Total Sales</h5>
                        <small class="text-muted">Last week</small>
                        <p class="mb-2 mt-1">$4,673</p>
                        <div class="pt-1">
                            <span class="badge bg-label-secondary">+25.2%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-12 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Earning Reports</h5>
                            <small class="text-muted">Yearly Earnings Overview</small>
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="tab-content p-0 ms-0 ms-sm-2">
                            <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                                <div id="earningReportsTabsOrders"></div>
                            </div>
                            <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                <div id="earningReportsTabsSales"></div>
                            </div>
                            <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                <div id="earningReportsTabsProfit"></div>
                            </div>
                            <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                <div id="earningReportsTabsIncome"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
