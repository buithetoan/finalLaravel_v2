@extends('client.shared.master')
@section('content')
    @include('client.layouts.login')
    @include('client.layouts.register')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('images/'.$product->url_image)}}"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{$product->name}}</h2>
                        @if($product->promotion_price != null)
                            <h4> <strike class="text-secondary">${{$product->price}}</strike> ${{$product->promotion_price}}</h4>
                        @else
                            <h4>{{$product->price}}</h4>
                        @endif
                        
                        <div class="row ml-0">                           
                            <a class="btn-sm btn-group btn-group-sm btn-info" data-toggle="tooltip" data-placement="top" title="Categorry Name" href="{{url('product-all?category_id='.$category->id)}}">{{$category->name}}</a>

                            <a class="btn-sm btn-group btn-group-sm btn-success ml-1
                            " data-toggle="tooltip" data-placement="top" title="Brand Name" href="{{url('product-all?brand_id='.$brand->id)}}">{{$brand->name}}</a>
                        </div>
                        
                        <h4>Short Description:</h4>
                        <p>{{$product->detail}}</p>
                        <h4>Detail:</h4>
                        <p>{!! $product->description !!}</p>
                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                                <a class="btn hvr-hover" data-fancybox-close=""
                                   href="{{ url('/add-to-cart?product_id='.$product->id.'&quantity=1') }}">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
@endsection