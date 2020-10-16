@extends ('shop.layouts.master')

@section('content')


<!-- Start Slider -->
<div class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            @foreach($sliders as $slider)
            <img src="/upload/image/slider/{{$slider->image}}" alt="" title="{{$slider->title}}" />
            @endforeach

        </div>
    </div>
</div>
<!-- End Slider -->



<!-- Start product -->
<div class="new-product-area area-padding">
    <div class="container">
        @foreach($products as $pc)

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline ">
                    <h4>{{$pc['title']}}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="feature-item indicator-key new-pro-2">
                @foreach($pc['pro'] as $detile)

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-product">
                        <!--<span class="sale-text">Hot</span>-->
                        <div class="product-img">
                            <a href="#">

                                <img style="height: 200px;" src="/upload/image/product/{{$detile->image}}"
                                    class="first-img" src="" alt="">
                                <!--<img class="second-img" src="img/product/51.jpg" alt="">-->
                            </a>
                            <div class="product-summary">
                                <div class="product-details">
                                    <div class="add-cart">
                                        <a href="#">add to bascet</a>
                                    </div>
                                    <!--<div class="add-action">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                    data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h5 class="product-name"><a href="#">{{$detile->title}}</a></h5>
                            <!-- <div class="pro-rating no-rating">
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div> -->
                            <div class="price-box">
                                <!-- <span class="old-price">$170.00</span> -->
                                <span class="new-price">{{$detile->price}} تومان</span>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                <!-- End single product -->
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End product -->

<!--news-letter start -->
<div class="news-letter-area news-2">
    <div class="news-letter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-letter-text">
                        <div class="news-text">
                            <h3><span>Subscribe</span> to our newsletter</h3>
                            <p>Subscribe to the Expert mailing list to receive updates on new
                                arrivals,
                                special
                                offers and other discount information.</p>
                        </div>
                        <form action="#">
                            <div class="subscribe-box">
                                <input type="text" placeholder="Email.............">
                                <button type="button">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--news-letter-area end -->



<!-- Star Blog  -->
<div class="blog-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline come-headline">
                    <h4>اخرین اخبار </h4>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($blogs as $blog)
            <div class="blog-item">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <a href="#">
                                <img style="height: 300px;" src="/upload/image/blog/{{$blog->Image}}" alt="">
                                <span class="overly"></span>
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4><a href="#">{{$blog->getTitle()}}</a></h4>
                            <p>{{$blog->getDescription()}}</p>
                        </div>
                        <div class="blog-meta">
                            <span class="date-type">
                                <i class="fa fa-calendar"></i>
                                {{$blog->updated_at}}
                            </span>
                            <span class="comments-type">
                                <i class="fa fa-comment-o"></i>
                                <a href="#">30 comments</a>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- End blog  -->


<!-- Footer top Area -->
<div class="service-area">

</div>

@endsection