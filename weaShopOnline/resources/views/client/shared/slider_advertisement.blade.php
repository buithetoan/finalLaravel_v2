<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        @foreach($brands as $key => $brand)
            <div class="item">
                <div class="ins-inner-box">
                    <a href=""><img src="{{asset('/images/'.$brand->logo)}}" alt="" /></a>
                </div>
            </div>
        @endforeach
    </div>
</div>