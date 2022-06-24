@extends('layouts.master')

@section('content')




<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="fa-solid fa-cart-arrow-down"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="fa-solid fa-chart-line"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="fa-solid fa-user-plus"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>




<div class="col-lg-3 col-6">

<div class="small-box bg-primary">
<div class="inner">
<h3>265</h3>
<p>Total Bids (This month) </p>
</div>
<div class="icon">
<i class="fa-solid fa-circle-check"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title">Monthly Recap Report</h5>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<div class="btn-group">
<button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
<i class="fas fa-wrench"></i>
</button>
<div class="dropdown-menu dropdown-menu-right" role="menu">
<a href="#" class="dropdown-item">Action</a>
<a href="#" class="dropdown-item">Another action</a>
<a href="#" class="dropdown-item">Something else here</a>
<a class="dropdown-divider"></a>
<a href="#" class="dropdown-item">Separated link</a>
</div>
</div>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>

<div class="card-body">
<div class="row">
<div class="col-md-8">
<p class="text-center">
<strong>Sales: 1 Jan, 2010 - 30 May, 2022</strong>
</p>
<div class="chart">

<canvas id="salesChart" height="180" style="height: 180px;"></canvas>
</div>

</div>

<div class="col-md-4">
<p class="text-center">
<strong>Goal Completion</strong>
</p>
<div class="progress-group">
Vehicles in Auctions
<span class="float-right"><b>160</b>/200</span>
<div class="progress progress-sm">
<div class="progress-bar bg-primary" style="width: 80%"></div>
</div>
</div>

<div class="progress-group">
Complete Purchase
<span class="float-right"><b>310</b>/400</span>
<div class="progress progress-sm">
<div class="progress-bar bg-danger" style="width: 75%"></div>
</div>
</div>

<div class="progress-group">
<span class="progress-text">Total Invoice Issues (Paid)</span>
<span class="float-right"><b>480</b>/800</span>
<div class="progress progress-sm">
<div class="progress-bar bg-success" style="width: 60%"></div>
</div>
</div>

<div class="progress-group">
Send Inquiries
<span class="float-right"><b>250</b>/500</span>
<div class="progress progress-sm">
<div class="progress-bar bg-warning" style="width: 50%"></div>
</div>
</div>

</div>

</div>

</div>

<div class="card-footer">
<div class="row">
<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
<h5 class="description-header">$35,210.43</h5>
<span class="description-text">TOTAL REVENUE</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
<h5 class="description-header">$10,390.90</h5>
<span class="description-text">TOTAL COST</span>
</div>

</div>

<div class="col-sm-3 col-6">
<div class="description-block border-right">
<span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
<h5 class="description-header">$24,813.53</h5>
<span class="description-text">TOTAL PROFIT</span>
</div>

</div>

<div class="col-sm-3 col-6">
 <div class="description-block">
<span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
<h5 class="description-header">1200</h5>
<span class="description-text">GOAL COMPLETIONS</span>
</div>

</div>
</div>

</div>

</div>

</div>

</div>


<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Online Visitors</h3>
<a href="javascript:void(0);">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">820</span>
<span>Visitors Over Time</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 12.5%
</span>
<span class="text-muted">Since last week</span>
</p>
</div>

<div class="position-relative mb-4">
<canvas id="visitors-chart" height="200"></canvas>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
<i class="fas fa-square text-primary"></i> This Week
</span>
<span>
<i class="fas fa-square text-gray"></i> Last Week
</span>
</div>
</div>
</div>

<div class="card">
<div class="card-header border-0">
<h3 class="card-title">Vehicles</h3>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-sm">
<i class="fas fa-download"></i>
</a>
<a href="#" class="btn btn-tool btn-sm">
<i class="fas fa-bars"></i>
</a>
</div>
</div>
<div class="card-body table-responsive p-0">
<table class="table table-striped table-valign-middle">
<thead>
<tr>
<th>Vehicles</th>
<th>Price</th>
<th>Sales</th>
<th>More</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<img src="/img/toyota_logo.png" alt="Product 1" class="img-circle img-size-32 mr-2">
Toyota
</td>
<td>$1300 USD</td>
<td>
<small class="text-success mr-1">
<i class="fas fa-arrow-up"></i>
12%
</small>
12 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
<tr>
<td>
<img src="/img/suzuki_logo.png" alt="Product 1" class="img-circle img-size-32 mr-2">
Suzuki
</td>
<td>$29,00 USD</td>
<td>
<small class="text-warning mr-1">
<i class="fas fa-arrow-down"></i>
0.5%
</small>
21 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
<tr>
<td>
<img src="/img/bmw_logo.png" alt="Product 1" class="img-circle img-size-32 mr-2">
BMW
</td>
<td>$45,030 USD</td>
<td>
<small class="text-danger mr-1">
<i class="fas fa-arrow-up"></i>
3%
</small>
198 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
<tr>
<td>
<img src="img/audilogo.png" alt="Product 1" class="img-circle img-size-32 mr-2">
AUDI
<span class="badge bg-danger">NEW</span>
</td>
<td>$19,049 USD</td>
<td>
<small class="text-success mr-1">
<i class="fas fa-arrow-up"></i>
63%
</small>
87 Sold
</td>
<td>
<a href="#" class="text-muted">
<i class="fas fa-search"></i>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>

<div class="col-lg-6">
<div class="card">
<div class="card-header border-0">
<div class="d-flex justify-content-between">
<h3 class="card-title">Sales</h3>
<a href="javascript:void(0);">View Report</a>
</div>
</div>
<div class="card-body">
<div class="d-flex">
<p class="d-flex flex-column">
<span class="text-bold text-lg">$18,230.00</span>
<span>Sales Over Time</span>
</p>
<p class="ml-auto d-flex flex-column text-right">
<span class="text-success">
<i class="fas fa-arrow-up"></i> 33.1%
</span>
<span class="text-muted">Since last month</span>
</p>
</div>

<div class="position-relative mb-4">
<canvas id="sales-chart" height="200"></canvas>
</div>
<div class="d-flex flex-row justify-content-end">
<span class="mr-2">
<i class="fas fa-square text-primary"></i> This year
</span>
<span>
<i class="fas fa-square text-gray"></i> Last year
</span>
</div>
</div>
</div>

<div class="card">
<div class="card-header border-0">
<h3 class="card-title">Online Store Overview</h3>
<div class="card-tools">
<a href="#" class="btn btn-sm btn-tool">
<i class="fas fa-download"></i>
</a>
<a href="#" class="btn btn-sm btn-tool">
<i class="fas fa-bars"></i>
</a>
</div>
</div>
<div class="card-body">
<div class="d-flex justify-content-between align-items-center border-bottom mb-3">
<p class="text-success text-xl">
<i class="fa-solid fa-money-bill-transfer"></i>
</p>
<p class="d-flex flex-column text-right">
 <span class="font-weight-bold">
<i class="ion ion-android-arrow-up text-success"></i> 12%
</span>
<span class="text-muted">CONVERSION RATE</span>
</p>
</div>

<div class="d-flex justify-content-between align-items-center border-bottom mb-3">
<p class="text-warning text-xl">
<i class="fa-solid fa-cart-shopping"></i>
</p>
<p class="d-flex flex-column text-right">
<span class="font-weight-bold">
<i class="ion ion-android-arrow-up text-warning"></i> 0.8%
</span>
<span class="text-muted">SALES RATE</span>
</p>
</div>

<div class="d-flex justify-content-between align-items-center mb-0">
<p class="text-danger text-xl">
<i class="fa-solid fa-users-line"></i>
</p>
<p class="d-flex flex-column text-right">
<span class="font-weight-bold">
<i class="ion ion-android-arrow-down text-danger"></i> 1%
</span>
<span class="text-muted">REGISTRATION RATE</span>
</p>
</div>

</div>
</div>
</div>

</div>



<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.js?v=3.2.0"></script>

<script src="plugins/chart.js/Chart.min.js"></script>

<script src="dist/js/demo.js"></script>

<script src="dist/js/pages/dashboard3.js"></script>
@endsection
