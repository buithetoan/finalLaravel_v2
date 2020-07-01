@extends('admin.shared.main')
@section('title')
weaShopOnline - Dashboard
@endsection
@section('content')
	<div class="content_yield">
		<h2 class="title">Dashboard</h2>
		<div class="col-xs-12 col-sm-4">
			<div class="total product_total">
				<div class="icon">
					<i class="fa fa-calendar-plus"></i>
				</div>
				<div class="info">
					<h6>Total product</h6>
					<h3>3000</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="total customer_total">
				<div class="icon">
					<i class="fa fa-laugh"></i>
				</div>
				<div class="info">
					<h6>Total customer</h6>
					<h3>300</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="total revenue_total">
				<div class="icon">
					<i class="fa fa-dollar-sign"></i>
				</div>
				<div class="info">
					<h6>Total revenue</h6>
					<h3>100000 $</h3>
				</div>
			</div>
		</div>
	</div>
@endsection