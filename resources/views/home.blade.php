@extends('dashboard.index')
@section('title', "Tableau de bord")
@section('content')
    <!--{ app content start }-->
    <div class="main-content app-content mt-0">
        <div class="side-app">
            <!--{ container start }-->
            <div class="main-container container-fluid">
                <!--{ PAGE HEADER START }-->
                <div class="page-header">
                    <h1 class="page-title">Dashboard</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--{ PAGE HEADER END }-->

                <!-- start row -->
                <div class="row">
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                                <span class="avatar avatar-xl brround  bg-primary">
                                                    <i class="fe fe-users fs-30"></i>
                                                </span>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">45</span>/<span class="counter">76</span></div>
                                            <p class="fw-semibold text-truncate-1-line">Invoices Awaiting Payment</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Invoices Awaiting </a>
                                        <div class="text-end">
                                            <span class="fs-12 text-dark">$5,569</span>
                                            <span class="fs-11 text-muted">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3 progress-sm">
                                        <div class="progress-bar bg-primary " role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                                <span class="avatar avatar-xl brround  bg-warning">
                                                    <i class="fe fe-cast fs-30"></i>
                                                </span>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">50</span>/<span class="counter">79</span></div>
                                            <p class="fw-semibold text-truncate-1-line">Converted Leads</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Converted Leads </a>
                                        <div class="text-end">
                                            <span class="fs-12 text-dark">$5,569</span>
                                            <span class="fs-11 text-muted">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3 progress-sm">
                                        <div class="progress-bar bg-warning " role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                                <span class="avatar avatar-xl brround  bg-info">
                                                    <i class="fe fe-cast fs-30"></i>
                                                </span>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">100</span>/<span class="counter">50</span></div>
                                            <p class="fw-semibold text-truncate-1-line">Projects In Progress</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Projects In Progress</a>
                                        <div class="text-end">
                                            <span class="fs-12 text-dark">$50,569</span>
                                            <span class="fs-11 text-muted">(56%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3 progress-sm">
                                        <div class="progress-bar bg-info " role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                                <span class="avatar avatar-xl brround  bg-success">
                                                    <i class="fe fe-cast fs-30"></i>
                                                </span>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">50.59%</span></div>
                                            <p class="fw-semibold text-truncate-1-line">Conversion Rate</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Conversion Rate</a>
                                        <div class="text-end">
                                            <span class="fs-12 text-dark">$2,254</span>
                                            <span class="fs-11 text-muted">(66%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3 progress-sm">
                                        <div class="progress-bar bg-success " role="progressbar" style="width: 56%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <!--{ row-2 start}-->
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-strech">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title">Revenue Growth </h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="revenuegrowth">
                                    <div class="revenuegrowth-chart" id="revenuegrowth"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex align-items-strech">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h4 class="card-title">Browser States</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-chrome fs-16 text-primary me-2"></i>
                                                    <span>Google Chrome</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">90%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-success" style="width: 90%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-firefox-browser fs-16 text-warning me-2"></i>
                                                    <span>Mozila Firefox</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">76%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-primary" style="width: 76%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-safari fs-16 text-info me-2"></i>
                                                    <span>Apple Safari</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">50%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-warning" style="width: 50%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-edge fs-16 text-success me-2"></i>
                                                    <span>Edge Browser</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">20%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-success" style="width: 20%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-opera fs-16 text-danger me-2"></i>
                                                    <span>Opera mini</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">15%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-danger" style="width: 15%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-internet-explorer fs-16 text-teal me-2"></i>
                                                    <span>Internet Explorer</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">12%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-teal" style="width: 12%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:void(0);">
                                                    <i class="fa-brands fa-octopus-deploy fs-16 text-dark me-2"></i>
                                                    <span>Others Browser</span>
                                                </a>
                                            </td>
                                            <td>
                                                            <span class="text-end d-flex align-items-center m-0">
                                                                <span class="me-3">6%</span>
                                                                <span class="progress w-100 progress-sm">
                                                                    <span class="progress-bar bg-dark" style="width: 6%"></span>
                                                                </span>
                                                            </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Explore Details</a>
                        </div>
                    </div>
                </div>
                <!--{ row-2 end}-->
                <!--{ row-3 start}-->
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Visits by Day </h3>
                            </div>
                            <div class="card-body pt-0 pb-0">
                                <div class="user-visitsCharts">
                                    <div id="visitsCharts"> </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="common-space">
                                    <div><a class="f-w-600 f-14 " href="index.html">Most Visited Day</a><span class="f-light f-w-500 f-14 d-block">Total 59.6k visits on Sunday </span></div>
                                    <div class="visited-dropdown">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sales Analytics</h3>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="transactions" class="chart-dropshadow" height="370"
                                            width="1120"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 d-flex align-items-strech">
                        <div class="card overflow-hidden">
                            <div class="card-header justify-content-between">
                                <div>
                                    <h3 class="card-title"> Report </h3>
                                    <span class="text-muted">Monthly Avg. $45.578k</span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0 border-0" type="button" id="cardOpt5"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx fs-5 bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt5">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="report-chart-wrapper">
                                    <div id="reportChart"></div>
                                </div>
                                <div class="report-list border-top pt-3 px-3">
                                    <div class="report-list-item rounded-2 mb-3 bg-light">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon shadow-sm me-2">
                                                <img src="/dashboard/assets/images/svgs/paypal-icon.svg" width="22"
                                                     height="22" alt="Paypal">
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Income</span>
                                                    <h5 class="mb-0">$42,845</h5>
                                                </div>
                                                <small class="text-success">+2.34k</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-list-item rounded-2 mb-3 bg-light">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon shadow-sm me-2">
                                                <img src="/dashboard/assets/images/svgs/shopping-bag-icon.svg"
                                                     width="22" height="22" alt="Paypal">
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Expense</span>
                                                    <h5 class="mb-0">$38,658</h5>
                                                </div>
                                                <small class="text-danger">-1.15k</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-list-item rounded-2 mb-3 mb-xl-0 bg-light">
                                        <div class="d-flex align-items-start">
                                            <div class="report-list-icon shadow-sm me-2">
                                                <img src="/dashboard/assets/images/svgs/wallet-icon.svg" width="22"
                                                     height="22" alt="Paypal">
                                            </div>
                                            <div
                                                class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                                                <div class="d-flex flex-column">
                                                    <span>Profit</span>
                                                    <h5 class="mb-0">$18,220</h5>
                                                </div>
                                                <small class="text-success">+1.35k</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--{ row-3 end}-->
                <!--{ row-4 start }-->
                <div class="row">
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Top Selling Products</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive text-nowrap">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Order Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/dashboard/assets/images/products/41.jpg"
                                                         alt="products" height="50" width="50" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-medium lh-1">Yellow polka dot</span>
                                                        <small class="text-muted">Dashsage</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                                <span
                                                                    class="badge bg-danger-transparent rounded-pill text-danger p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                                    Fashion
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted lh-1">
                                                    <span class="text-primary fw-medium">$120</span>/499
                                                </div>
                                                <small class="text-muted">Partially Paid</small>
                                            </td>
                                            <td>
                                                            <span
                                                                class="badge bg-primary-transparent rounded-pill text-primary p-2 px-3">Confirmed</span>
                                            </td>
                                            <td>
                                                <div class="g-1">
                                                    <a class="btn text-primary btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Edit">
                                                        <i class="fe fe-edit fs-14"></i>
                                                    </a>
                                                    <a class="btn text-danger btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Delete">
                                                        <i class="fe fe-trash-2 fs-14"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/dashboard/assets/images/products/42.jpg"
                                                         alt="Black dress, chic"  height="50" width="50" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-medium lh-1">Black dress, chic</span>
                                                        <small class="text-muted">Dashsage</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                                <span
                                                                    class="badge bg-warning-transparent rounded-pill text-warning p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                                    Fashion
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted lh-1">
                                                    <span class="text-primary fw-medium">$149</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td>
                                                            <span
                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                            </td>
                                            <td>
                                                <div class="g-1">
                                                    <a class="btn text-primary btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Edit">
                                                        <i class="fe fe-edit fs-14"></i>
                                                    </a>
                                                    <a class="btn text-danger btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Delete">
                                                        <i class="fe fe-trash-2 fs-14"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/dashboard/assets/images/products/43.jpg"
                                                         alt="Sunglasses, stylish, hat"  height="50" width="50" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-medium lh-1">Sunglasses, stylish, hat</span>
                                                        <small class="text-muted">Dashsage</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                                <span
                                                                    class="badge bg-info-transparent rounded-pill text-info p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                                    Fashion
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted lh-1">
                                                    <span class="text-primary fw-medium">$0</span>/899
                                                </div>
                                                <small class="text-muted">Unpaid</small>
                                            </td>
                                            <td>
                                                            <span
                                                                class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                            </td>
                                            <td>
                                                <div class="g-1">
                                                    <a class="btn text-primary btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Edit">
                                                        <i class="fe fe-edit fs-14"></i>
                                                    </a>
                                                    <a class="btn text-danger btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Delete">
                                                        <i class="fe fe-trash-2 fs-14"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/dashboard/assets/images/products/44.jpg"
                                                         alt="Smiling, dress, pink."  height="50" width="50" class="me-2">
                                                    <div class="d-flex flex-column">
                                                                    <span class="fw-medium lh-1">
                                                                        Smiling, dress, pink.</span>
                                                        <small class="text-muted">Dashsage</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                                <span
                                                                    class="badge bg-primary-transparent rounded-pill text-primary p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                                    Fashion
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted lh-1">
                                                    <span class="text-primary fw-medium">$149</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td>
                                                            <span
                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                            </td>
                                            <td>
                                                <div class="g-1">
                                                    <a class="btn text-primary btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Edit">
                                                        <i class="fe fe-edit fs-14"></i>
                                                    </a>
                                                    <a class="btn text-danger btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Delete">
                                                        <i class="fe fe-trash-2 fs-14"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/dashboard/assets/images/products/48.jpg"
                                                         alt="Gorgeous, floral, chic"  height="50" width="50" class="me-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-medium lh-1">Gorgeous, floral, chic.</span>
                                                        <small class="text-muted">Dashsage</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                                <span
                                                                    class="badge bg-warning-transparent rounded-pill text-warning p-2  me-3">
                                                                    <i class="fe fe-user"></i>
                                                                </span>
                                                    Fashion
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-muted lh-1">
                                                    <span class="text-primary fw-medium">$149</span>
                                                </div>
                                                <small class="text-muted">Fully Paid</small>
                                            </td>
                                            <td>
                                                            <span
                                                                class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Completed</span>
                                            </td>
                                            <td>
                                                <div class="g-1">
                                                    <a class="btn text-primary btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Edit">
                                                        <i class="fe fe-edit fs-14"></i>
                                                    </a>
                                                    <a class="btn text-danger btn-sm"
                                                       data-bs-toggle="tooltip"
                                                       data-bs-original-title="Delete">
                                                        <i class="fe fe-trash-2 fs-14"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h3 class="card-title">Sales Report by Locations with Devices</h3>
                                </div>
                            </div>
                            <div class="card-body p-0 mt-2">
                                <div id="world-map-markers1" class="worldh world-map h-250"></div>
                                <div class="table-responsive mt-2 text-center">
                                    <table class="table text-nowrap border-dashed mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-start">Device</th>
                                            <th class="">USA</th>
                                            <th class="">India</th>
                                            <th class="">Malta</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-start p-4">
                                                            <span
                                                                class="sales-icon text-primary mx-2 brround bg-primary-transparent p-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" fill="currentColor" class="bi
                                                                bi-phone" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                                                                    </path>
                                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                                                </svg></span>
                                                <span>Mobiles</span>
                                            </td>
                                            <td class="p-4">22%</td>
                                            <td class="p-4">25%</td>
                                            <td class="p-4">30%</td>
                                        </tr>
                                        <tr>
                                            <td class="text-start p-4">
                                                            <span
                                                                class="sales-icon text-secondary mx-2 brround bg-secondary-transparent p-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" fill="currentColor"
                                                                    class="bi bi-display" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46
                                                                    0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757
                                                                    0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z">
                                                                    </path>
                                                                </svg></span>
                                                <span>Desktop</span>
                                            </td>
                                            <td class="p-4">32%</td>
                                            <td class="p-4">38%</td>
                                            <td class="p-4">45%</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--{ row-4 end }-->
            </div>
            <!--{ container end }-->
        </div>
    </div>
    <!--{ app content end }-->
@endsection
