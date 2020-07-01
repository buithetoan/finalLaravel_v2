@extends('admin.shared.main')
@section('title')
	Order details
@endsection
@section('content')
<div class="content_yield">	
	<table class="table table_xk table-hover table-bordered">
		<thead class="thead_green">
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Quantity</th>
				<th class="text-center">Order id</th>
				<th class="text-center">Product id</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
			@foreach($order_details as $key => $order_detail)
			<tr>
				<td class="text-center">{{ ++$key }}</td>
				<td class="text-center">{{ $order_detail->quantity }}</td>
				<td class="text-center">{{ $order_detail->order_id }}</td>
				<td class="text-center">{{ $order_detail->product_id }}</td>
			</tr>
			@endforeach
			<!-- End loop -->
		</tbody>
	</table>
</div>
@endsection