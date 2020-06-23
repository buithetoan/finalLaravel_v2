@extends('client.shared.master')
@section('content')
@include('client.layouts.login')
@include('client.layouts.register')
<div class="cart-box-main">
    <div class="container">
        <div class="row my-5 wuc-ph">
            <div class="col-lg-6 col-sm-6 ">
                <h3 class="wuc-Customers font-weight-bold"> CUSTOMERS INFORMATION</h3>
                <div class="coupon-box">
                    <div class="d-flex">
                        <h4>FULL NAME :</h4>
                        <div class="ml-auto ">Nguyễn Phúc Hội </div>
                    </div>
                    <div class="d-flex">
                        <h4>ADDRESS :</h4>
                        <div class="ml-auto "> 05 Hưng Hóa 02,Đà Nẵng </div>
                    </div>
                    <div class="d-flex">
                        <h4>PHONE NUMBERS :</h4>
                        <div class="ml-auto "> 0384443449 </div>
                    </div>
                    <div class="d-flex">
                        <h4>EMAIL :</h4>
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
                    <h3 class="wuc-Customers font-weight-bold">ORDER SUMMARY</h3>
                    <div class="d-flex">
                        <h4>PRODUCT IMAGES</h4>
                        <div class="ml-auto "> Images </div>
                    </div>
                    <div class="d-flex">
                        <h4>PRODUCTS NAME</h4>
                        <div class="ml-auto ">Tên của sản phẩm cần lấy ra là gì đó? ...</div>
                    </div>
                    <div class="d-flex">
                        <h4>PRICE</h4>
                        <div class="ml-auto "> $ 80.0 </div>
                    </div>
                    <div class="d-flex">
                        <h4>QUANTITY :</h4>
                        <div class="ml-auto "> $ 80.0 </div>
                    </div>
                    <div class="d-flex">
                        <h4>TOTAL</h4>
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