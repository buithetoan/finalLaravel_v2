@extends('admin.shared.main')
@section('title')
orders
@endsection
@section('content')
<div class="content_yield">
	<h3 class="page_title">Orders</h3>
	<a href="{{ route('order.create') }}" class="btn bg-color-green add_new_button"><i class="fas fa-plus"></i> Add new</a>
	@if(Session::has('message'))
	<div id="mydiv" style="position:absolute; right: 10px; top: 10px;" class="float-right mt-2 alert alert-success alert-dismissible fade show" role="alert" style="position: absolute;">
		<strong>{{ Session::get('message') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@elseif(Session::has('err'))
	<div id="mydiv" style="position:absolute; right: 10px; top: 100px;" class="float-right mt-2 alert alert-success alert-dismissible fade show" role="alert" style="position: absolute;">
		<strong>{{ Session::get('err') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif
	<table class="table table_xk table-hover table-bordered">
		<thead class="thead_green">
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Product Name</th>
				<th class="text-center">Quantity</th>
				<th class="text-center">Customer Name</th>
				<th class="text-center">Order Status</th>
				<th class="text-center">Payment Status</th>
				<th class="text-center">Total</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
			@foreach($orders as $key => $brand)
			<tr>
				<td class="text-center">{{++$key}}</td>
				<td class="text-center">
					<a href="">
						<h4>{{  $order->name }}</h4>
					</a>
				</td>
				<td class="text-center">
					<img src="{{asset('images/'.$brand->logo)}}" width="50" height="50" alt="logo">
				</td>
				<td class="text-center">{{ $order->address }}</td>
				<td class="text-center">{{ $order->phone_no }}</td>
				<td class="text-center">{{ $order->slug }}</td>
				<td class="text-center action_icon">
					<a href="{{route('order.edit',$order->id)}}"><i class="far fa-edit edit"></i></a>
					<a type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="{{$order->id}}" data-toggle="modal" data-target="#Modal"></a>
				</td>
			</tr>
			@endforeach
			<!-- End loop -->
		</tbody>
	</table>
</div>
{{-- {{Form::open(['route' => ['order_delete'], 'method' => 'DELETE'])}}  
@include('admin.modal.modaldelete')
{{ Form::close() }}
<script>
	$(document).on('click','.deletebutton',function(){
		var id=$(this).attr('data-id');
		console.log(id);
		$('#id').val(id);
	});
</script> --}}
@endsection