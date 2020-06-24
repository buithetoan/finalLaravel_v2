@extends('client.shared.master')
@section('content')
@include('client.layouts.login')
@include('client.layouts.register')
<div class="cart-box-main">
    <div class="container">
        <div class="row my-5 wuc-ph">
            <div class="col-lg-6 col-sm-6 ">
                <h3 class="wuc-Customers font-weight-bold text-center text-info"> CUSTOMERS INFORMATION</h3>
                <div class="coupon-box">
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Full Name:</h4>
                        <div class="ml-auto ">Nguyễn Phúc Hội</div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Address:</h4>
                        <div class="ml-auto "> 05 Hưng Hóa 02,Ðà Nẵng </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Phone No:</h4>
                        <div class="ml-auto "> 0384443449 </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Email:</h4>
                        <div class="ml-auto "> winwin260299@gmail.com </div>
                    </div>
                </div>
                <a href="checkout.html" ><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/1.png')}}" alt=""></a>
                <a href="checkout.html"><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/3.png')}}" alt=""></a>
                <a href="checkout.html"><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/5.png')}}" alt=""></a>
                <a href="checkout.html"><img class="img-fluid" src="{{asset('front_assets/images/payment-icon/7.png')}}" alt=""></a>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <h3 class="wuc-Customers font-weight-bold text-center text-info">ORDER SUMMARY</h3>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Product Code:</h4>
                        <div class="ml-auto "> Code </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Product Name:</h4>
                        <div class="ml-auto ">Product name...</div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Price:</h4>
                        <div class="ml-auto "> $ 80.0 </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Quantity:</h4>
                        <div class="ml-auto "> $ 80.0 </div>
                    </div>
                    <div class="d-flex">
                        <h4 class="font-weight-bold">Total:</h4>
                        <div class="ml-auto "> $80 </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">PayMent</a>
        </div>
        </div>
    </div>
</div>

@endsection