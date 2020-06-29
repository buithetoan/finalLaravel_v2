<ul class="sidebar" >
	<!-- Dash board -->
	<div class="dash_board">
		<div class="dash_board_ava">
			<img src="{{ asset('images/sunflower.png') }}" alt="#">
		</div>
		<a class="dash_board_link" href="{{url('/home')}}"> Dashboard </a>
	</div>
	<!-- Manage list -->
	<li class="list_item">
		<a class="item_link" href="{{ route('brand.index') }}">Brand</a>
	</li>
	<li class="list_item">
		<a class="item_link" href="#">Category</a>
	</li>
	<li class="list_item">
		<a class="item_link" href="#">Product</a>
	</li>
	<li class="list_item">
		<a class="item_link" href="#">User Management</a>
	</li>
	<li class="list_item">
		<a class="item_link" href="#">Slide</a>
	</li>
	<li class="list_item">
		<a class="item_link" href="{{ route('order.index') }}">Order Management</a>
	</li>
</ul>