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
                        <li>Single Product</li>
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
                                            <a class="simpleLens-lens-image" data-lens-image="img/product/sb-1.jpg">
                                                <img src="img/product/sp-1.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-2">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="img/product/sb-2.jpg">
                                                <img src="img/product/sp-2.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-3">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="img/product/sb-3.jpg">
                                                <img src="img/product/sp-3.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-4">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="img/product/sb-4.jpg">
                                                <img src="img/product/sp-4.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-5">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="img/product/sb-5.jpg">
                                                <img src="img/product/sp-5.jpg" class="simpleLens-big-image"
                                                    alt="productd">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="p-view-6">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lens-image="img/product/sb-6.jpg">
                                                <img src="img/product/sp-6.jpg" class="simpleLens-big-image"
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
                                                        src="img/product/ss-1.jpg" alt="productd"></a></li>
                                            <li class="last-li"><a href="#p-view-2" role="tab" data-toggle="tab"><img
                                                        src="img/product/ss-2.jpg" alt="productd"></a></li>
                                            <li class="hidden-md hidden-xs hidden-sm"><a href="#p-view-3" role="tab"
                                                    data-toggle="tab"><img src="img/product/ss-3.jpg"
                                                        alt="productd"></a></li>
                                        </ul>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class=""><a href="#p-view-4" role="tab" data-toggle="tab"><img
                                                        src="img/product/ss-4.jpg" alt="productd"></a></li>
                                            <li class="last-li"><a href="#p-view-5" role="tab" data-toggle="tab"><img
                                                        src="img/product/ss-5.jpg" alt="productd"></a></li>
                                            <li class="hidden-md hidden-xs hidden-sm"><a href="#p-view-6" role="tab"
                                                    data-toggle="tab"><img src="img/product/ss-6.jpg"
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
                                <h3><a href="#">Laoreet Congue</a></h3>
                            </div>
                            <div class="ratings no-rating sin-rating">
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
                            </div>
                            <div class="price-box list-price">
                                <span class="old-price">$800.00</span>
                                <span class="new-price">$555.00</span>
                            </div>
                            <p class="availability in-stock">Availability: <span>In stock</span></p>
                            <div class="product-reveiw">
                                <p>Vestibulum ante ipsum primis Nunc facilisis sagittis ullamcorper. Proin lectus ipsum,
                                    gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean
                                    eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla
                                    luctus malesuada tincidunt. Class aptent taciti...</p>
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
                            <!-- Add to cart end -->
                            <div class="sin-product-icons fix">
                                <div class="add-action">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- social-markting end -->
                            <div class="social-button-img">
                                <a href="#">
                                    <img src="img/logo/social.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product View Area -->
    </div>
    <!-- End Single details Area -->
    <!-- Single Description Tab -->
    <div class="single-product-description">
        <div class="container">
            <div class="row">
                <div class="col-lg 12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-description-tab custom-tab">
                        <!-- tab bar -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
                            <li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
                            <li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-des">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                    justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                    nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum
                                    metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.
                                    Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien
                                    libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi
                                    posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit
                                    et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis
                                    convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim
                                    lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et
                                    mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum
                                    primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend
                                    laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus
                                    malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia
                                    nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu,
                                    placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque
                                    in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel
                                    tellus non nunc mattis lobortis. </p>
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
                                            <p>BootExperts <span class="posted">(Posted on 20/02/2016)</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product-rev-right">
                                            <h3>You're reviewing: Proin lectus ipsum</h3>
                                            <h3><b>How do you rate this product? <span>*</span></b></h3>
                                            <div class="product-rev-right-table table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr class="first last">
                                                            <th>&nbsp;</th>
                                                            <th><span class="nobr">1 star</span></th>
                                                            <th><span class="nobr">2 stars</span></th>
                                                            <th><span class="nobr">3 stars</span></th>
                                                            <th><span class="nobr">4 stars</span></th>
                                                            <th><span class="nobr">5 stars</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>Quality</th>
                                                            <th><input type="radio" class="radio" name="ratings[1]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[1]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[1]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[1]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[1]">
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Price</th>
                                                            <th><input type="radio" class="radio" name="ratings[2]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[2]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[2]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[2]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[2]">
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>Value</th>
                                                            <th><input type="radio" class="radio" name="ratings[3]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[3]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[3]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[3]">
                                                            </th>
                                                            <th><input type="radio" class="radio" name="ratings[3]">
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="porduct-rev-right-form">
                                                <form action="#" class="form-horizontal product-form">
                                                    <div class="form-goroup">
                                                        <label>Nickname <sup>*</sup></label>
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    <div class="form-goroup">
                                                        <label>Summary of Your Review <sup>*</sup></label>
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    <div class="form-goroup">
                                                        <label>Review <sup>*</sup></label>
                                                        <textarea class="form-control" rows="5"
                                                            required="required"></textarea>
                                                    </div>
                                                    <div class="form-goroup form-group-button">
                                                        <button class="btn custom-button" value="submit">Submit
                                                            Review</button>
                                                    </div>
                                                </form>
                                            </div>
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
            <!-- Area-heading start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline ">
                        <h4>featured products</h4>
                    </div>
                </div>
            </div>
            <!-- Area-heading end -->
            <div class="row">
                <div class="upsell-product">
                    <!-- single-product start -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product page-single-item">
                            <span class="sale-text">Hot</span>
                            <span class="new-text">New</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/44.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product page-single-item">
                            <span class="sale-text">Hot</span>
                            <span class="new-text">30%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/56.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product page-single-item">
                            <span class="sale-text">Hot</span>
                            <span class="new-text">New</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/11.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product page-single-item">
                            <span class="new-text">New</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/20.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Asos Extream</a></h5>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$80.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product sin-items">
                            <span class="sale-text">Hot</span>
                            <span class="new-text">40%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/1.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product sin-items">
                            <span class="sale-text">Hot</span>
                            <span class="new-text">60%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/41.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                        <div class="single-product sin-items">
                            <span class="sale-text">Hot</span>
                            <span class="new-text">New</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/33.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                        <div class="single-product sin-items">
                            <span class="sale-text">Special</span>
                            <span class="new-text">30%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/53.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
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
    <!-- single-page-feature start -->
    <div class="single-page-feature area-padding bottom-single">
        <div class="container">
            <!-- Area-heading start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline ">
                        <h4>Related products</h4>
                    </div>
                </div>
            </div>
            <!-- Area-heading end -->
            <div class="row">
                <div class="feature-product related-product">
                    <!-- single-product start -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product">
                            <span class="sale-text">Special</span>
                            <span class="new-text">30%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/24.jpg" alt="">
                                    <img class="second-img" src="img/product/23.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product">
                            <span class="sale-text">Special</span>
                            <span class="new-text">30%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/51.jpg" alt="">
                                    <img class="second-img" src="img/product/25.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-product">
                            <span class="sale-text">Special</span>
                            <span class="new-text">30%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/26.jpg" alt="">
                                    <img class="second-img" src="img/product/56.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">$490.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product end -->
                    <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                        <div class="single-product">
                            <span class="sale-text">Special</span>
                            <span class="new-text">30%</span>
                            <div class="product-img">
                                <a href="#">
                                    <img class="first-img" src="img/product/58.jpg" alt="">
                                    <img class="second-img" src="img/product/27.jpg" alt="">
                                </a>
                                <div class="product-summary">
                                    <div class="product-details">
                                        <div class="add-cart">
                                            <a href="#">add to cart</a>
                                        </div>
                                        <div class="add-action">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li class="quickview"><a href="#" title="Quick view" data-toggle="modal"
                                                        data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h5 class="product-name"><a href="#">Ladis Extream</a></h5>
                                <div class="pro-rating no-rating">
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
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