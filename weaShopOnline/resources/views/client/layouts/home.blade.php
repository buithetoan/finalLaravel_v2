@extends('client.shared.master')
@section('content')
@include('client.layouts.login')
@include('client.layouts.register')
<body>
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
         	@foreach($slides as $key => $slide)
                <li class="text-left">
                    <img src="{{asset('images/'.$slide->image)}}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>WEASHOP</strong></h1>
                                <p class="m-b-40">{{$slide->description}}</p>
                                <p><a class="btn hvr-hover" href="{{$slide->url}}">Shop Now</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('front_assets/images/mac-1.jpg')}}" alt="" />
                        <a class="btn hvr-hover" href="#">MacBook</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('front_assets/images/asus-1.jpg')}}" alt="" />
                        <a class="btn hvr-hover" href="#">Assus</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('front_assets/images/dell-2.jpg')}}" alt="" />
                        <a class="btn hvr-hover" href="#">Dell</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('front_assets/images/acer-5.png')}}" alt="" />
                        <a class="btn hvr-hover" href="#"> Acer</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('front_assets/images/msi-3.png')}}" alt="" />
                        <a class="btn hvr-hover" href="#">MSI</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('front_assets/images/lenovo-3.jpg')}}" alt="" />
                        <a class="btn hvr-hover" href="#">Lenovo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-hot">Hot</button>
                            <button data-filter=".top-new">New</button>
                            <button data-filter=".top-sale">Best Seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <!--Top hot product-->
                @foreach($topHots as $key => $topHot)
                    <div class="col-lg-3 col-md-6 special-grid top-hot">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="{{asset('/images/'.$topHot->url_image)}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>
                                    <a href="">{{ Illuminate\Support\Str::limit($topHot->name, 25) }}</a>
                                </h4>
                                @if($topHot->promotion_price != null)
                                    <h5>${{$topHot->promotion_price}}</h5>
                                    <h5 class="text-secondary">$<strike>{{$topHot->price}}</strike></h5>
                                @else
                                    <h5>${{$topHot->price}}</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <!--Top new product-->
                @foreach($topNews as $key => $topNew)
                    <div class="col-lg-3 col-md-6 special-grid top-new">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="{{asset('/images/'.$topNew->url_image)}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>
                                    <a href="">{{ Illuminate\Support\Str::limit($topNew->name, 25) }}</a>
                                </h4>
                                @if($topNew->promotion_price != null)
                                    <h5>${{$topNew->promotion_price}}</h5>
                                    <h5 class="text-secondary">$<strike>{{$topHot->price}}</strike></h5>
                                @else
                                    <h5>${{$topNew->price}}</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <!--Top Sales product-->
                @foreach($topSales as $key => $topSale)
                    <div class="col-lg-3 col-md-6 special-grid top-sale">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="{{asset('/images/'.$topSale->url_image)}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>
                                    <a href="">{{ Illuminate\Support\Str::limit($topSale->name, 25) }}</a>
                                </h4>
                                @if($topSale->promotion_price != null)
                                    <h5>${{$topSale->promotion_price}}</h5>
                                    <h5 class="text-secondary">$<strike>{{$topSale->price}}</strike></h5>
                                @else
                                    <h5>${{$topSale->price}}</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Products  -->
    <!-- Start Instagram Feed  -->
    @include('client.shared.slider_advertisement')
    <!-- End Instagram Feed  -->

</body>
@endsection