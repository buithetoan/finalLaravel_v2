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
	<table class="table table_xk table-hover table-bordered">
		<thead class="thead_green">
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Customer Name</th>
				<th class="text-center">Order Status</th>
				<th class="text-center">Payment Status</th>
				<th class="text-center">Transaction Date</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
			@foreach($orders as $key => $order)
			<tr>
				<td class="text-center">{{++$key}}</td>
				<td></td>
				<td class="text-center">
					@if($order->order_status == 1)
						<button class="btn btn-sm btn-danger">Unconfirmed</button>
					@else
						<button class="btn btn-sm btn-success">Confirmed</button>
					@endif
				</td>

				<td class="text-center">
					@if($order->payment_status == 1)
						<button class="btn btn-sm btn-danger">COD</button>
					@else
						<button class="btn btn-sm btn-success">Momo</button>
					@endif
				</td>

				<td class="text-center">{!! Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->format('d.m.Y H:i') !!}</td>

				<td class="text-center action_icon">
					<a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-info detail"></i></a>
					<a type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="{{$order->id}}" data-toggle="modal" data-target="#Modal"></a>
				</td>
			</tr>
			@endforeach
			<!-- End loop -->
		</tbody>
	</table>
</div>
<!-- Modal dialog show detail -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Order Detail</h4>
			</div>
			<div class="modal-body">
				<p>Some text in the modal.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

{{Form::open(['route' => ['order.delete'], 'method' => 'DELETE'])}}  
@include('admin.modal.modaldelete')
{{ Form::close() }}
<script>
	$(document).on('click','.deletebutton',function(){
		var id=$(this).attr('data-id');
		console.log(id);
		$('#id').val(id);
	});
	setTimeout(function() {
		var element = document.getElementById("div-alert");
		element.classList.add("fade");
	}, 2000)

	//Ajax show order detail
</script>
@endsection