@extends('layouts.master')

@section('content')


<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">All Bids</h3>
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
<th>Vehicle Serial No</th>
<th>Customer NAme</th>
<th>Vehicle</th>
<th>Price</th>
<th>Date</th>
<th>Location</th>
<th>Status</th>
<th>Action</th>

</tr>
</thead>
<tbody>
<tr>
<td>70</td>
<td>James M.</td>
<td>Rav4</td>
<td>10,000,00</td>
<td>4 June 22</td>
<td>Arusha</td>
<td><span class="badge bg-success">Approved</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>183</td>
<td>Michael J</td>
<td>Harrier</td>
<td>550,000</td>
<td>4 June 22</td>
<td>Arusha</td>
<td><span class="badge bg-danger">Declined</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>43</td>
<td>Thobias M.</td>
<td>IST</td>
<td>400,000</td>
<td>4 Feb 22</td>
<td>Moshi</td>
<td><span class="badge bg-success">Approved</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>507</td>
<td>James M.</td>
<td>BMW</td>
<td>18,000,000</td>
<td>4 May 22</td>
<td>Dar es salaam</td>
<td><span class="badge bg-danger">Declined</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>223</td>
<td>Philip A.</td>
<td>Escudo</td>
<td>2,000,000</td>
<td>3 Aug 21</td>
<td>Dodoma</td>
<td><span class=" badge bg-warning">Pending</span></td>
<td><i class="text-primary fa-solid fa-pen-to-square"></i></td>
</tr>
<tr>
<tr>
<td>103</td>
<td>Jacob H.</td>
<td>Marcedes</td>
<td>10,000,000,00</td>
<td>12 March 22</td>
<td>Arusha</td>
<td><span class=" badge bg-success">Approved</span></td>
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