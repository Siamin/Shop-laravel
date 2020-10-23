@extends ('shop.layouts.master')

@section('content')


<!-- shop page  start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shop-head">
                    <ul class="shop-head-menu">
                        <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                        <li>Product List</li>
                    </ul>
                </div><!-- shop head end -->

                <div class="shop-product-view">
                    <!-- Shop Product Tab Area -->
                    <div class="product-tab-area">
                        <!-- Tab Bar -->
                        <div class="tab-bar">
                            <div class="tab-bar-inner">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li><a href="#shop-grid" data-toggle="tab"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="active"><a href="#shop-list" data-toggle="tab"><i
                                                class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                            <!-- <div class="toolbar">
                                <div class="pager-list">
                                    <div class="limiter">
                                        <label>Show</label>
                                        <select>
                                            <option value="9">12</option>
                                            <option value="12">15</option>
                                            <option value="24">18</option>
                                            <option value="36">36</option>
                                        </select>
                                        <span>per page</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- End Tab Bar -->

                        <!-- Tab Content -->
                        <div class="clearfix"></div>
                        <div class="tab-content">

                            <div id="shop-grid" class="tab-pane" role="tabpanel">
                                <div class="row">
                                    @foreach($products as $product)
                                    <!-- single-product start -->
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 shop-single-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="first-img"
                                                        src="/upload/image/product/{{$product->image}}"
                                                        style="height: 300px;" alt="">
                                                    <!-- <img class="second-img" src="img/product/24.jpg" alt=""> -->
                                                </a>
                                                <div class="product-summary">
                                                    <div class="product-details">
                                                        <div class="add-cart">
                                                            <a href="#">add to bascet</a>
                                                        </div>
                                                        <!-- <div class="add-action">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        title="Add to Wishlist"><i
                                                                            class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                                            class="fa fa-refresh"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name"><a
                                                        href="{{Route('Product.show',[$product->id])}}">{{$product->title}}</a>
                                                </h5>
                                                <!-- <div class="pro-rating no-rating">
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </div> -->
                                                <div class="price-box">
                                                    <!-- <span class="old-price">$170.00</span> -->
                                                    <span class="new-price">{{$product->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    @endforeach
                                </div>
                            </div>

                            <div id="shop-list" class="tab-pane active shop-list" role="tabpanel">
                                <div class="row">
                                    @foreach($products as $product)
                                    <!-- single blog start -->
                                    <div class="single-product list-item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                            <div class="product-img shop-list-product">
                                                <a href="#">
                                                    <img class="first-img"
                                                        src="/upload/image/product/{{$product->image}}" alt="">
                                                    <!-- <img class="second-img" src="img/product/44.jpg" alt=""> -->
                                                </a>
                                                <div class="product-summary">
                                                    <div class="product-details">
                                                        <div class="add-cart">
                                                            <a href="#">add to cart</a>
                                                        </div>
                                                        <!-- <div class="add-action">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        title="Add to Wishlist"><i
                                                                            class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i
                                                                            class="fa fa-refresh"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        title="Quick view"><i class="fa fa-eye"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                                            <div class="product-list shop-review">
                                                <div class="product-name">
                                                    <h3><a
                                                            href="{{Route('Product.show',[$product->id])}}">{{$product->title}}</a>
                                                    </h3>
                                                </div>
                                                <div class="product-reveiw">
                                                    <p>{{$product->description}}</p>
                                                </div>
                                                <!--div class="ratings no-rating">
                                                    <ul>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div-->
                                                <div class="price-box list-price">
                                                    <span class="new-price">{{$product->price}} تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single blog end -->
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <!-- bottom toolbar start-->
                        <!-- <div class="tab-bar tab-bar-bottom blog-tab-bottom">
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="sort-by">
                                        <label>Sort By</label>
                                        <select>
                                            <option value="position">Position</option>
                                            <option value="name">Name</option>
                                            <option value="price">Price</option>
                                        </select>
                                        <a href="#"><i class="fa fa-long-arrow-up"></i></a>
                                    </div>
                                </div>
                                <div class="pages">
                                    <ol>
                                        <li class="current">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a title="Next" href="#"><i class="fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div> -->
                        <!-- End Tab Bar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop page  end -->



<!-- Start service  -->
<div class="service-area">

</div>
<!-- End service  -->

@endsection