@extends ('shop.layouts.master')

@section('content')
<!-- single product  -->
<div class="single-page-area shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shop-head">
                    <ul class="shop-head-menu ">
                        <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                        <li>{{$Product->title}}</li>
                    </ul>
                </div>
                <!-- shop head end -->
            </div>
        </div>
    </div>
    <!-- Single Product details Area -->
    <div class="single-product-detaisl-area">
        <!-- Single Product View Area -->
        <div class="single-product-view-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <!-- Single Product View -->
                        <div class="single-procuct-view">
                            <!-- Simple Lence Gallery Container -->
                            <div class="simpleLens-gallery-container" id="p-view">
                                <div class="simpleLens-container tab-content">
                                    <div class="tab-pane active" id="p-view-1">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image"
                                                data-lens-image="/upload/image/product/{{$Product->image}}">
                                                <img src="/upload/image/product/{{$Product->image}}"
                                                    class="simpleLens-big-image" alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-2">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="../img/product/sb-2.jpg">
                                                <img src="../img/product/sp-2.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-3">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="../img/product/sb-3.jpg">
                                                <img src="../img/product/sp-3.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-4">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="../img/product/sb-4.jpg">
                                                <img src="../img/product/sp-4.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-5">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="../img/product/sb-5.jpg">
                                                <img src="../img/product/sp-5.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-6">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="../img/product/sb-6.jpg">
                                                <img src="../img/product/sp-6.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Simple Lence Thumbnail -->
                                <div class="simpleLens-thumbnails-container text-center">
                                    <div id="single-product" class="owl-carousel custom-carousel">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="active"><a href="#p-view-1" role="tab" data-toggle="tab"><img
                                                        src="../img/product/ss-1.jpg" alt="productd"></a></li>
                                            <li class="last-li"><a href="#p-view-2" role="tab" data-toggle="tab"><img
                                                        src="../img/product/ss-2.jpg" alt="productd"></a></li>
                                            <li class="hidden-md hidden-xs hidden-sm"><a href="#p-view-3" role="tab"
                                                    data-toggle="tab"><img src="../img/product/ss-3.jpg"
                                                        alt="productd"></a></li>
                                        </ul>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class=""><a href="#p-view-4" role="tab" data-toggle="tab"><img
                                                        src="../img/product/ss-4.jpg" alt="productd"></a></li>
                                            <li class="last-li"><a href="#p-view-5" role="tab" data-toggle="tab"><img
                                                        src="../img/product/ss-5.jpg" alt="productd"></a></li>
                                            <li class="hidden-md hidden-xs hidden-sm"><a href="#p-view-6" role="tab"
                                                    data-toggle="tab"><img src="../img/product/ss-6.jpg"
                                                        alt="productd"></a></li>
                                        </ul>
                                    </div>
                                </div><!-- End Simple Lence Thumbnail -->
                            </div><!-- End Simple Lence Gallery Container -->
                        </div><!-- End Single Product View -->
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
                        <div class="single-details shop-review ">
                            <div class="product-name">
                                <h3><a>{{$Product->title}}</a></h3>
                            </div>
                            <!-- <div class="ratings no-rating sin-rating">
                                <ul>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                                <p class="rating-links">
                                    <a href="#">2 Review(s)</a>
                                    <span class="separator">|</span>
                                    <a href="#" class="add-to-review">Add Your Review</a>
                                </p>
                            </div> -->
                            <div class="price-box list-price">
                                <!-- <span class="old-price">$800.00</span> -->
                                <span class="new-price">{{$Product->price}} تومان</span>
                            </div>
                            <p class="availability in-stock">Availability: <span>@if($Product->count > 0) In
                                    stock @else Not in stock @endif</span>
                            </p>
                            <div class="product-reveiw">
                                <p>{{$Product->description}}</p>
                            </div>
                            <div class="add-to-cart cart-sin-product">
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="qty-button">
                                            <input type="text" class="input-text qty" title="Qty" value="1"
                                                maxlength="12" id="qty" name="qty">

                                            <div class="box-icon button-plus">
                                                <input type="button" class="qty-increase "
                                                    onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;"
                                                    value="+">
                                            </div>
                                            <div class="box-icon button-minus">
                                                <input type="button" class="qty-decrease"
                                                    onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;"
                                                    value="-">
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button type="submit">Add to cart</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product View -->
    </div>
    <!-- End Single details -->

    <!-- Single Description Tab -->
    <div class="single-product-description">
        <div class="container">
            <div class="row">
                <div class="col-lg 12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-description-tab custom-tab">
                        <!-- tab bar -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#product-des" data-toggle="tab">Description</a></li>
                            <li><a href="#product-rev" data-toggle="tab">Details</a></li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-des">
                                <p>{{$Product->description}}</p>
                            </div>
                            <div class="tab-pane" id="product-rev">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product-rev-left">
                                            <p class="product-action">
                                                <a href="http://bootexperts.com/">BootExperts</a> <b>Review by</b>
                                                <span>BootExperts</span>
                                            </p>
                                            <div class="product-ratting">
                                                <table class="">
                                                    <tr>
                                                        <td>Quality</td>
                                                        <td>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price</td>
                                                        <td>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Value</td>
                                                        <td>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <p>BootExperts <span class="posted">(Posted on
                                                    {{$Product->created_at}})</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tag">
                                <h2>Other people marked this product with these tags:</h2>
                                <p class="product-action">
                                    <a href="http://bootexperts.com/">Laptop </a> <span>(1)</span>
                                </p>
                                <form action="#" class="product-form">
                                    <label>Add Your Tags:</label>
                                    <input type="text" class="form-control" required="required">
                                    <button class="btn custom-button" value="submit">Add Tags</button>
                                </form>
                                <p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Description Tab -->

    <!-- single-page-feature -->
    <div class="single-page-feature area-padding">
        <div class="container">
            <!-- heading start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline ">
                        <h4>products</h4>
                    </div>
                </div>
            </div>
            <!-- heading end -->
            <div class="row">
                <div class="upsell-product">
                    <!-- single-product start -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product page-single-item">
                            <!-- <span class="new-text">New</span> -->
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="../img/product/44.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>

                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- single-page-feature end -->

</div>
<!-- Single Product  end -->


<!-- Start service  -->
<div class="service-area">

</div>
<!-- End service  -->

@endsection