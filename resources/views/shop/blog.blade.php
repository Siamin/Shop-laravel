@extends ('shop.layouts.master')

@section('content')



<!-- shop page start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="shop-head">
                    <ul class="shop-head-menu">
                        <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                        <li>Blog Details</li>
                    </ul>
                </div><!-- shop head end -->
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog11.jpg" alt="" />
                    </div>
                    <div class="post-information">
                        <h2>Blog image post layout</h2>
                        <div class="entry-meta">
                            <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
                            <span><i class="fa fa-clock-o"></i> November 28, 2014</span>
                            <span class="tag-meta">
                                <i class="fa fa-folder-o"></i>
                                <a href="#">Fashion</a>,
                                <a href="#">WordPress</a>
                            </span>
                            <span>
                                <i class="fa fa-tags"></i>
                                <a href="#">fashion</a>,
                                <a href="#">t-shirt</a>,
                                <a href="#">white</a>
                            </span>
                            <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span>
                        </div>
                        <div class="entry-content">
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas
                                hendrerit.</p>
                            <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices,
                                mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend.
                                Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.
                                Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur.
                                Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.
                            </p>
                            <blockquote>
                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In
                                    venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed,
                                    cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum
                                    tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.
                                </p>
                            </blockquote>
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor,
                                sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum.
                                Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur
                                lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non
                                lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt
                                eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet
                                tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo
                                dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum.
                                Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus
                                finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit.
                                Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis
                                interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis
                                metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis
                                eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem
                                condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus.
                                Nunc pulvinar sollicitudin molestie.</p>
                        </div>
                        <div class="social-sharing">
                            <h3>Share this post</h3>
                            <div class="sharing-icon">
                                <a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                <a href="#" data-toggle="tooltip" title="Google-plus"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="author-info">
                            <div class="author-avatar"><img src="img/blog/b18.jpg" alt="admin"></div>
                            <div class="author-description">
                                <h2>About the Author: <a href="#">admin</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="clear"></div>
                <div class="single-post-comments">
                    <div class="comments-area">
                        <div class="comments-heading">
                            <h3>6 comments</h3>
                        </div>
                        <div class="comments-list">
                            <ul>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/b18.jpg" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">admin</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2014 at 1:38 am</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>just a nice post</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/b18.jpg" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">demo</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2014 at 2:25 pm</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                consectetur</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/b18.jpg" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">admin</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2014 at 3:18 pm </span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel
                                                mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque
                                                libero nec</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/b18.jpg" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">demo</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                consectetur</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/b18.jpg" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">admin</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel
                                                mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque
                                                libero nec</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="threaded-comments">
                                    <div class="comments-details">
                                        <div class="comments-list-img">
                                            <img src="img/blog/b18.jpg" alt="post-author">
                                        </div>
                                        <div class="comments-content-wrap">
                                            <span>
                                                <b><a href="#">demo</a></b>
                                                Post author
                                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                                                <a href="#">Reply</a>
                                            </span>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                consectetur</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Reply </h3>
                        <span class="email-notes">Your email address will not be published. Required fields are
                            marked *</span>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p>Name *</p>
                                    <input type="text" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p>Email *</p>
                                    <input type="email" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p>Website</p>
                                    <input type="text" />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                    <p>Website</p>
                                    <textarea id="message" cols="30" rows="10"></textarea>
                                    <input type="submit" value="Post Comment" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- single-blog end -->

            </div>
        </div>
    </div>
</div>
<!-- shop end -->


<!-- Start service  -->
<div class="service-area">

</div>
<!-- End service  -->


@endsection