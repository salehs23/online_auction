@extends('layouts.master')

@section('content')


<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">All Customers</h3>
<div class="card-tools">
<div class="input-group input-group-sm" style="width: 150px;">
<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
<div class="input-group-append">
<button type="submit" class="btn btn-default">
<i class="fas fa-search"></i>
</button>
</div>
</div>
</div>
</div>

<div class="card-body table-responsive p-0">
 <table class="table table-hover text-nowrap">
<thead>
<tr>

<th>Name</th>
<th>Location</th>
<th>Phone</th>
<th>Status</th>
<th>Action</th>

</tr>
</thead>
<tbody>
<tr>
<td>Oswald Tellis</td>
<td>Dar es salaam</td>
<td>0784 123 456</td>
<td><span class="badge bg-success">Active</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>Osama F.</td>
<td>Dar es salaam</td>
<td>0784 112 332</td>
<td><span class="badge bg-success">Active</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>Harry M.</td>
<td>Arusha</td>
<td>0714 444 456</td>
<td><span class="badge bg-success">Active</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>Meghan M.</td>
<td>Dar es salaam</td>
<td>0784 123456</td>
<td><span class="badge bg-danger">Inactive</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>Jacob L.</td>
<td>Dodoma</td>
<td>0764 444 200</td>
<td><span class="badge bg-danger">Inactive</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>Martha B.</td>
<td>Dar es salaam</td>
<td>0784 000 540</td>
<td><span class="badge bg-success">Active</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
</tbody>
</table>
</div>

</div>

</div>
</div>

@endsection