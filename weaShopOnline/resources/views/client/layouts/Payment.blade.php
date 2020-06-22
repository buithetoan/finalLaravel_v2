@extends('client.shared.master')
@section('content')
@include('client.layouts.login')
@include('client.layouts.register')
<div class="col-md-12 wuc-p">
	<div class="row">
		<div class="col-md-6">
			<div>
				<div class="order-box">
					<h3> Customers Information</h3>
					<div class="d-flex">
						<h4>Full Name :</h4>
						<div class="ml-auto font-weight-bold">Nguyễn Phúc Hội </div>
					</div>
					<div class="d-flex">
						<h4>Address :</h4>
						<div class="ml-auto font-weight-bold"> 05 Hưng Hóa 02,Đà Nẵng </div>
					</div>
					<hr class="my-1">
					<div class="d-flex">
						<h4>Phone Numbers :</h4>
						<div class="ml-auto font-weight-bold"> 0384443449 </div>
					</div>
					<div class="d-flex">
						<h4>Email :</h4>
						<div class="ml-auto font-weight-bold"> winwin260299@gmail.com </div>
					</div>
					<div class="d-flex">
						<h4>Slug</h4>
						<div class="ml-auto font-weight-bold">  </div>
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<div class="payment-icon">
						<ul>
							<li><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/1.png')}}" alt=""></li>
							<li><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/2.png')}}" alt=""></li>
							<li><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/3.png')}}" alt=""></li>
							<li><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/5.png')}}" alt=""></li>
							<li><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/7.png')}}" alt=""></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- product information -->
		<div class="col-md-6">
			<div class="">
				<div class="order-box">
					<h3>Order Summary</h3>
					<div class="d-flex">
						<h4>Product Images</h4>
						<div class="ml-auto font-weight-bold"> Images </div>
					</div>
					<div class="d-flex">
						<h4>Products Name</h4>
						<div class="ml-auto font-weight-bold">Tên của sản phẩm cần lấy ra là gì đó? ...</div>
					</div>
					<hr class="my-1">
					<div class="d-flex">
						<h4>Price</h4>
						<div class="ml-auto font-weight-bold"> $ 80.0 </div>
					</div>
					<div class="d-flex">
						<h4>Quantity</h4>
						<div class="ml-auto font-weight-bold"> 1 </div>
					</div>
					<div class="d-flex">
						<h4>Total</h4>
						<div class="ml-auto font-weight-bold"> $80 </div>
					</div>
					<hr> 
				</div>

				<div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">PayMent</a> </div>
			</div>
		</div>
		<!-- end -->
	</div>
</div>
@endsection