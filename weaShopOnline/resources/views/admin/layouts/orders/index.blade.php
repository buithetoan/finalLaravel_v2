@extends('admin.shared.main')
@section('title')
weaShopOnline - Orders
@endsection
@section('content')
<div class="content_yield">
	<div class="row">
		<h3 class="col-md-8 page_title">Orders</h3>
		<div class="col-md-4">
			@if(Session::has('message'))
			<div id="div-alert" style="position:absolute; right: 10px;" class="float-right mt-2 alert alert-success alert-dismissible show" role="alert" style="position: absolute;">
				<strong>{{ Session::get('message') }}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@elseif(Session::has('err'))
			<div id="div-alert" style="position:absolute; right: 10px;" class="float-right mt-2 alert alert-success alert-dismissible show" role="alert" style="position: absolute;">
				<strong>{{ Session::get('err') }}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif			
		</div>
	</div>
	<a href="{{ route('order.create') }}" class="btn bg-color-green add_new_button"><i class="fas fa-plus"></i> Add new</a>	
	<table class="table table_xk table-hover table-bordered">
		<thead class="thead_green">
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Customer Name</th>
				<th class="text-center">Order Status</th>
				<th class="text-center">Payment Status</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
			@foreach($orders as $key => $order)
			<tr>
				<td class="text-center">{{++$key}}</td>
				<td class="text-center">{{ $order->customers->full_name }}</td>
				<td class="text-center">{{ $order->order_status }}</td>
				<td class="text-center">{{ $order->payment_status }}</td>
				<td class="text-center action_icon">
					<a href="#"><i class="far fa-edit edit"></i></a>
					<a type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="" data-toggle="modal" data-target="#Modal"></a>
				</td>
			</tr>
			@endforeach
			<!-- End loop -->
		</tbody>
	</table>
</div>

@endsection