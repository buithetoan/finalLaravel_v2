@extends('admin.shared.main')
@section('title')
Products
@endsection
@section('content')
<div class="content_yield">
	<h3 class="page_title">Products</h3>
	<a href="{{ route('product.create') }}" class="btn bg-color-green add_new_button"><i class="fas fa-plus"></i> Add new</a>
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
				<th class="text-center">Name</th>
				<th class="text-center">Code</th>
				<th class="text-center">Image</th>
				<th class="text-center">Price</th>
				<th class="text-center">Promotion Price</th>
				<th class="text-center">Quantity</th>
				<th class="text-center">Hot</th>
				<th class="text-center">New</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- Loop -->
			@foreach($products as $key => $product)
			<tr>
				<td class="text-center">{{++$key}}</td>
				<td class="text-center">
					<a href="{{route('product.show',$product->id)}}">
						<h4>{{  $product->name }}</h4>
					</a>
				</td>
				<td class="text-center">{{ $product->code }}</td>
				<td class="text-center">{{ $product->urrl_image }}</td>
				<td class="text-center">{{ $product->price }}</td>
				<td class="text-center">{{ $product->promotion_price }}</td>
				<td class="text-center">{{ $product->quantity }}</td>
				<td class="text-center">{{ $product->is_hot }}</td>
				<td class="text-center">{{ $product->is_new }}</td>
				<td class="text-center action_icon">
					<a href="{{route('product.edit',$product->id)}}"><i class="far fa-edit edit"></i></a>
					<a type="button" class="fas fa-trash-alt deletebutton text-danger btn" data-id="{{$product->id}}" data-toggle="modal" data-target="#Modal"></a>
				</td>
			</tr>
			@endforeach
			<!-- End loop -->
		</tbody>
	</table>
</div>
{{Form::open(['route' => ['product_delete'], 'method' => 'DELETE'])}}  
@include('admin.modal.modaldelete')
{{ Form::close() }}
<script>
	$(document).on('click','.deletebutton',function(){
		var id=$(this).attr('data-id');
		console.log(id);
		$('#id').val(id);
	});
</script>
@endsection