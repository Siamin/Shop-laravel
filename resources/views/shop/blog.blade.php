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
                        <li>Blog</li>
                    </ul>
                </div><!-- shop head end -->
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                    <div class="post-thumbnail">
                        <img src="/upload/image/blog/{{$blog->Image}}" alt="" />
                    </div>
                    <div class="post-information">
                        <h2>{{$blog->Title}}</h2>
                        <div class="entry-meta">
                            <span class="author-meta"><i class="fa fa-user"></i> <a href="#">{{$blog->user->name}}
                                    {{$blog->user->lastname}}</a></span>
                            <span><i class="fa fa-clock-o"></i>{{$blog->created_at}}</span>
                            <!-- <span class="tag-meta">
                                <i class="fa fa-folder-o"></i>
                                <a href="#">Fashion</a>,
                                <a href="#">WordPress</a>
                            </span> -->
                            <span>
                                <i class="fa fa-tags"></i>
                                <?php $ct=1?>
                                @foreach(explode(',',$blog->Tags) as $row)
                                @if($ct++>1),@endif
                                <a>{{ $row }}</a>
                                @endforeach
                            </span>
                            <!-- <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span> -->
                        </div>
                        <div class="entry-content">
                            {{$blog->Description}}
                        </div>
                        <!-- <div class="social-sharing">
                            <h3>Share this post</h3>
                            <div class="sharing-icon">
                                <a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                <a href="#" data-toggle="tooltip" title="Google-plus"><i
                                        class="fa fa-google-plus"></i></a>
                                <a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div> -->
                        <!-- <div class="author-info">
                            <div class="author-avatar"><img src="../img/blog/b18.jpg" alt="admin"></div>
                            <div class="author-description">
                                <h2>About the Author: <a href="#">admin</a></h2>
                            </div>
                        </div> -->
                    </div>
                </article>
                <!-- <div class="clear"></div>
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
                                            <img src="../img/blog/b18.jpg" alt="post-author">
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
                                            <img src="../img/blog/b18.jpg" alt="post-author">
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
                                            <img src="../img/blog/b18.jpg" alt="post-author">
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
                                            <img src="../img/blog/b18.jpg" alt="post-author">
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
                                            <img src="../img/blog/b18.jpg" alt="post-author">
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
                                            <img src="../img/blog/b18.jpg" alt="post-author">
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
                </div> -->

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