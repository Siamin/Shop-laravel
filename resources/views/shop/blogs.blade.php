@extends ('shop.layouts.master')

@section('content')


<!-- shop page area start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">

            <!-- blog post start -->
            <div class="col-lg-12 col-md-12 col-sm-12">

                <!-- shop head end -->
                <div class="shop-product-view">
                    <div class="product-tab-area">
                        <!-- Tab Bar start-->
                        <!-- <div class="tab-bar blog-bar">
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="sort-by">
                                        <label>Created At</label>
                                        <select>
                                            <option value="position">Created At</option>
                                            <option value="name">Added By</option>
                                        </select>
                                        <a href="#"><i class="fa fa-long-arrow-up"></i></a>
                                    </div>
                                </div>
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
                            </div>
                        </div> -->
                        <!-- Tab Bar end-->
                        <div class="clearfix"></div>

                        <div class="blog-post-item">

                            @foreach($blogs as $blog)
                            <!-- single-blog-post start -->
                            <div class="single-blog-item">
                                <div class="blog-post-img">
                                    <a href="#"><img src="/upload/image/blog/{{$blog->Image}}" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="post-headline">
                                        <h4><a href="blog-details.html">{{$blog->getTitle()}}</a></h4>
                                        <h6>{{$blog->updated_at}}</h6>
                                    </div>
                                    <p>{{$blog->getDescription()}}
                                        <span><a href="{{route('ShopBlog.show',[$blog])}}">Read More</a></span>
                                    </p>
                                    <!-- <h5>Posted By Usdtheme</h5> -->
                                </div>
                            </div>
                            <!-- single-blog-post end -->
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop page area end -->



<!-- Start service Area -->
<div class="service-area">

</div>
<!-- End service Area -->

@endsection